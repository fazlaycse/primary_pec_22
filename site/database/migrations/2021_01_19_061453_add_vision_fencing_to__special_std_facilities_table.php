<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisionFencingToSpecialStdFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Special_std_facilities', function (Blueprint $table) {
            //
            $table->integer('vision_fencing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Special_std_facilities', function (Blueprint $table) {
            //
            $table->dropColumn('vision_fencing');
        });
    }
}
