<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCottonSymptomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotton_symptoms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 60)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('question');
			$table->string('image')->nullable();
			$table->integer('part_id');
			$table->integer('crop_id');
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
		Schema::drop('cotton_symptoms');
	}

}
