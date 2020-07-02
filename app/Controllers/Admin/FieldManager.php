<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Model\AnnualIncomeModel;
use App\Model\BloodGroupModel;
use App\Model\BodyTypeModel;
use App\Model\ComplexionModel;
use App\Model\DenominationModel;
use App\Model\DietModel;
use App\Model\HeightModel;
use App\Model\HighestEducationModel;
use App\Model\LanguageModel;
use App\Model\MaritalStatusModel;
use App\Model\OccupationModel;
use App\Model\PartnerExpectationModel;

class FieldManager extends BaseController
{
    public function index()
    {

        $currentUrl = uri_string();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('fieldManager');
        echo view('templates/footer');
    }

    public function fieldvaluechange()
    {

        if ($this->request->isAJAX()) {
            $value = $this->request->getPost('value');
            $formType = $this->request->getPost('formType');
            $action = $this->request->getPost('action');
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
            }

            if ($action == 'add') {
                $model->save(["field_value" => $value]);
            } elseif ($action == 'del') {
                $model->delete($value);
            } elseif ($action == 'edit') {
                $model->update($value, ["field_value" => $value]);
            }
            return json_encode(['status' => 200]);
        }
     }
}
