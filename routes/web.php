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

Route::get('/', function () {
    return view('welcome');
});


  Route::get('/createroadmap', 'RoadmapsController@index');



Route::get('/carte', function(){
	return view('carte');
});


Route::resource('steps', 'StepController');

//Route::post('luggages', 'LuggagesController@index');

Route::post('pilgrims', 'PilgrimController@index');
