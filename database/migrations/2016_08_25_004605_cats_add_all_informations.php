<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatsAddAllInformations extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->string('eyes_color');
            $table->string('origin_book');
            $table->string('breeder');
            $table->string('father');
            $table->string('mother');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cats', function (Blueprint $table) {
            $table->dropColumn('eyes_color');
            $table->dropColumn('origin_book');
            $table->dropColumn('breeder');
            $table->dropColumn('father');
            $table->dropColumn('mother');
        });
    }
}

