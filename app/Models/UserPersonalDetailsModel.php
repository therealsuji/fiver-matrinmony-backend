<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class   UserPersonalDetailsModel extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'user_personal_details';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'user_id',
        'highest_edu',
        'specialization',
        'occupation',
        'designation',
        'annual_income',
        'mother_tongue',
        'language',
        'drink',
        'smoke',
        'diet',
        'partner_expectation',
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
                'highest_edu' => [
                    'type' => 'INT',
                    'constraint' => 5,
                ],
                'specialization' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'occupation' => [
                    'type' => 'INT',
                    'constraint' => '5',
                ],
                'designation' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'annual_income' => [
                    'type' => 'INT',
                    'constraint' => '5',
                ],
                'mother_tongue' => [
                    'type' => 'INT',
                    'constraint' => '5',
                ],
                'language' => [
                    'type' => 'INT',
                    'constraint' => '5',
                ],
                'drink' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'smoke' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],'diet' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],'partner_expectation' => [
                    'type' => 'INT',
                    'constraint' => '2',
                ],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('user_personal_details', true);
        }
    }


}