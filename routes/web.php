<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','IndexController@index');
Route::get('lang/{lang}',function($lang){
	$available = ['en','th'];
	Session::put('locale', in_array($lang,$available) ? $lang : config::get('app.locale'));
	return redirect()->back();
});
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

/**/
Route::resource('tour','TourController');

Route::group(['prefix' => 'tour'], function()
{
    Route::get('detail/{id}', 'TourController@show');
});

Route::resource('car','CarController');
Route::get('faq','FaqController@index');
Route::get('about','AboutController@index');
Route::resource('contact','ContactController');

Route::get('content','ContentController@index');

Route::resource('dashboard','Corporate\DashboardController');

Route::get('dashBoardagency', function () {
    return view('dashBoardAgency');
});

Route::get('dashBoardindividal', function () {
    return view('dashBoardIndividal');
});

Route::get('dashBoardcustomer', function () {
    return view('dashBoardCustomer');
});

Auth::routes();

// register
Route::get('register','Auth\RegistrationController@index');
Route::post('register','Auth\RegistrationController@store');

Route::get('login','SessionsController@index');
Route::post('login','SessionsController@store');

Route::get('logout','SessionsController@logout');

Route::get('mail','MailThemController@index');
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'Auth\RegistrationController@confirm'
]);

Route::get('/home', 'HomeController@index');
