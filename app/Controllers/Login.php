<?php namespace App\Controllers;

use App\Model\SystemUserModel;
use CodeIgniter\Session\Session;


class Login extends BaseController
{


    public function index()
    {

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];
            $errMsg = [
                'username' => [
                    'required' => 'Please enter your username'
                ],
                'password' => [
                    'required' => 'Please enter your password'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new SystemUserModel();
                $cred = [
                    "username" => $this->request->getVar('username'),
                    "password" => $this->request->getVar('password'),
                ];
                if ($model->validateUser($cred)) {
                    $this->session->set('loggedin',true);
                    return redirect()->to('dashboard');
                }

            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view('templates/auth-header');
        echo view('login', $data);
        echo view('templates/auth-footer');

    }

    public function logOut(){
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }


}
