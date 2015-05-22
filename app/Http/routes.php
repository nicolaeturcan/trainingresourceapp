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

Route::get('home', 'HomeController@index');

Route::get('api/training_resource/parentResourceId/{id}', 'Training_Resource_Controller@showChild');

//Route::get('api/training_resource/resourceId/{id}', 'Training_Resource_Controller@showParent');

Route::resource('api/training_resource','Training_Resource_Controller');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
