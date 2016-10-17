<?php

use App\Models\Post;

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

//Home Controller
Route::get('/uppercase/{word?}', 'HomeController@uppercase');

Route::get('/lowercase/{word?}', 'HomeController@lowercase');

Route::get('/increment/{number?}', 'HomeController@increment');

Route::get('/decrement/{number?}', 'HomeController@decrement');

Route::get('/rolldice/{guess?}', 'HomeController@roll');

//Post Controller
// Route::get('/post', 'PostController@index');
Route::resource('posts', 'PostsController');

//User Controller
Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Route::get('posts', 'PostsController@search');
// Route::post('users', 'UsersController@search');

