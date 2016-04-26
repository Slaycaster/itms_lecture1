<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showHomepage()
	{
		return View::make('homepage');
	}

	public function executeSearch()
	{
		$keywords = Input::get('keywords');

		$babies = Baby::all();

		$searchBabies = new \Illuminate\Database\Eloquent\Collection();

		foreach($babies as $b)
		{
			if(Str::contains(Str::lower($b->name), Str::lower($keywords)))
			{
				$searchBabies->add($b);
			}
		}

		return View::make('searchedBabies')
			->with('searchBabies', $searchBabies);
	}
}
