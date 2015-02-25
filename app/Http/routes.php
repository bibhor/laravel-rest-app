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

Route::get('/', 'WelcomeController@index');

// Route group for API versioning
Route::group(array('prefix' => 'v1'), function()
{
	Route::resource('states', 'CitiesController');
	Route::get('states/{state}/cities', ['uses' => 'CitiesController@showCity']);
	Route::post('/users/visits', ['uses' => 'UsersController@addUserCity']);
	Route::get('/users/visits', ['uses' => 'UsersController@getUserCity']);
});

Route::resource('users', 'UsersController');
Route::resource('cities', 'CitiesController');
/*Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
