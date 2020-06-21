<?php namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('templates/auth-header');
        echo view('login');
        echo view('templates/auth-footer');

    }

    //--------------------------------------------------------------------

}
