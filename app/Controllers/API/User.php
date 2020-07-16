<?php

namespace App\Controllers\Api;

use App\Model\UserBasicDetailsModel;
use App\Model\UserChurchDetailsModel;
use App\Model\UserFamilyDetailsModel;
use App\Model\UserModel;
use App\Model\UserPersonalDetailsModel;
use App\Model\UserPhotos;
use App\Model\UserPhysicalDetailsModel;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $format = 'json';

    public function __construct()
    {

        model('App\Models\UserModel');
        model('App\Models\UserPhotos');
        model('App\Models\UserBasicDetailsModel');
        model('App\Models\UserChurchDetailsModel');
        model('App\Models\UserFamilyDetailsModel');
        model('App\Models\UserPersonalDetailsModel');
        model('App\Models\UserPhysicalDetailsModel');
    }

    public function index()
    {
        return $this->respond(array('test'));
    }


    public function doesUserExist($userid)
    {
        $model = new UserModel();
        $user = $model->where('id', $userid)->first();
        if ($user != null) {
            return true;
        }
        return false;
    }

    public function continueRegistration()
    {
        if ($this->request->getMethod() == "post") {
            $body = $this->request->getJSON();
            $model = new UserModel();
            $user = $model->asObject()->where('username', $body->username)->first();
            if ($user != null) {
                return $this->respond([
                    'userId' => $user->id,
                    'success' => true
                ]);
            }
            return $this->respond([
                'success' => false
            ]);
        }
    }

    public function loginUser()
    {
        if ($this->request->getMethod() == "post") {
            $body = $this->request->getJSON();
            $model = new UserModel();
            $model->where('username', $body->email);
            $user = $model->asObject()->where('password', $body->password)->first();

            $model = new UserBasicDetailsModel();
            if ($user != null) {
                $model->where('user_id', $user->id);
                $userDet = $model->first();
                return $this->respond([
                    'userId' => $user->id,
                    'userName' => $userDet['name'] . " " . $userDet['surname'],
                    'gender' => $userDet['gender'],
                    'registration_complete' => $user->registrationComplete ? true : false,
                    'verified' => $user->verified ? true : false,
                    'banned' => $user->banned ? true : false,
                    'success' => true
                ]);
            }
            return $this->respond([
                'success' => false
            ]);
        }
    }

    public function registerUser()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            $model = new UserModel();
            $user = $model->where('username', $body->username)->first();
            if ($user != null) {
                return $this->respond(['success' => false], 200);
            }
            $data = [
                'username' => $body->username
            ];
            $model->insert($data);
            $user_id = $model->getInsertID();
            $emptyData = ['user_id' => $user_id];
            $model = new UserBasicDetailsModel();
            $model->insert(['user_id' => $user_id, 'mobile_no' => $body->username]);
            $model = new UserFamilyDetailsModel();
            $model->insert($emptyData);
            $model = new UserChurchDetailsModel();
            $model->insert($emptyData);
            $model = new UserPersonalDetailsModel();
            $model->insert($emptyData);
            $model = new UserPhysicalDetailsModel();
            $model->insert($emptyData);
            $model = new UserPhotos();
            $model->insert($emptyData);
            return $this->respond(['user_id' => $user_id, 'success' => true]);
        }
    }


    public function basicDetails()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'name' => $body->name,
                    'surname' => $body->surname,
                    'dob' => $body->dob,
                    'gender' => $body->gender,
                    'martial_status' => $body->martial_status,
                    'mobile_no' => $body->mobile_no,
                    'country' => $body->country,
                    'state' => $body->state,
                    'city' => $body->city,
                    'postal_code' => $body->postal_code,
                ];
                $model = new UserBasicDetailsModel();
                $model->update(['user_id', $body->user_id], $data);
                return $this->respond(['success' => true]);
            }
            return $this->respond(['error' => 'user doesn not exist'], 400);
        }
    }

    public function getUserBasicDetails($userid)
    {
        if ($this->request->getMethod() == "get") {
            $model = new UserBasicDetailsModel();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }
    }


    public function familyDetails()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'fathers_name' => $body->fathers_name,
                    'mothers_name' => $body->mothers_name,
                    'no_brothers' => $body->no_brothers,
                    'no_sisters' => $body->no_sisters,
                    'parent_contact' => $body->parent_contact,
                ];
                $model = new UserFamilyDetailsModel();
                $model->update(['user_id', $body->user_id], $data);
                return $this->respond(['success' => true]);
            }
            return $this->respond(['error' => 'user doesn not exist'], 400);
        }
    }

    public function getUserFamilyDetails($userid)
    {
        if ($this->request->getMethod() == "get") {
            $model = new UserFamilyDetailsModel();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }

    }

    public function churchDetails()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'name_church_priest' => $body->name_church_priest,
                    'church_contact_no' => $body->church_contact_no,
                    'denomination' => $body->denomination,
                    'name_church' => $body->name_church,
                    'church_add' => $body->church_add,
                    'year_baptism' => $body->year_baptism,
                    'ministry' => $body->ministry,
                ];
                $model = new UserChurchDetailsModel();
                $model->update(['user_id', $body->user_id], $data);
                return $this->respond(['success' => true]);
            }
            return $this->respond(['error' => 'user doesn not exist'], 400);
        }
    }

    public function getUserChurchDetails($userid)
    {
        if ($this->request->getMethod() == "get") {

            $model = new UserChurchDetailsModel();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }

    }

    public function personalDetails()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'highest_edu' => $body->highest_edu,
                    'partner_expectation' => $body->partner_expectation,
                    'specialization' => $body->specialization,
                    'occupation' => $body->occupation,
                    'designation' => $body->designation,
                    'annual_income' => $body->annual_income,
                    'mother_tongue' => $body->mother_tongue,
                    'language' => $body->language,
                    'drink' => $body->drink,
                    'smoke' => $body->smoke,
                    'diet' => $body->diet,
                ];
                $model = new UserPersonalDetailsModel();
                $model->update(['user_id', $body->user_id], $data);

                return $this->respond(['success' => true]);
            }
            return $this->respond(['error' => 'user doesn not exist'], 400);
        }
    }

    public function getUserPersonalDetails($userid)
    {
        if ($this->request->getMethod() == "get") {

            $model = new UserPersonalDetailsModel();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }

    }

    public function physicalDetails()
    {
        if ($this->request->getMethod() == "post") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'height' => $body->height,
                    'weight' => $body->weight,
                    'complexion' => $body->complexion,
                    'blood_group' => $body->blood_group,
                    'body_type' => $body->body_type,
                    'disability' => $body->disability,
                ];
                $model = new UserPhysicalDetailsModel();
                $model->update(['user_id', $body->user_id], $data);

                $model = new UserModel();
                $model->isRegistrationComplete($body->user_id);

                return $this->respond(['success' => true]);
            }
            return $this->respond(['error' => 'user doesn not exist'], 400);
        }
    }

    public function getUserPhysicalDetails($userid)
    {
        if ($this->request->getMethod() == "get") {
            $model = new UserPhysicalDetailsModel();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }

    }

    public function getUser($user_id)
    {
        $model = new UserModel();
        $data = $model->getUsers($user_id);

        return $this->respond(['data' => $data, 'success' => true]);
    }


    public function getAllUsers()
    {
        $model = new UserModel();
        $data = $model->getUsers();
        return $this->respond(['data' => $data, 'success' => true]);
    }

    public function uploadUserPhotos()
    {
        $user_id = $this->request->getVar('userId');
        $files['profile_pic'] = null;
        $files['image1'] = null;
        $files['image2'] = null;
        $files['image3'] = null;
        if ($this->request->getFile('profile_pic') != null) {
            $files['profile_pic'] = $this->request->getFile('profile_pic')->getRandomName();
            $this->request->getFile('profile_pic')->move('uploads/', $files['profile_pic']);
        }
        if ($this->request->getFile('image1') != null) {
            $files['image1'] = $this->request->getFile('image1')->getRandomName();
            $this->request->getFile('image1')->move('uploads/', $files['image1']);
        }
        if ($this->request->getFile('image2') != null) {
            $files['image2'] = $this->request->getFile('image2')->getRandomName();
            $this->request->getFile('image2')->move('uploads/', $files['image2']);
        }
        if ($this->request->getFile('image3') != null) {
            $files['image3'] = $this->request->getFile('image3')->getRandomName();
            $this->request->getFile('image3')->move('uploads/', $files['image3']);
        }


        $model = new UserPhotos();
        $old_images = $model->select('profile_pic,image1,image2,image3')->where('user_id', $user_id)->get()->getResultArray()[0];
        $data = [];
        if ($files['profile_pic'] != null) {
            if ($old_images['profile_pic'] != '' && $old_images['profile_pic'] != null) {
                unlink('uploads/' . $old_images['profile_pic']);
            }
            $data['profile_pic'] = $files['profile_pic'];
        }
        if ($files['image1'] != null) {
            if ($old_images['image1'] != '' && $old_images['image1'] != null) {
                unlink('uploads/' . $old_images['image1']);
            }
            $data['image1'] = $files['image1'];
        }
        if ($files['image2'] != null) {
            if ($old_images['image2'] != '' && $old_images['image2'] != null) {
                unlink('uploads/' . $old_images['image2']);
            }
            $data['image2'] = $files['image2'];
        }
        if ($files['image3'] != null) {
            if ($old_images['image3'] != '' && $old_images['image3'] != null) {
                unlink('uploads/' . $old_images['image3']);
            }
            $data['image3'] = $files['image3'];
        }
        if (count($data)) {
            $model->update($user_id, $data);
        }
        return $this->respond(['success' => true]);
    }

    public function getUserPhotos($userid)
    {
        if ($this->request->getMethod() == "get") {
            $model = new UserPhotos();
            return $this->respond(['data' => $model->where('user_id', $userid)->first()]);
        }
    }

    function resize_image($file, $w, $h, $crop = FALSE)
    {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }
        $src = imagecreatefromjpeg($file);
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        return $dst;
    }
}