<?php

namespace App\Model;

use  \CodeIgniter\Model;

class UserBasicDetailsModel extends Model
{
    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
    {
        db_connect();
        $this->createTable();
        parent::__construct($db, $validation);
    }

    protected $table = 'Users';
    protected $primaryKey = 'id';

    protected $allowedFields = [];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function createTable()
    {
        $forge = \Config\Database::forge();
        if ($forge) {
            $fields = [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'unique' => true,
                    'auto_increment' => true
                ],

            ];
            $forge->addField($fields)->createTable('Users', true);
        }
    }


}