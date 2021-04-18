<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the 'web' middleware group. Now create something great!
  |
 */


Route::prefix('admin')->attribute('namespace', 'Admin')->group(function () {
    Route::post('/attempt', ['uses' => 'AuthController@attempt', 'as' => 'admin.auth.attempt']);
    Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'admin.auth.logout']);
    Route::get('/login', ['uses' => 'AuthController@login', 'as' => 'admin.auth.login']);
});


Route::prefix('admin')->attribute('namespace', 'Admin')->middleware('admin:web')->group(function () {
    Route::get('/', ['uses' => '\App\Http\Controllers\Admin\HomeController@index', 'as' => 'admin.home.index']);
      Route::resource('users', '\App\Http\Controllers\Admin\UserController', ['as' => 'admin']);
      Route::resource('cities', 'CityController', ['as' => "admin"]);
      Route::resource('countries', 'CountryController', ['as' => "admin"]);
      Route::resource('interests', 'InterestController', ['as' => "admin"]);

      Route::resource('socials', 'SocialController', ['as' => "admin"]);  

     Route::resource('licenses', 'LicenseController', ['as' => "admin"]);

    Route::resource('contacts', 'ContactUsController', ['as' => "admin"]);
  
    Route::post('active', ['uses' => 'ActiveModelController@active', 'as' => 'admin.model.active']);
       
       
});




    Route::prefix('/')->attribute('namespace', 'Web')->group(function () {


    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'web.home.index']);
    Route::get('about', ['uses' => 'AboutController@index', 'as' => 'web.about.index']);
    Route::get('contactUs', ['uses' => 'ContactUsController@create', 'as' => 'web.contactUs.create']);
    Route::post('store', ['uses' => 'ContactUsController@store', 'as' => 'web.contactUs.store']);
    Route::get('targets', ['uses' => 'TargetController@index', 'as' => 'web.targets.index']);
    Route::get('channels', ['uses' => 'ChannelController@index', 'as' => 'web.channels.index']);
    Route::get('relations', ['uses' => 'RelationController@index', 'as' => 'web.relations.index']);
    Route::get('privacy', ['uses' => 'PrivacyController@index', 'as' => 'web.privacy.index']);
    Route::get('membership', ['uses' => 'MembershipController@index', 'as' => 'web.membership.index']);



Route::any('cronJob', ['uses' => 'LicenseController@cronJob', 'as' => 'web.auth.cronJob']);
 Route::get('myLicenses', ['uses' => 'LicenseController@myLicenses', 'as' => 'web.auth.myLicenses']);
  Route::post('uploadLicense', ['uses' => 'LicenseController@uploadLicense', 'as' => 'web.licenses.uploadLicense']);

    Route::get('login', ['uses' => 'AuthController@login', 'as' => 'web.auth.login']);
    Route::post('attempt', ['uses' => 'AuthController@attempt', 'as' => 'web.auth.attempt']);
  
   


    Route::get('register', ['uses' => 'AuthController@register', 'as' => 'web.auth.register']);
    Route::post('register', ['uses' => 'AuthController@registerAction', 'as' => 'web.auth.registerAction']);
    //Route::get('pdfview',array('as'=>'pdfview','uses'=>'AuthController@pdfview'));

    Route::get('logout', ['uses' => 'AuthController@logout', 'as' => 'web.auth.logout']);

    Route::get('profile', ['uses' => 'AuthController@profile', 'as' => 'web.auth.profile']);
    Route::put('updateProfile', ['uses' => 'AuthController@updateProfile', 'as' => 'web.auth.updateProfile']);
});




//ClearCache
Route::get('/clearcache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});