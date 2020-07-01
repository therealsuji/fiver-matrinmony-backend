<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
    {

        $this->createTable();
        parent::__construct($db, $validation);
    }

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password','banned'];

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
                ],
                'username' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'password' => [
                    'type' => 'TEXT',
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

    public function validateUser(array $data)
    {
        $user = $this->where('username', $data['username'])->first();;
        if ($user) {
             return $data['password'] == $user['password'];
        }
        return false;
    }


}