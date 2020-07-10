<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class UserFamilyDetailsModel extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'user_family_details';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'user_id',
        'fathers_name',
        'mothers_name',
        'no_brothers',
        'no_sisters',
        'parent_contact',
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
                ],
                'fathers_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'mothers_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'no_brothers' => [
                    'type' => 'INT',
                    'constraint' => 5,
                ],
                'no_sisters' => [
                    'type' => 'INT',
                    'constraint' => 5,
                ],
                'parent_contact' => [
                    'type' => 'INT',
                    'constraint' => 5,
                ],

                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('user_family_details', true);
        }
    }


}