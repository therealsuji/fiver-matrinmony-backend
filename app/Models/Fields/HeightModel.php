<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class  HeightModel extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'fl_height';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'field_value',
    ];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';


    public function createTable()
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

                ], 'field_value' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('fl_height', true);
        }
    }

}