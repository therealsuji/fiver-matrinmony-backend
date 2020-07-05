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
        model('App\Models\Fields\AnnualIncomeModel');
        model('App\Models\Fields\BloodGroupModel');
        model('App\Models\Fields\BodyTypeModel');
        model('App\Models\Fields\ComplexionModel');
        model('App\Models\Fields\DenominationModel');
        model('App\Models\Fields\DenominationModel');
        model('App\Models\Fields\DietModel');
        model('App\Models\Fields\HeightModel');
        model('App\Models\Fields\HighestEducationModel');
        model('App\Models\Fields\LanguageModel');
        model('App\Models\Fields\MaritalStatusModel');
        model('App\Models\Fields\OccupationModel');
        model('App\Models\Fields\PartnerExpectationModel');
    }

    public function index()
    {
        return $this->respond(array('test'));
    }


    public function doesUserExist($userid)
    {
        $model = new UserModel();
        $user = $model->where('username', $userid)->first();
        if ($user != null) {
            return true;
        }
        return false;
    }

    public function loginUser()
    {
         if ($this->request->getMethod() == "post") {
            $body = $this->request->getJSON();
            $model = new UserModel();
            $model->where('username', $body->email);
            $user = $model->asObject()->where('password', $body->password)->first();
            if ($user != null) {
                return $this->respond([
                    'userId' => $user->id,
                    'registration_complete' => $user->registrationComplete,
                    'banned' => $user->banned,
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
                return $this->respond(['success' => false], 400);
            }
            $data = [
                'username' => $body->username
            ];
            $model->save($data);
            return $this->respond(['user_id' => $model->getInsertID(), 'success' => true]);
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
                    'user_id' => $body->user_id,
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
                $model->insert($data);
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
                    'user_id' => $body->user_id,
                    'fathers_name' => $body->fathers_name,
                    'mothers_name' => $body->mothers_name,
                    'no_brothers' => $body->no_brothers,
                    'no_sisters' => $body->no_sisters,
                    'parent_contact' => $body->parent_contact,
                ];
                $model = new UserFamilyDetailsModel();
                $model->insert($data);
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
        if ($this->request->getMethod() == "get") {

            $body = $this->request->getJSON();
            if (!isset($body->user_id)) {
                return $this->respond(['error' => 'user id not provided'], 400);
            }
            $userExist = $this->doesUserExist($body->user_id);
            if ($userExist) {
                $data = [
                    'user_id' => $body->user_id,
                    'name_church_priest' => $body->name_church_priest,
                    'church_contact_no' => $body->church_contact_no,
                    'denomination' => $body->denomination,
                    'name_church' => $body->name_church,
                    'church_add' => $body->church_add,
                    'year_baptism' => $body->year_baptism,
                    'ministry' => $body->ministry,
                ];
                $model = new UserChurchDetailsModel();
                $model->insert($data);
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
                    'user_id' => $body->user_id,
                    'highest_edu' => $body->highest_edu,
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
                $model->insert($data);
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
                    'user_id' => $body->user_id,
                    'height' => $body->height,
                    'weight' => $body->weight,
                    'complexion' => $body->complexion,
                    'blood_group' => $body->blood_group,
                    'disability' => $body->disability,
                ];
                $model = new UserPhysicalDetailsModel();
                $model->insert($data);
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
}