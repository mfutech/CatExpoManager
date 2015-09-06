<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExposantAttributes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->string('phone', 15);
			$table->string('url', 50);
			$table->string('firstname', 30);
			$table->string('lastname', 30);
			$table->string('affiliation', 50);
			$table->boolean('is_exposant');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('phone');
			$table->dropColumn('url');
			$table->dropColumn('firstname');
			$table->dropColumn('lastname');
			$table->dropColumn('affiliation');
			$table->dropColumn('is_exposant');
			//
		});
	}

}
