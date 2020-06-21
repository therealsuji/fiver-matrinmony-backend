<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class UsersBasicDetails extends ResourceController
{
    protected $modelName = 'App\Models\UserBasicDetailsModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond(array('test'));
    }

    public function test()
    {
        return $this->respond();
    }
}