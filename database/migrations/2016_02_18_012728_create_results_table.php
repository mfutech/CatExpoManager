<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('exposition');
			$table->date('date');
			$table->integer('days');
			$table->integer('CAC');
			$table->integer('CACI');
			$table->integer('CAGCI');
			$table->integer('CACE');
			$table->integer('CAGCE');
			$table->binary('judgment1');
			$table->binary('judgment2');
			$table->boolean('validated');
			$table->string('judge1');
			$table->string('judge2');
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
		Schema::drop('results');
	}

}
