<?php

// app/models/Comment.php

class Comment extends Eloquent
{
	//let Eloquent know that these attributes will be available for mass assignment
	protected $fillable = array('author', 'text');

	protected $primaryKey = 'id';
}