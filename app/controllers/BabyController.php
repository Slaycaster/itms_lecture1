<?php

class BabyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all the babies
		$babies = Baby::all();

		// load the view and pass the babies
		return View::make('babies.index')//views/babies/index.blade.php
			->with('babies', $babies);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//load the create view at app/views/babies/create.blade.php
		return View::make('babies.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate user input
		$validation = Validator::make(Input::all(), Baby::$rules);

		//gagawin na yung baby
		if ($validation->fails())
		{
			return Redirect::to('babies/create')
				->withErrors($validation)
				->withInput();
		}
		else
		{
			//save the baby
			$baby = new Baby;
			$baby->name = Input::get('name'); //$_GET['name'];
			$baby->age = Input::get('age');
			$baby->save();

			//redirect to index
			Session::flash('message', 'Baby successfully saved!');
			return Redirect::to('babies');
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
