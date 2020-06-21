<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $currentUrl = uri_string();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('users');
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}
