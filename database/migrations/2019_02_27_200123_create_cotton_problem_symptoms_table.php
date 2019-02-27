<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCottonProblemSymptomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotton_problem_symptoms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cotton_problem_id')->nullable();
			$table->integer('cotton_symptom_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cotton_problem_symptoms');
	}

}
