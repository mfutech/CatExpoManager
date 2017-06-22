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

/*
 * Localized ressources
 */

Route::localizedGroup(function () {

	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

	Route::resource('test','testController');

	// Provide controller methods with object instead of ID
	Route::model('expositions', 'App\Exposition');
	Route::model('cats', 'App\Cat');
	Route::model('registrations', 'App\Registration');
	Route::model('profile', 'App\User');

	// basic routing
	Route::get('/', 'WelcomeController@index');
	Route::get('home', 'HomeController@index');

	Route::get('/simplereg', 'SimpleRegistrationController@register');

	// auth and user management
	Route::get('users', function() { return 'Users!'; });


	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);

	//Route::get('profile', ['uses' => 'ProfileController@index']);
	Route::get('registrations/register/{expo_id}', ['uses' => 'RegistrationsController@register']);


	// ressources
	Route::resource('profile', 'ProfileController');
	Route::resource('expositions','ExpositionsController');
	Route::resource('cats', 'CatsController');
	Route::resource('registrations', 'RegistrationsController');

	//Route::resource('catteries', 'CatteriesController');
});

/*
 * Non localized ressources
 */

//utils
Route::get('pleasedo-migrate', function() {

      echo '<br>init with Migrate tables ...';
      Artisan::call('migrate', ['--quiet' => false, '--force' => false]);
      echo '<br>done with Migrate tables';
});
