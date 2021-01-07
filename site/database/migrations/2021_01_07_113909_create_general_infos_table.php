<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('acdmic_function_yn');
            $table->integer('pprimary_exist_yn');
            $table->string('school_grade');
            $table->integer('safe_water_yn');
            $table->integer('blding_own_land_yn');
            $table->integer('cycln_shelter_yn');
            $table->date('reg_year');
            $table->integer('electricity_yn');
            $table->integer('sntz_facility_yn');
            $table->integer('mltpl_inst_cmps_yn');
            $table->integer('learning_media');
            $table->integer('institute_id');
            $table->foreign('institute_id')->references('id')->on('institutes');
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
        Schema::dropIfExists('general_infos');
    }
}
