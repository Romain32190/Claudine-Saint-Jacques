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


Route::get('/createRoadmap', 'RoadmapsController@index');


//luggages
Route::get('/createLuggage', 'LuggagesController@create');

Route::post('/storeLuggage', 'LuggagesController@store');


Route::get('/', function(){
	return view('carte');
});

Route::resource('steps', 'StepController');



Route::post('pilgrims', 'PilgrimController@index');
