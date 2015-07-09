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

		Route::group([
			'middleware' => 'check.role:admin'
				], function() {
				Route::resource('book', 'BookController');
				Route::resource('user', 'UserController');
				Route::resource('article', 'ArticleController');
				Route::get('logout', 'LoginController@logout');
				Route::get('user/{id}/destroy', 'UserController@destroy');
				Route::get('user/{id}/edit', 'UserController@edit');
				Route::get('user/{id}/show', 'UserController@show');
				Route::get('articles/{id}/edit', 'ArticleController@edit');
		});

		Route::group([
			'middleware' => ['check.role:admin_employee']
				], function() {
				Route::resource('book', 'BookController');
			
		});


	});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);