<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCottonLevel3SymptomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotton_level3_symptoms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('level2_symptom_id');
			$table->integer('level1_symtpom_id');
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
		Schema::drop('cotton_level3_symptoms');
	}

}
