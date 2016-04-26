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

	public function showHomepage()
	{
		return View::make('homepage');
	}

	public function executeSearch()
	{
		$keywords = Input::get('hinahanap');

		$babies = Baby::where('name', 'LIKE', '%'.$keywords.'%')->orderBy('created_at', 'desc')->take(4)->get();

		$searchBabies = new \Illuminate\Database\Eloquent\Collection();

		foreach($babies as $b)
		{
			$searchBabies->add($b);
		}

		return View::make('searchedBabies')
			->with('searchBabies', $searchBabies);
	}
}
