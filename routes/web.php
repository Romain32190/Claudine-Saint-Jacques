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

Route::get('/', 'DriversController@index');

Route::get('/carte', function(){
	return view('carte');
});


Route::resource('steps', 'StepController');

Route::post('luggages', 'LuggagesController');

Route::post('pilgrims', 'PilgrimController');

