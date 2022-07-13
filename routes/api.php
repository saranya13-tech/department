<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', 'Api\ApiController@login');
Route::post('/logout', 'Api\ApiController@logged_out');
Route::get('/get_user_data', 'Api\ApiController@get_user_data');
Route::get('/home', 'Api\HomeApiController@index');
Route::put('user','Api\UserApiController@update');
Route::post('password_change','Api\UserApiController@password_change');
Route::post('list','Api\CaseApiController@list');
Route::post('caselist','Api\CaseApiController@CaseListByVehicleId');
Route::get('vehicle','Api\VehicleApiController@vehicle');
Route::post('case','Api\CaseApiController@CreateCase');
Route::post('image_upload','Api\CaseApiController@image_upload');
Route::get('pdf/{id}','Api\CaseApiController@getPdf');

Route::post('upload_sign','Api\UserApiController@upload_user_sign');
Route::post('upload_image','Api\UserApiController@upload_user_image');

Route::get('/generate_token', 'Api\ApiController@generate_token');
Route::get('/sms_send', 'Api\ApiController@sms_send');
Route::post('licence_upload','Api\CaseApiController@licence_upload');
Route::post('forgot_password','Api\UserApiController@forgot_password');
Route::post('reset_password','Api\UserApiController@reset_password');