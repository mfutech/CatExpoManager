<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatteriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catteries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->text('email');
			$table->text('mobile');
			$table->text('phone');
			$table->text('url');
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
		Schema::drop('catteries');
	}

}
