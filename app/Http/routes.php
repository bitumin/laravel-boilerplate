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

// Public routes
Route::get('/', ['as'=>'getHome','uses'=>'PublicController@getHome']);

//View examples
Route::get('/example/basic',['as'=>'example.basic','uses'=>'PublicController@exampleBasic']);
Route::get('/example/code',['as'=>'example.code','uses'=>'PublicController@exampleCode']);

// Dashboard routes
Route::get('/dashboard', ['as'=>'getDashboard','uses'=>'DashboardController@getDashboard']);

// Authentication
Route::get('auth/login', ['as'=>'auth.getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as'=>'auth.postLogin','uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as'=>'auth.getLogout','uses'=>'Auth\AuthController@getLogout']);

// Registration
Route::get('auth/register', ['as'=>'auth.getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register', ['as'=>'auth.postRegister','uses'=>'Auth\AuthController@postRegister']);

// Reset password
Route::get('auth/email', ['as'=>'auth.getEmail','uses'=>'Auth\AuthController@getEmail']);
Route::post('auth/email', ['as'=>'auth.postEmail','uses'=>'Auth\AuthController@postEmail']);
Route::get('auth/reset/{token}', ['as'=>'auth.getReset','uses'=>'Auth\AuthController@getReset']);
Route::post('auth/reset', ['as'=>'auth.postReset','uses'=>'Auth\AuthController@postReset']);
