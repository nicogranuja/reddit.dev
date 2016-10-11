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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/uppercase/{word?}', 'HomeController@uppercase');

Route::get('/lowercase/{word?}', 'HomeController@lowercase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/rolldice/{guess?}', 'HomeController@roll');


