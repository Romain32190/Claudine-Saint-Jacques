<?php

use Illuminate\Http\Request;
use App\pilgrim;
use App\Http\Resources\Pilgrims as PilgrimsResource;

Route::get('/pilgrims', function () {
    return new PilgrimsResource(pilgrim::find(1));
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/pilgrims', function (Request $request) {

// });
