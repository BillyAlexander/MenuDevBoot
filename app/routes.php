<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/',array('as' => 'index', 'uses' => 'HomeController@showWelcome'));

Route::get('/login',array('as' => 'login', 'uses' => 'HomeController@showLogin'));

Route::post('/login',array('as' => 'login', 'uses' => 'HomeController@doLogin'));

// Route::get('/bienvenido',array('as' => 'bienvenido', 'uses' => 'HomeController@admin'));

// Route::post('/welcome',array('as' => 'welcome', 'uses' => 'HomeController@showBienvenido'));
Route::get('/bienvenido', function()
{
	return View::make('welcome');
});

Route::get('/salir',array('as' => 'salir', 'uses' => 'HomeController@doLogout'));
