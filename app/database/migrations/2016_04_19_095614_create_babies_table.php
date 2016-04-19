<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('babies', function(Blueprint $table)
		{
			$table->increments('id'); //INT IDENTITY(1,1)

			$table->string('name'); //VARCHAR(255)
			$table->integer('age'); //VARCHAR(255)

			$table->timestamps(); //created_at (timestamps)
									//updated_at (timestamps)
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('babies', function(Blueprint $table)
		{
			//
		});
	}

}
