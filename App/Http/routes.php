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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});

//Route::get('name/{id}', function ($id) {
//    return 'Name '.$id;
//});

//Route::controller(Controller::detect());
Route::resource('cinemas', 'CinemaController');

Route::put('cinemas/{id}', 'CinemaController@update');