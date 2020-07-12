<?php

namespace App\Controllers\Api;

use App\Model\UserBasicDetailsModel;
use App\Model\UserChurchDetailsModel;
use App\Model\UserFamilyDetailsModel;
use App\Model\UserModel;
use App\Model\UserPersonalDetailsModel;
use App\Model\UserPhysicalDetailsModel;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $format = 'json';

    public function __construct()
    {

        model('App\Models\UserModel');
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
            $model->insert( ['user_id' => $user_id,'mobile_no'=>$body->username]);
            $model = new UserFamilyDetailsModel();
            $model->insert($emptyData);
            $model = new UserChurchDetailsModel();
            $model->insert($emptyData);
            $model = new UserPersonalDetailsModel();
            $model->insert($emptyData);
            $model = new UserPhysicalDetailsModel();
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


}