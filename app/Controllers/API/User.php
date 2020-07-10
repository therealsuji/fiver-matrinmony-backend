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
            $model->insert($emptyData);
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
                    'disability' => $body->disability,
                ];
                $model = new UserPhysicalDetailsModel();
                $model->update(['user_id', $body->user_id], $data);

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
        $model->select('user_church_details.*,user_family_details.*,user_personal_details.*,user_physical_details.*,user_basic_details.*,
        fl_annual_income.field_value as annual_income,
        fl_blood_group.field_value as blood_group,
        fl_body_type.field_value as body_type,
        fl_complexion.field_value as complexion,
        fl_denomination.field_value as denomination,
        fl_diet.field_value as diet,
        fl_height.field_value as height,
        fl_highest_education.field_value as highest_edu,
        fl_language.field_value as language,
        fl_martial_status.field_value as martial_status,
        fl_occupation.field_value as occupation,
        fl_partner_expectation.field_value as partner_expectation
        ');
        $model->where('users.id', $user_id);
        $model->where('users.verified', 1);
        $model->where('users.banned', 0);

        $model->join('user_basic_details', 'user_basic_details.user_id = users.id');
        $model->join('user_church_details', 'user_church_details.user_id = users.id');
        $model->join('user_family_details', 'user_family_details.user_id = users.id');
        $model->join('user_personal_details', 'user_personal_details.user_id = users.id');
        $model->join('user_physical_details', 'user_physical_details.user_id = users.id');
        $model->join('fl_annual_income', 'fl_annual_income.id = user_personal_details.annual_income', 'left');
        $model->join('fl_blood_group', 'fl_blood_group.id = user_physical_details.blood_group', 'left');
        $model->join('fl_body_type', 'fl_body_type.id = user_physical_details.body_type', 'left');
        $model->join('fl_complexion', 'fl_complexion.id = user_physical_details.complexion', 'left');
        $model->join('fl_denomination', 'fl_denomination.id = user_church_details.denomination', 'left');
        $model->join('fl_diet', 'fl_diet.id = user_personal_details.diet', 'left');
        $model->join('fl_height', 'fl_height.id = user_physical_details.height', 'left');
        $model->join('fl_highest_education', 'fl_highest_education.id = user_personal_details.highest_edu', 'left');
        $model->join('fl_language', 'fl_highest_education.id = user_personal_details.language', 'left');
        $model->join('fl_martial_status', 'fl_martial_status.id = user_basic_details.martial_status', 'left');
        $model->join('fl_occupation', 'fl_highest_education.id = user_personal_details.occupation', 'left');
        $model->join('fl_partner_expectation', 'fl_highest_education.id = user_personal_details.partner_expectation', 'left');

        return $this->respond(['data' => $model->get()->getResultArray(), 'success' => true]);
    }


    public function getAllUsers()
    {
        $model = new UserModel();
        $model->select('user_church_details.*,user_family_details.*,user_personal_details.*,user_physical_details.*,user_basic_details.*,
        fl_annual_income.field_value as annual_income,
        fl_blood_group.field_value as blood_group,
        fl_body_type.field_value as body_type,
        fl_complexion.field_value as complexion,
        fl_denomination.field_value as denomination,
        fl_diet.field_value as diet,
        fl_height.field_value as height,
        fl_highest_education.field_value as highest_edu,
        fl_language.field_value as language,
        fl_martial_status.field_value as martial_status,
        fl_occupation.field_value as occupation,
        fl_partner_expectation.field_value as partner_expectation
        ');

        $model->where('users.verified', 1);
        $model->where('users.banned', 0);
        $model->join('user_basic_details', 'user_basic_details.user_id = users.id');
        $model->join('user_church_details', 'user_church_details.user_id = users.id');
        $model->join('user_family_details', 'user_family_details.user_id = users.id');
        $model->join('user_personal_details', 'user_personal_details.user_id = users.id');
        $model->join('user_physical_details', 'user_physical_details.user_id = users.id');
        $model->join('fl_annual_income', 'fl_annual_income.id = user_personal_details.annual_income', 'left');
        $model->join('fl_blood_group', 'fl_blood_group.id = user_physical_details.blood_group', 'left');
        $model->join('fl_body_type', 'fl_body_type.id = user_physical_details.body_type', 'left');
        $model->join('fl_complexion', 'fl_complexion.id = user_physical_details.complexion', 'left');
        $model->join('fl_denomination', 'fl_denomination.id = user_church_details.denomination', 'left');
        $model->join('fl_diet', 'fl_diet.id = user_personal_details.diet', 'left');
        $model->join('fl_height', 'fl_height.id = user_physical_details.height', 'left');
        $model->join('fl_highest_education', 'fl_highest_education.id = user_personal_details.highest_edu', 'left');
        $model->join('fl_language', 'fl_highest_education.id = user_personal_details.language', 'left');
        $model->join('fl_martial_status', 'fl_martial_status.id = user_basic_details.martial_status', 'left');
        $model->join('fl_occupation', 'fl_highest_education.id = user_personal_details.occupation', 'left');
        $model->join('fl_partner_expectation', 'fl_highest_education.id = user_personal_details.partner_expectation', 'left');

        return $this->respond(['data' => $model->get()->getResultArray(), 'success' => true]);
    }
}