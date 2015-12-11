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


Route::resource('/','ClientController');
Route::resource('client','ClientController');



App::missing(function($exception)
{
	return Response::view('_assets.messages.error-404', array(), 404);
});