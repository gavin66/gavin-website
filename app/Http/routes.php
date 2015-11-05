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

Route::get('/','EntryController@index');
Route::get('article',function(){return view('article');});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'ajax' => 'Ajax\AjaxController'
]);

Route::get('gavin',function(){return view('gavin');});

Route::controllers([
	'test'=>'TestController',
]);
