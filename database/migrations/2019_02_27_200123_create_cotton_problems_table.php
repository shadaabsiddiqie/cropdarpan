<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCottonProblemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotton_problems', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('common_name', 60)->nullable();
			$table->string('scientific_name', 60)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('advise', 60)->nullable();
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
		Schema::drop('cotton_problems');
	}

}
