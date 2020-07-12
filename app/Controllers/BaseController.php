<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['form'];
    protected $session;

    /**
     * Constructor.
     */

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        $this->session = \Config\Services::session();
        \Config\Database::connect();
        
        model('App\Models\SystemUserModel');
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
        model('App\Models\Fields\CountryModel');
        model('App\Models\Fields\CityModel');
        model('App\Models\Fields\StateModel');
    }


}
