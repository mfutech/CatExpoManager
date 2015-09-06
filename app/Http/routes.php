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

// Provide controller methods with object instead of ID
Route::model('expositions', 'App\Exposition');

// basic routing
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

// auth and user management
Route::get('users', function() { return 'Users!'; });


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('profiles', ['uses' => 'ProfileController@index']);

// ressources
Route::resource('expositions','ExpositionsController');
Route::resource('catteries', 'CatteriesController');

