<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_infos', function (Blueprint $table) {
            $table->id();
            $table->string('building_no');
            $table->integer('storied_number');
            $table->date('estb_year');
            $table->integer('bld_foundation');
            $table->integer('room_number');
            $table->integer('bld_condition');
            $table->string('bld_projt_name');
            $table->integer('bld_ramp_yn');
            $table->integer('year');
            $table->integer('institute_id');
            $table->foreign('institute_id')->references('id')->on('institutes');
            $table->integer('building_id');
            $table->foreign('building_id')->references('id')->on('buildings');
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
        Schema::dropIfExists('building_infos');
    }
}
