<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
 * Localized ressources
 */

//Route::localizedGroup(function () {

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    //Route::resource('test', 'testController');

    // Provide controller methods with object instead of ID
    Route::model('expositions', 'App\Exposition');
    //Route::model('cat', 'App\Cat');
    Route::model('registrations', 'App\Registration');
    Route::model('profile', 'App\User');

    // basic routing
    Route::get('/', 'WelcomeController@index');
    Route::get('home', 'HomeController@index')->middleware('verified');

    //Route::get('/simplereg', 'SimpleRegistrationController@register');


    //Route::get('profile', ['uses' => 'ProfileController@index']);
    Route::get('registrations/register/{expo_id}', ['uses' => 'RegistrationsController@register'])->middleware('verified');
    Route::get('registrations/exposition/{expo_id}', ['uses' => 'RegistrationsController@exposition'])->middleware('verified');

    // ressources
    Route::resource('profile', 'ProfileController');
    Route::resource('expositions', 'ExpositionsController')->middleware('verified');
    Route::resource('cats', 'CatsController')->middleware('verified');
    Route::resource('registrations', 'RegistrationsController')->middleware('verified');
    Route::resource('profile', 'ProfilesController')->middleware('verified');

    //Route::resource('catteries', 'CatteriesController');
//});

/*
 * Non localized ressources
 */

//utils
/*
Route::get('pleasedo-migrate', function() {

      echo '<br>init with Migrate tables ...';
      Artisan::call('migrate', ['--quiet' => false, '--force' => false]);
      echo '<br>done with Migrate tables';
});
*/

//Auth::routes(['verify' => true]);

Route::prefix('auth')->group(
    function () {
        Auth::routes(['verify' => true]);
    }
);
/*
Route::get('login/facebook', 'Auth\SocialLoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\SocialLoginController@handleProviderCallback');
*/

Route::get('locale/{locale}',
    function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    }
);