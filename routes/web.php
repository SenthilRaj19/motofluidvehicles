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
    return view('/login');
});

Auth::routes();

Route::group(['middleware'=>['auth']],function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/vehicle', 'VehicleController');

    //service
    Route::resource('/service', 'ServiceController');
    Route::get('vehicle/service/{id}', 'ServiceController@getVehicleService');

    //trips
    Route::resource('/trip', 'TripController');
    Route::get('vehicle/trips/{id}', 'TripController@getVehicleTrip');


    //ajax
    Route::get('/list-vehicles', 'AjaxController@listVehicles');
    Route::get('/vehicle-details/{id}', 'AjaxController@vehicleDetails');
    Route::get('/vehicle-service/{id}', 'AjaxController@serviceDetails');
    Route::get('/vehicle-trip/{id}', 'AjaxController@tripDetails');
});


