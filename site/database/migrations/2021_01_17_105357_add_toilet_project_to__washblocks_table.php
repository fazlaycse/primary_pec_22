<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToiletProjectToWashblocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Washblocks', function (Blueprint $table) {
            //
            $table->integer('toilet_project');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Washblocks', function (Blueprint $table) {
            //
            $table->dropColumn('toilet_project');
        });
    }
}
