<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password', 'banned','registrationComplete','verified','banned'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    private function createTable()
    {
        $forge = Database::forge();
        if ($forge) {
            $fields = [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'unique' => true,
                    'auto_increment' => true
                ],
                'username' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'password' => [
                    'type' => 'TEXT',
                ],
                'registrationComplete' => [
                    'type' => 'int',
                    'constraint' => '2',
                    'default' => '0',
                ],
                'verified' => [
                    'type' => 'int',
                    'constraint' => '2',
                    'default' => '0',
                ],
                'banned' => [
                    'type' => 'int',
                    'constraint' => '2',
                    'default' => '0',
                ],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('users', true);
        }
    }

    public function assignPassword()
    {

    }

    public function validateUser(array $data)
    {
        $user = $this->where('username', $data['username'])->first();;
        if ($user) {
            return $data['password'] == $user['password'];
        }
        return false;
    }

    public function getUsers($userId = null, $admin = false)
    {
        $this->select('user_church_details.*,user_family_details.*,user_personal_details.*,user_physical_details.*,user_basic_details.*,
        fl_annual_income.field_value as annual_income,
        fl_blood_group.field_value as blood_group,
        fl_body_type.field_value as body_type,
        fl_complexion.field_value as complexion,
        fl_denomination.field_value as denomination,
        fl_diet.field_value as diet,
        fl_height.field_value as height,
        fl_highest_education.field_value as highest_edu,
        fl1.field_value as language,
        fl2.field_value as mother_tongue,
        fl_martial_status.field_value as martial_status,
        fl_occupation.field_value as occupation,
        fl_partner_expectation.field_value as partner_expectation,
        fl_country.field_value as country,
        fl_state.field_value as state,
        fl_city.field_value as city,
        ');
        if (!$admin) {
            $this->where('users.verified', 1);
            $this->where('users.banned', 0);
        }
        if ($userId != null) {
            $this->where('users.id', $userId);
        }
        $this->join('user_basic_details', 'user_basic_details.user_id = users.id');
        $this->join('user_church_details', 'user_church_details.user_id = users.id');
        $this->join('user_family_details', 'user_family_details.user_id = users.id');
        $this->join('user_personal_details', 'user_personal_details.user_id = users.id');
        $this->join('user_physical_details', 'user_physical_details.user_id = users.id');
        $this->join('fl_annual_income', 'fl_annual_income.id = user_personal_details.annual_income', 'left');
        $this->join('fl_blood_group', 'fl_blood_group.id = user_physical_details.blood_group', 'left');
        $this->join('fl_body_type', 'fl_body_type.id = user_physical_details.body_type', 'left');
        $this->join('fl_complexion', 'fl_complexion.id = user_physical_details.complexion', 'left');
        $this->join('fl_denomination', 'fl_denomination.id = user_church_details.denomination', 'left');
        $this->join('fl_diet', 'fl_diet.id = user_personal_details.diet', 'left');
        $this->join('fl_height', 'fl_height.id = user_physical_details.height', 'left');
        $this->join('fl_highest_education', 'fl_highest_education.id = user_personal_details.highest_edu', 'left');
        $this->join('fl_language as fl1', 'fl1.id = user_personal_details.language', 'left');
        $this->join('fl_language as fl2', 'fl2.id = user_personal_details.mother_tongue', 'left');
        $this->join('fl_martial_status', 'fl_martial_status.id = user_basic_details.martial_status', 'left');
        $this->join('fl_occupation', 'fl_occupation.id = user_personal_details.occupation', 'left');
        $this->join('fl_partner_expectation', 'fl_partner_expectation.id = user_personal_details.partner_expectation', 'left');
        $this->join('fl_country', 'fl_country.id = user_basic_details.country', 'left');
        $this->join('fl_state', 'fl_state.id = user_basic_details.state', 'left');
        $this->join('fl_city', 'fl_city.id = user_basic_details.city', 'left');
        return $this->get()->getResultArray();
    }
    public function banUser($id){
        $this->select('*');
        $user= $this->asObject()->where('id',$id)->first();
         $this->update(['id'=>$id],['banned'=>!$user->banned]);
    }

    public function verifyUser($id){
        $this->select('*');
        $user= $this->asObject()->where('id',$id)->first();
        $this->update(['id'=>$id],['verified'=>!$user->verified]);
    }
    public function isRegistrationComplete($userId = null)
    {
        if($userId){
            $users = $this->getUsers($userId, true);
            $isCompleted = true;
            foreach ($users[0] as $field) {
                if ($field == '' || $field == null) {
                    $isCompleted = false;
                    break;
                }
            }
            if ($isCompleted){
                $data = ['registrationComplete'=>1];
                $this->update(['id'=>$userId],['registrationComplete'=>1]);
            }
            return;
        }

        $users = $this->getUsers(null, true);
        foreach ($users as $item) {
            $isCompleted = true;
            foreach ($item as $field) {
                if ($field == '' || $field == null) {
                    $isCompleted = false;
                    break;
                }
            }
            if ($isCompleted){
                $data = ['registrationComplete'=>1];
                $this->update(['id'=>$item['user_id']],['registrationComplete'=>1]);
            }
        }

    }

}