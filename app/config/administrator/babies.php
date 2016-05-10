<?php

return array(
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'ITMS Baby',

	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'baby',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Baby',

	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'name' => array(
	        'title' => 'Baby Name'
	    ),
	    'age' => array(
	    	'title' => 'Age'
	    )
	),

	/**
	 * The edit fields array
	 *
	 * @type array
	 */
	'edit_fields' => array(
	    'name' => array(
	        'title' => 'Baby Name',
	        'type' => 'text'
	    ),
	    'age' => array(
	    	'title' => 'Age',
	    	'type' => 'number'

	    ),
	),

	'rules' => array(
    	'name' => 'required|unique:babies,name'
	),

	'messages' => array(
    	'name.required' => 'Baby Name is required',
    	'name.unique' => 'Baby Name must be unique'
	)

);