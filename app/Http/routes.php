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
Route::resource('users', 'UsersController');

Route::get('/orm-test', function(){
	$post = new Post();
	$post->created_by = 1;
	$post->title = 'Eloquent is awsome';
	$post->url = 'codeup.com';
	$post->content = 'some content stuff';
	$post->save();

	$post2 = new post();
	$post2->created_by = 1;
	$post2->title = 'title';
	$post2->url = 'google.com';
	$post2->content = 'some content stuff';
	$post2->save();
});


