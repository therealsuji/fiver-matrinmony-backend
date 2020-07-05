<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->match(['get','post'],'/', 'Login::index');
$routes->get('/logout', 'Login::logOut');

$routes->post('api/register-user', 'API\User::registerUser');
$routes->post('api/login-user', 'API\User::loginUser');
$routes->post('api/basic-details', 'API\User::basicDetails');
$routes->post('api/family-details', 'API\User::familyDetails');
$routes->post('api/church-details', 'API\User::churchDetails');
$routes->post('api/personal-details', 'API\User::personalDetails');
$routes->post('api/physical-details', 'API\User::physicalDetails');


$routes->get('api/basic-details/(:segment)', 'API\User::getUserBasicDetails/$1');
$routes->get('api/family-details/(:userId)', 'API\User::familyDetails');
$routes->get('api/church-details/(:userId)', 'API\User::churchDetails');
$routes->get('api/personal-details/(:userId)', 'API\User::personalDetails');
$routes->get('api/physical-details/(:userId)', 'API\User::physicalDetails');
$routes->options()
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
