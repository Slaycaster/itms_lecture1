<?php

class ToyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all the toys
		$toys = Toy::with('baby')->get();

		//load the view and pass all the toys
		return View::make('toys.index')
			->with('toys', $toys);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//get all the babies for choosing
		$babies = Baby::select(DB::raw('CONCAT(name, ", ", age) as baby_name'), 'id' )
			->lists('baby_name', 'id');

		//return the view for create form with the babies for dropdown.
		return View::make('toys.create')
			->with('babies', $babies);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate user input
		$validation = Validator::make(Input::all(), Toy::$rules);

		//gagawin na yung toy
		if ($validation->fails())
		{
			return Redirect::to('toys/create')
				->withErrors($validation)
				->withInput();
		}
		else
		{
			//save the baby

			$toy = new Toy;
			$toy->name = Input::get('name');
			$toy->description = Input::get('description');

			$file = array('image' => Input::file('ToyPicturePath'));

			//Assigning to a variable to check whether there is an image or not.
			$picture_path = Input::file('ToyPicturePath');
			if ($picture_path != null)
			{
				//upload path
				$destinationPath = 'laruan';

				//getting the image file extension (.jpg, .png, .gif)
				$extension = Input::file('ToyPicturePath')->getClientOriginalExtension();

				if($extension == "jpg" || $extension == "png")
				{
					//Generate a random string and set the extension file given. ex( dsf398lwaifnhoguy3.png )
					//$fileName = Str::random($length = 17).$extension;

					$max_id = DB::table('toys')->max('id') + 1;
					//Affix a format - 1Duck.png/1Duck.jpg
					$fileName = $max_id.Input::get('name').'.'.$extension;
				}
				else
				{
					Session::flash('image-error', 'The file format must be .jpg and .png only');
					return Redirect::to('toys/create')
						->withErrors($validation)
						->withInput();
				}

				//saving the file to the file server
				Input::file('ToyPicturePath')->move($destinationPath, $fileName);

				//save the file path to the database
				$toy->picture_path = $destinationPath.'/'.$fileName;
				
			}
			else
			{
				//save the default silhoutte image path
				$toy->picture_path = 'img/silhoutte.jpg';
			}

			$toy->baby_id = Input::get('baby_id');
			$toy->save();

		}
		Session::flash('message', 'Toy successfully saved!');
		return Redirect::to('toys');
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
