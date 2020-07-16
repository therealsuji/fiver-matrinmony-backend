<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
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
use App\Model\MinistryModel;
use App\Model\OccupationModel;
use App\Model\PartnerExpectationModel;
use App\Model\StateModel;

class FieldManager extends BaseController
{
    public function index()
    {

        $currentUrl = uri_string();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        $model = new AnnualIncomeModel();
        $data['data'] = $model->findAll();
        $model = new CountryModel();
        $data['country'] = $model->findAll();
        $model = new CityModel();
        $data['city'] = $model->findAll();
        $model = new StateModel();
        $data['state'] = $model->findAll();

        echo view('fieldManager', $data);
        echo view('templates/footer');
    }

    public function getFieldValues()
    {
        if ($this->request->isAJAX()) {
            $formType = $this->request->getPost('formType');
            $model = $this->getModelType($formType);
            return json_encode($model->findAll());
        }
    }


    private function getModelType($formType)
    {
        $model = null;
        switch ($formType) {
            case "annualincome":
                $model = new AnnualIncomeModel();
                break;
            case "bloodgroup":
                $model = new BloodGroupModel();
                break;
            case "bodytype":
                $model = new BodyTypeModel();
                break;
            case "complexion":
                $model = new ComplexionModel();
                break;
            case "denomination":
                $model = new DenominationModel();
                break;
            case "diet":
                $model = new DietModel();
                break;
            case "height":
                $model = new HeightModel();
                break;
            case "highestedu":
                $model = new HighestEducationModel();
                break;
            case "language":
                $model = new LanguageModel();
                break;
            case "martialstatus":
                $model = new MaritalStatusModel();
                break;
            case "occupation":
                $model = new OccupationModel();
                break;
            case "partnerexpec":
                $model = new PartnerExpectationModel();
                break;
            case "ministry":
                $model = new MinistryModel();
        }
        return $model;
    }


    public function fieldvaluechange()
    {

        if ($this->request->isAJAX()) {
            $value = $this->request->getPost('value');
            $id = $this->request->getPost('id');
            $formType = $this->request->getPost('formType');
            $action = $this->request->getPost('action');
            $model = $this->getModelType($formType);
            if ($action == 'add') {
                $id = $model->save(["field_value" => $value]);

                return json_encode(['status' => 200]);
            } elseif ($action == 'del' && $id) {
                if ($id) {
                    $model->delete($id);
                    return json_encode(['status' => 200]);
                }
                return json_encode(['status' => 400]);
            } elseif ($action == 'edit' && $id) {
                if ($id) {
                    $id = $model->update($id, ["field_value" => $value]);
                    return json_encode(['status' => 200]);
                }
                return json_encode(['status' => 400]);

            }

        }
    }
}
