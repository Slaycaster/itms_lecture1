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

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('toys', 'ToyController');
Route::get('x', 'HomeController@showWelcome');
Route::resource('babies', 'BabyController');
/*
	ROUTES
	get
	post
	put
	resource 
	(
		URL | METHOD | FUNCTION
		babies | GET | BabyController@index
		babies/{id} | GET | BabyController@show
		babies | POST | BabyController@store
		babies/create | GET | BabyController@create
	)
*/

