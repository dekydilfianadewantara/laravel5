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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('create', 'BookController@create');

Route::get('/', 'UserController@login');
Route::post('login', 'LoginController@login');

Route::group([
	'middleware' => 'auth'
	], function() {
		Route::resource('book', 'BookController');
		Route::resource('user', 'UserController');
		Route::get('logout', 'LoginController@logout');
	});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);