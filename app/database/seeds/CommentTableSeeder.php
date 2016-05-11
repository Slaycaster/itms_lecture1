<?php

class CommentTableSeeder extends Seeder
{
	//run the seeder
	public function run()
	{
		DB::table('comments')->delete();

		Comment::create(array(
			'author' => 'Denimar Fernandez',
			'text' => 'Look! I am a test comment!'
		));

		Comment::create(array(
			'author' => 'Ma\'am Novida',
			'text' => 'I\'m a test comment too!'
		));
	}
}