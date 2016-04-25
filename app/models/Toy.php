<?php

	class Toy extends Eloquent 
	{
		//The table in the database used by the model.
		protected $table = 'toys';

		//The attribute that used as primary key.
		protected $primaryKey = 'id';

		//Validation rules ng create!
		public static $rules = array(
			'name' => 'required|unique:toys,name',
			'baby_id' => 'required'
		);

		//Validation rules ng update!
		public static $updateRules = array(
			'name' => 'required',
			'baby_id' => 'required'
		);

		//Defining relationships
		//When it is a foreign key
		public function baby()
		{
			return $this->belongsTo('Baby');
		}
	}

?>