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

Route::get('/', 'HomeController@showHomepage');
Route::get('reports/babies', 'BabyController@showReport');
Route::get('reports/babies/{id}', 'BabyController@showBabyReport');
Route::resource('babies', 'BabyController');
Route::resource('toys', 'ToyController');
Route::post('search/executeSearch', 'HomeController@executeSearch');

//API ROUTES
Route::group(array('prefix' => 'api'), function() {

	/*=========================================
		-Since we will be using this just for 
		CRUD, we won't need create and edit 
		view from Laravel
		-AngularJS (or any front-end in the
		future) will handle both of these
		forms
		-This ensures that a user can't access
		api/create or api/edit when there's
		nothing there.
	=========================================*/
	Route::resource('comments', 'CommentController',
		array('only' => array('index', 'store', 'destroy'))); //api/comments

	//api/babies
	//api/toys
});
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
		babies/{id} | PUT |BabyController@destroy
		babies/{id} | POST | BabyController@update
	)
*/

