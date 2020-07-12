<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Model\UserBasicDetailsModel;
use App\Model\UserModel;

class Dashboard extends BaseController
{

    public function index()
    {
        $currentUrl = uri_string();
        $model = new UserModel();
        $data['userCount'] = $model->countAll();
        $model = new UserBasicDetailsModel();
        $data['femaleUserCount'] = $model->where('gender','female')->countAllResults();
        $data['maleUserCount'] = $model->where('gender','male')->countAllResults();

        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('dashboard',$data);
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}
