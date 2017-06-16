<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catregistrations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('registration_id');
			$table->integer('cat_id');
			$table->string('category_day1');
			$table->string('category_day2');
			$table->string('category_speciale_day1');
			$table->string('category_speciale_day2');
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
		Schema::drop('catregistrations');
	}

}
