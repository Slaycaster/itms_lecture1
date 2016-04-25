<?php

	class Baby extends Eloquent
	{
		//Database driver
		/*
			1 - Eloquent (MVC Driven)
			2 - DB (Directly query to SQL database, no model required)
		*/

		//The table in the database used by the model.
		protected $table = 'babies';

		//The attribute that used as primary key.
		protected $primaryKey = 'id';

		//Validation rules!
		public static $rules = array(
			'name' => 'required|unique:babies,name',
			'age' => 'required|numeric'
		);

		public static $updateRules = array(
			'name' => 'required',
			'age' => 'required|numeric'
		);

		//Defining relationships
		//When the model is the reference and it has many.. (one-to-many)
		public function toys()
		{
			return $this->hasMany('Toy');
		}
	}