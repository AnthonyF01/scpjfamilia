<?php

use Illuminate\Http\Request;

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
    // return $request->user();

    \Log::info('get user: ', ['request' => $request->all()]);    

    $user = $request->user();

    return response()->json([
        'user' => $user,
    ]);
});

Route::get('/checkConnection', function (){
    return response()->json([
        'success' => true,
    ],200);
});

Route::post('register', 'Api\RegisterController@register');
Route::middleware('auth:api')->post('update', 'Api\RegisterController@update');
Route::middleware('auth:api')->post('resetPassword', 'Api\RegisterController@resetPassword');
Route::get('/denuncia/department', 'Api\DenunciaController@getDepartment');
Route::get('/denuncia/victima/search/{dni?}', 'Api\DenunciaController@findVictima');

Route::middleware('auth:api')->get('/checkAccess', 'Api\RegisterController@checkAccess');
Route::middleware('auth:api')->get('/getNotification', 'Api\NotificationController@getNotification');
Route::middleware('auth:api')->get('/sendNotification', 'Api\NotificationController@sendNotification');
Route::middleware('auth:api')->get('/checkNotification', 'Api\NotificationController@checkNotification');
Route::middleware('auth:api')->get('/denuncia/search/{expediente?}', 'Api\DenunciaController@findExpediente');
Route::middleware('auth:api')->get('/denuncia/details/{expediente}', 'Api\DenunciaController@detailsExpediente');
Route::middleware('auth:api')->get('/denuncia/victima/details', 'Api\DenunciaController@detailsVictimaExp');
Route::middleware('auth:api')->post('/register/registerDeviceToken', 'Api\RegisterController@registerDeviceToken');
Route::middleware('auth:api')->post('/logout', 'Api\RegisterController@logout');

Route::group(['prefix' => 'v1','middleware' => 'auth:api'], function () {
    //    Route::resource('task', 'TasksController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
