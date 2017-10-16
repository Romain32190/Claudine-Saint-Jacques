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

Route::get('/createRoadmap/{reverse?}', 'RoadmapsController@index');


//luggages
Route::resource('luggages', 'LuggagesController');

// Route::get('/createLuggage', 'LuggagesController@create');
//
// Route::post('/storeLuggage', 'LuggagesController@store');



Route::get('/', function(){

	return view('carte');
});

//steps
Route::resource('steps', 'StepController');

//gites
Route::resource('gites', 'GitesController');


//pilgrims
Route::resource('pilgrims', 'PilgrimController');
