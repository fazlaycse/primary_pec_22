<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthnicStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethnic_students', function (Blueprint $table) {
            $table->id();
            $table->integer('cakma_boy');
            $table->integer('cakma_girl');
            $table->integer('cakma_total');
            $table->integer('marma_boy');
            $table->integer('marma_girl');
            $table->integer('marma_total');
            $table->integer('tripura_boy');
            $table->integer('tripura_girl');
            $table->integer('tripura_total');
            $table->integer('garo_boy');
            $table->integer('garo_girl');
            $table->integer('garo_total');
            $table->integer('saotal_boy');
            $table->integer('saotal_girl');
            $table->integer('saotal_total');
            $table->integer('monipuri_boy');
            $table->integer('monipuri_girl');
            $table->integer('monipuri_total');
            $table->integer('sadri_boy');
            $table->integer('sadri_girl');
            $table->integer('sadri_total');
            $table->integer('other_ethnic_boy');
            $table->integer('other_ethnic_girl');
            $table->integer('other_ethnic_total');
            $table->integer('class_id');
            $table->foreign('class_id')->references('id')->on('classes');
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
        Schema::dropIfExists('ethnic_students');
    }
}
