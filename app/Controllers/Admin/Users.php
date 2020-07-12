<?php namespace App\Controllers\Admin;

use App\Controllers\Api\User;
use App\Controllers\BaseController;
use App\Model\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $currentUrl = uri_string();
        $model = new UserModel();
        $model->isRegistrationComplete();
        $currentDate = date('Y-m-d');

        $data['users'] = $model
            ->select("FlOOR(DATEDIFF('$currentDate',user_basic_details.dob)/365) as derivedDob ,user_basic_details.*,users.*")
            ->join('user_basic_details', 'user_basic_details.user_id = users.id')->findAll();
        $data['bannedUsers'] = $model->select("FlOOR(DATEDIFF('$currentDate',user_basic_details.dob)/365) as derivedDob ,user_basic_details.*,users.*")
            ->join('user_basic_details', 'user_basic_details.user_id = users.id')->where('banned', 1)->get()->getResultArray();
        $data['completedUsers'] = $model->where('registrationComplete', 1)->select("FlOOR(DATEDIFF('$currentDate',user_basic_details.dob)/365) as derivedDob ,user_basic_details.*,users.*")
            ->join('user_basic_details', 'user_basic_details.user_id = users.id')->get()->getResultArray();

        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('users', $data);
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

    public function ban_user($id)
    {
        $model = new UserModel();
        $model->banUser($id);
        return redirect()->back();
    }

    public function view($id)
    {
        $currentUrl = uri_string();
        $model = new UserModel();
        $data['user'] = $model->getUsers($id, true)[0];
        $data['details'] = $model->find($id);
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('viewUser', $data);
        echo view('templates/footer');
    }

    public function verify_user($id)
    {
        $model = new UserModel();
        $model->verifyUser($id);
        return redirect()->back();
    }

    public function setUserPassword()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'password' => 'required',
            ];
            $errMsg = [
                'password' => [
                    'required' => 'Please enter the users password'
                ],
            ];
            if ($this->validate($rules, $errMsg)) {
                $model = new UserModel();
                $model->update($this->request->getVar('id'), ['password' => $this->request->getVar('password')]);
                $this->session->setFlashdata('success', true);
                return redirect()->back();
            }
        }
    }

}
