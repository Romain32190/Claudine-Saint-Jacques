<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//drivers

Route::resource('drivers', 'DriversController');

//address

Route::post('/storeAddress', 'AddressController@store');

//roadmaps

Route::get('/createRoadmap', 'RoadmapsController@index');


//luggages
Route::get('/createLuggage', 'LuggagesController@create');

Route::post('/storeLuggage', 'LuggagesController@store');



Route::get('/', function(){

	return view('carte');
});

//steps
Route::resource('steps', 'StepController');


//pilgrims
Route::post('/storeIdentity', 'PilgrimController@storeIdentity');

Route::get('/pilgrims', 'PilgrimController@index');

Route::get('/createPilgrim', 'PilgrimController@create');

Route::post('/storeIdentity', 'PilgrimController@store');

Route::get('/test', function () {
	$var = App\pilgrim::find(1)->luggages();
	return response()->json(App\pilgrim::find(1)->luggages);

});