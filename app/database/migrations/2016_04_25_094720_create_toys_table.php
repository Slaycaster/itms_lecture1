<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('toys', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('description');
			$table->string('picture_path');
			$table->integer('baby_id');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('toys');
	}

}