<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistrationAddFields extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->string('cage_type')->nullable()->default("perso");
            $table->double('cage_quantity')->nullable()->default(1);
            $table->string('cage_length')->nullable();
            $table->string('beside')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('cage_type');
            $table->dropColumn('cage_quantity');
            $table->dropColumn('cage_length');
            $table->dropColumn('beside');
        });
    }
}
