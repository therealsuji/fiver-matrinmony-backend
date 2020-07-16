<?php

namespace App\Model;

use  \CodeIgniter\Model;
use Config\Database;

class  UserPhotos extends Model
{
//    public function __construct(\CodeIgniter\Database\ConnectionInterface &$db = null, \CodeIgniter\Validation\ValidationInterface $validation = null)
//    {
//
//        $this->createTable();
//        parent::__construct($db, $validation);
//    }

    protected $table = 'user_photos';
    protected $primaryKey = 'user_id';

    protected $allowedFields = [
        'user_id',
        'profile_pic',
        'image1',
        'image2',
        'image3',
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
                'profile_pic' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'image1' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'image2' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'image3' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'created_at datetime default current_timestamp',
                'updated_at datetime default current_timestamp on update current_timestamp',
            ];
            $forge->addField($fields)->createTable('user_photos', true);
        }
    }


}