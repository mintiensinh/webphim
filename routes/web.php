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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');

//Route::get('/admin', ['namespace'=>'Auth','uses'=>'HomeController@index']);
Route::get('/page', function(){
	return view('home');
});
Route::get('facebook/redirect', 'Auth\AuthController@redirectToProvider');
Route::get('facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('google/redirect', 'Auth\AuthController@redirectgoogle');
Route::get('google/callback', 'Auth\AuthController@callbackgoogle');


