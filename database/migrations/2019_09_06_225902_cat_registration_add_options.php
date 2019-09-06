<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatRegistrationAddOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catregistrations', function (Blueprint $table) {
            $table->boolean('tica')->nullable()->default(false);
            $table->boolean('worldcup')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catregistrations', function (Blueprint $table) {
            $table->dropColumn('tica');
            $table->dropColumn('worldcup');
        });
    }
}

