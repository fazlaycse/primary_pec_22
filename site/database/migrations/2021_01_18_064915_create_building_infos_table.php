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
            $table->string('building_no_1');
            $table->integer('storied_number');
            $table->integer('storied_number_1');
            $table->integer('storied_number_2');
            $table->string('estb_year');
            $table->string('estb_year_1');
            $table->string('estb_year_2');
            $table->integer('bld_foundation');
            $table->integer('bld_foundation_1');
            $table->integer('bld_foundation_2');
            $table->integer('room_number');
            $table->integer('room_numbe_1');
            $table->integer('room_numbe_2');
            $table->integer('bld_condition');
            $table->integer('bld_condition_1');
            $table->integer('bld_condition_2');
            $table->string('bld_projt_name');
            $table->string('bld_projt_name_1');
            $table->string('bld_projt_name_2');
            $table->integer('bld_ramp_yn');
            $table->integer('bld_ramp_yn_1');
            $table->integer('bld_ramp_yn_2');
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
