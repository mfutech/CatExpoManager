<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExpositionParameterTicaWorldcup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expositions', function(Blueprint $table)
        {
            $table->boolean('is_tica');
            $table->boolean('is_worldcup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expositions', function(Blueprint $table)
        {
            $table->dropColumn('is_tica');
            $table->dropColumn('is_worldcup');
        });
    }
}
