<?php

namespace App\Controllers\Api;

use App\Model\AnnualIncomeModel;
use App\Model\BloodGroupModel;
use App\Model\BodyTypeModel;
use App\Model\CityModel;
use App\Model\ComplexionModel;
use App\Model\CountryModel;
use App\Model\DenominationModel;
use App\Model\DietModel;
use App\Model\HeightModel;
use App\Model\HighestEducationModel;
use App\Model\LanguageModel;
use App\Model\MaritalStatusModel;
use App\Model\OccupationModel;
use App\Model\PartnerExpectationModel;
use App\Model\StateModel;
use CodeIgniter\RESTful\ResourceController;

class FormFields extends ResourceController
{
    protected $format = 'json';

    public function __construct()
    {
        model('App\Models\Fields\AnnualIncomeModel');
        model('App\Models\Fields\BloodGroupModel');
        model('App\Models\Fields\BodyTypeModel');
        model('App\Models\Fields\ComplexionModel');
        model('App\Models\Fields\DenominationModel');
        model('App\Models\Fields\DietModel');
        model('App\Models\Fields\HeightModel');
        model('App\Models\Fields\HighestEducationModel');
        model('App\Models\Fields\LanguageModel');
        model('App\Models\Fields\MaritalStatusModel');
        model('App\Models\Fields\OccupationModel');
        model('App\Models\Fields\PartnerExpectationModel');
        model('App\Models\Fields\StateModel');
        model('App\Models\Fields\CityModel');
        model('App\Models\Fields\CountryModel');
    }

    public function getAnnualIncome()
    {
        if ($this->request->getMethod() == "get") {
            $model = new AnnualIncomeModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getBloodGroup()
    {
        if ($this->request->getMethod() == "get") {
            $model = new BloodGroupModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getBodyType()
    {
        if ($this->request->getMethod() == "get") {
            $model = new BodyTypeModel();
            return $this->respond(['data' => $model->findAll()]);
        }

    }

    public function getDenomination()
    {
        if ($this->request->getMethod() == "get") {
            $model = new DenominationModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getOccupation()
    {
        if ($this->request->getMethod() == "get") {
            $model = new OccupationModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getPartnerExpectation()
    {
        if ($this->request->getMethod() == "get") {
            $model = new PartnerExpectationModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getMartialStatus()
    {
        if ($this->request->getMethod() == "get") {
            $model = new MaritalStatusModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getLanguage()
    {
        if ($this->request->getMethod() == "get") {
            $model = new LanguageModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getHighestEducation()
    {
        if ($this->request->getMethod() == "get") {
            $model = new HighestEducationModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getHeight()
    {
        if ($this->request->getMethod() == "get") {
            $model = new HeightModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getDiet()
    {
        if ($this->request->getMethod() == "get") {
            $model = new DietModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getComplexion()
    {
        if ($this->request->getMethod() == "get") {
            $model = new ComplexionModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getCountries(){
        if ($this->request->getMethod() == "get") {
            $model = new CountryModel();
            return $this->respond(['data' => $model->findAll()]);
        }
    }

    public function getStates($id){
        if ($this->request->getMethod() == "get") {
            $model = new StateModel();
            return $this->respond(['data' => $model->where('country',$id)->get()->getResultArray()]);
        }
    }

    public function getCities($id){
        if ($this->request->getMethod() == "get") {
            $model = new CityModel();
            return $this->respond(['data' => $model->where('state',$id)->get()->getResultArray()]);
        }
    }
}