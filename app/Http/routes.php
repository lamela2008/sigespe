<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//	redirecciona a dashboard cuando se se llama a la raiz del site
Route::get('/', array('as' => 'home', function()
{
    return redirect('/dashboard');
}));

//	redirecciona a dashboard cuando se cierra session
Route::get('/sessions/create', function () {
    return redirect('/dashboard');
});

/* INICIO CHOFERES */
Route::get('/drivers', array(
	'uses' => 'DriverController@drivers',
	'as' => 'driverlist',
	'middleware' => ['sentry.admin']
));

Route::get('/driver/new', array(
	'uses' => 'DriverController@create',
	'as' => 'drivernew',
	'middleware' => ['sentry.admin']
));

Route::post('/saveDriver', array(
	'uses' => 'DriverController@save',
	'as' => 'driverSave',
	'middleware' => ['sentry.admin']
));
/* FIN CHOFERES */

/* INICIO VEHICULOS */
Route::get('/vehicles', array(
	'uses' => 'VehicleController@vehicles',
	'as' => 'vehiclelist',
	'middleware' => ['sentry.admin']
));

Route::get('/vehicle/new', array(
	'uses' => 'VehicleController@create',
	'as' => 'drivernew',
	'middleware' => ['sentry.admin']
));

Route::post('/saveVehicle', array(
	'uses' => 'VehicleController@save',
	'as' => 'driverSave',
	'middleware' => ['sentry.admin']
));

Route::get('/assign-vehicle', array(
	'uses' => 'VehicleController@assignVehicle',
	'as' => 'assignVehicle',
	'middleware' => ['sentry.admin']
));
/* FIN CHOFERES */

/* INICIO CLIENTES */
Route::get('/clients', array(
	'uses' => 'ClientController@clients',
	'as' => 'clientlist',
	'middleware' => ['sentry.admin']
));

Route::get('/client/new', array(
	'uses' => 'ClientController@create',
	'as' => 'clientnew',
	'middleware' => ['sentry.admin']
));

Route::post('/saveClient', array(
	'uses' => 'ClientController@save',
	'as' => 'clientSave',
	'middleware' => ['sentry.admin']
));

/* FIN CLIENTES */

/* INICIO ORDENES */
Route::get('/contracts', array(
	'uses' => 'ContractController@contracts',
	'as' => 'contractlist',
	'middleware' => ['sentry.admin']
));

Route::get('/contract/new', array(
	'uses' => 'ContractController@create',
	'as' => 'contractnew',
	'middleware' => ['sentry.admin']
));

Route::post('/saveContract', array(
	'uses' => 'ContractController@save',
	'as' => 'contractSave',
	'middleware' => ['sentry.admin']
));
/* FIN ORDENES */

Route::get('/userDetails', array(
	    'as' => 'userDetails',
	    'before' => 'basicAuth|hasPermissions: users',
	    'uses' => 'HomeController@userDetails'
	)
);

Route::get('/privatePage', array(
	'uses' => 'HomeController@privatePage',
	'as' => 'privatePage',
	'middleware' => ['sentry.admin']
));

Route::get('/dashboard', array(
	'uses' => 'HomeController@dashboard',
	'as' => 'dashboard',
	'middleware' => ['sentry.auth']
));
