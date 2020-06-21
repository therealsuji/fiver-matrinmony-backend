<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    public function index()
    {
        $currentUrl = uri_string();

        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('dashboard');
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}
