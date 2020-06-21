<?php

namespace App\Model;

use  \CodeIgniter\Model;

class UserModel extends Model
{
    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
    {
        db_connect();
        $this->createTable();
        parent::__construct($db, $validation);
    }

    protected $table = 'Users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $beforeInsert = ['beforeInsert'];


    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

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
                'username' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'banned' => [
                    'type' => 'int',
                    'constraint' => '2',
                    'default' => '0',
                ],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('Users', true);
        }
    }

    public function validateUser(array $data)
    {

        $user = $this->where('username', $data['username'])->first();;
        if ($user) {
             return password_verify($data['password'],$user['password']);
        }
        return false;

    }

    public function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}