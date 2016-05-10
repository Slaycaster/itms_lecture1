<?php

return array(
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Baby\'s Toys',

	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'toy',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Toy',

	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'name' => array(
	        'title' => 'Toy Name'
	    ),
	    'picture_path' => array(
	    	'title' => 'Image',
	    	'output' => "<img src='/itms_lecture1/public/(:value)' height='100' />"
	    ),
	    'baby_id' => array(
	    	'title' => 'Belongs to Baby',
	    	'relationship' => 'baby',
	    	'select' => "CONCAT((:table).name, ', ', (:table).age)"
	    )
	),

	/**
	 * The edit fields array
	 *
	 * @type array
	 */
	'edit_fields' => array(
	    'name' => array(
	        'title' => 'Toy Name',
	        'type' => 'text'
	    ),
	    'description' => array(
	    	'title' => 'Description',
	    	'type' => 'textarea',
	    	'limit' => 255, //optional, defaults to no limit
    		'height' => 100, //optional, defaults to 100
	    ),
	    'picture_path' => array(
	    	'title' => 'Toy Image',
	    	'type' => 'image',
	    	'naming' => 'random',
	    	'location' => public_path() . '/',
	    	'size_limit' => 2
	    ),
	    'baby' => array(
	    	'title' => 'Belongs to Baby',
	    	'type' => 'relationship',
	    	'name_field' => 'name'
	    )
	),

	/**
	 * The filter fields
	 *
	 * @type array
	 */
	'filters' => array(
	    'name' => array(
	        'title' => 'By Toy Name'
	    ),
	    'baby' => array(
	    	'title' => 'By Baby',
	    	'type' => 'relationship',
	    	'name_field' => 'name'
	    )
	),

	'rules' => array(
    	'name' => 'required|unique:toys,name',
    	'baby_id' => 'required'
	),

	'messages' => array(
    	'name.required' => 'Staff Name is required',
    	'baby_id.required' => 'Baby is required',
    	'name.unique' => 'Staff Name must be unique'
	)
);