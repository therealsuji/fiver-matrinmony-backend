<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class  UserChurchDetailsModel extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'user_church_details';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'user_id',
        'name_church_priest',
        'church_contact_no',
        'denomination',
        'name_church',
        'church_add',
        'year_baptism',
        'ministry',
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
                ], 'name_church_priest' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'church_contact_no' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'denomination' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'name_church' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'church_add' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'year_baptism' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ], 'ministry' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],


                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('user_church_details', true);
        }
    }


}