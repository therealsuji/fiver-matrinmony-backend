<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Model\CityModel;
use App\Model\CountryModel;
use App\Model\StateModel;
use App\Model\UserBasicDetailsModel;
use App\Model\UserModel;

class Country extends BaseController
{

    public function index()
    {
        $currentUrl = uri_string();
        $model = new CountryModel();
        $data['country'] = $model->findAll();
        $model = new CityModel();
        $data['city'] = $model
            ->select('fl_city.*,fl_state.field_value as state,fl_country.field_value as country')
            ->join('fl_state','fl_state.id=fl_city.state')
            ->join('fl_country','fl_country.id=fl_state.country')
            ->get()->getResultArray();
         $model = new StateModel();
        $data['state'] = $model->select('fl_state.*,fl_country.field_value as country')->join('fl_country','fl_country.id=fl_state.country')->get()->getResultArray();
         echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/viewAll', $data);
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

    public function edit_country($id)
    {
        $currentUrl = uri_string();
        $data['action'] = 'edit';
        $model = new CountryModel();
        $data['item'] = $model->where('id', $id)->first();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/countryView', $data);
        echo view('templates/footer');
    }

    public function add_country()
    {
        $currentUrl = uri_string();
        $data['action'] = 'add';
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/countryView', $data);
        echo view('templates/footer');
    }

    public function addCountryAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'country' => 'required',
            ];
            $errMsg = [
                'country' => [
                    'required' => 'Please enter the country name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new CountryModel();
                $model->save(['field_value' => $this->request->getVar('country')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }

    public function editCountryAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'country' => 'required',
            ];
            $errMsg = [
                'country' => [
                    'required' => 'Please enter the country name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new CountryModel();
                $model->update($this->request->getVar('id'), ['field_value' => $this->request->getVar('country')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }


    public function edit_city($id)
    {
        $currentUrl = uri_string();
        $data['action'] = 'edit';
        $model = new CityModel();
        $data['item'] = $model->where('id', $id)->first();
        $model = new StateModel();
        $data['state'] = $model->findAll();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/cityView', $data);
        echo view('templates/footer');
    }

    public function add_city()
    {
        $currentUrl = uri_string();
        $data['action'] = 'add';
        $model = new StateModel();
        $data['state'] = $model->findAll();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/cityView', $data);
        echo view('templates/footer');
    }


    public function addCityAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'city' => 'required',
                'state' => 'required',
            ];
            $errMsg = [
                'city' => [
                    'required' => 'Please enter the city name'
                ],
                'state' => [
                    'required' => 'Please select the state name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new CityModel();
                $model->save(['field_value' => $this->request->getVar('city'), 'state' => $this->request->getVar('state')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }

    public function editCityAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'city' => 'required',
                'state' => 'required',
            ];
            $errMsg = [
                'city' => [
                    'required' => 'Please enter the city name'
                ],
                'state' => [
                    'required' => 'Please select the state name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new CityModel();
                $model->update($this->request->getVar('id'), ['field_value' => $this->request->getVar('city'), 'state' => $this->request->getVar('state')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }


    public function edit_state($id)
    {
        $currentUrl = uri_string();
        $data['action'] = 'edit';
        $model = new StateModel();
        $data['item'] = $model->where('id', $id)->first();
        $model = new CountryModel();
        $data['country'] = $model->findAll();
        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/stateView', $data);
        echo view('templates/footer');
    }

    public function add_state()
    {
        $currentUrl = uri_string();
        $data['action'] = 'add';

        $model = new CountryModel();
        $data['country'] = $model->findAll();

        echo view('templates/header');
        echo view('templates/navbar', array('currentUrl' => $currentUrl));
        echo view('country/stateView', $data);
        echo view('templates/footer');
    }

    public function addStateAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'country' => 'required',
                'state' => 'required',
            ];
            $errMsg = [
                'country' => [
                    'required' => 'Please select the country name'
                ],
                'state' => [
                    'required' => 'Please enter the state name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new StateModel();
                $model->save(['field_value' => $this->request->getVar('state'), 'country' => $this->request->getVar('country')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }

    public function editStateAction()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'country' => 'required',
                'state' => 'required',
            ];
            $errMsg = [
                'country' => [
                    'required' => 'Please select the country name'
                ],
                'state' => [
                    'required' => 'Please enter the state name'
                ],
            ];

            if ($this->validate($rules, $errMsg)) {
                $model = new StateModel();
                $model->update($this->request->getVar('id'), ['field_value' => $this->request->getVar('state'), 'country' => $this->request->getVar('country')]);
                $this->session->setFlashdata('success', true);
            }
        }
        return redirect()->back();
    }

    public function deleteField($id,$formType)
    {
        if ($this->request->getMethod() == 'get')  {
            if ($formType == 'country') {
                $model = new CountryModel();
            } elseif ($formType == 'state') {
                $model = new StateModel();
            } elseif ($formType == 'city') {
                $model = new CityModel();
            }
            $model->delete($id);
            $this->session->setFlashdata('success', true);
            $this->session->setFlashdata('type', $formType);
            return redirect()->back();
        }
    }

}
