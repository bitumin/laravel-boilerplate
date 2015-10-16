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
 * Route::get('',['as'=>'','uses'=>'']);
 * Route::post('',['as'=>'','uses'=>'']);
 */

// Public routes
Route::get('/',['as'=>'public.home','uses'=>'PublicController@getHome']);

// View examples
Route::get('/example/basic',['as'=>'example.basic','uses'=>'PublicController@exampleBasic']);
Route::get('/example/code',['as'=>'example.code','uses'=>'PublicController@exampleCode']);
Route::get('/example/flot-charts',['as'=>'example.flot','uses'=>'PublicController@exampleFlotCharts']);
Route::get('/example/morris-charts',['as'=>'example.morris','uses'=>'PublicController@exampleMorrisCharts']);
Route::get('/example/timeline',['as'=>'example.timeline','uses'=>'PublicController@exampleTimeline']);
Route::get('/example/tables',['as'=>'example.tables','uses'=>'PublicController@exampleTables']);
Route::get('/example/dashboard',['as'=>'example.dashboard','uses'=>'PublicController@exampleDashboard']);
Route::get('/example/forms',['as'=>'example.forms','uses'=>'PublicController@exampleForms']);
Route::get('/example/buttons',['as'=>'example.buttons','uses'=>'PublicController@exampleButtons']);
Route::get('/example/grid',['as'=>'example.grid','uses'=>'PublicController@exampleGrid']);
Route::get('/example/icons',['as'=>'example.icons','uses'=>'PublicController@exampleIcons']);
Route::get('/example/notifications',['as'=>'example.notifications','uses'=>'PublicController@exampleNotifications']);
Route::get('/example/panels',['as'=>'example.panels','uses'=>'PublicController@examplePanels']);
Route::get('/example/typography',['as'=>'example.typography','uses'=>'PublicController@exampleTypography']);

// Dashboard routes
Route::get('/dashboard',['as'=>'dashboard.home','uses'=>'DashboardController@getDashboard']);
Route::get('/dashboard/profile',['as'=>'dashboard.profile','uses'=>'DashboardController@getProfile']);
Route::get('/dashboard/settings',['as'=>'dashboard.settings','uses'=>'DashboardController@getSettings']);
Route::get('/dashboard/users',['as'=>'dashboard.users','uses'=>'DashboardController@getUsers']);

// Authentication
Route::get('auth/login',['as'=>'auth.getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login',['as'=>'auth.postLogin','uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout',['as'=>'auth.getLogout','uses'=>'Auth\AuthController@getLogout']);

// Registration. Different registration methods can be set in config/auth.php
Route::get('auth/register',['as'=>'auth.getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register',['as'=>'auth.postRegister','uses'=>'Auth\AuthController@postRegister']);
Route::get('auth/verify/{confirmationCode}',['as'=>'auth.verifyEmail','uses'=>'Auth\AuthController@verifyEmail']);

// Reset password
Route::get('auth/email',['as'=>'auth.getEmail','uses'=>'Auth\AuthController@getEmail']);
Route::post('auth/email',['as'=>'auth.postEmail','uses'=>'Auth\AuthController@postEmail']);
Route::get('auth/reset/{token}',['as'=>'auth.getReset','uses'=>'Auth\AuthController@getReset']);
Route::post('auth/reset',['as'=>'auth.postReset','uses'=>'Auth\AuthController@postReset']);
