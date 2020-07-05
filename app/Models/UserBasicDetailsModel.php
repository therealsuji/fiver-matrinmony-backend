<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class UserBasicDetailsModel extends Model
{
    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
    {
     ;
        $this->createTable();
        parent::__construct($db, $validation);
    }

    protected $table = 'user_basic_details';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'user_id',
        'name',
        'surname',
        'dob',
        'gender',
        'martial_status',
        'mobile_no',
        'country',
        'state',
        'city',
        'postal_code',
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function createTable()
    {
        $forge = Database::forge();
        if ($forge) {
            $fields = [

                'user_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'unique' => true,
                    'auto_increment' => true,
                ],
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'surname' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'dob' => [
                    'type' => 'VARCHAR',
                    'constraint' => '25',
                ],
                'gender' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'martial_status' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'mobile_no' => [
                    'type' => 'VARCHAR',
                    'constraint' => '25',
                ],
                'country' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'state' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'city' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'postal_code' => [
                    'type' => 'VARCHAR',
                    'constraint' => '25',
                ],

                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
             $forge->addField($fields)->createTable('user_basic_details', true);
        }
    }


}