<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_infos', function (Blueprint $table) {
            $table->id();
            $table->string('tname_bangla');
            $table->string('tname_english');
            $table->date('dob');
            $table->string('sex');
            $table->string('ethinicity');
            $table->string('deisgnation');
            $table->string('inst_deisgnated');
            $table->string('inst_present');
            $table->string('edu_degree');
            $table->date('joining_dt');
            $table->string('class_six_eight');
            $table->string('short_training');
            $table->string('long_training');
            $table->string('twelve_month_training');
            $table->string('year');
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
        Schema::dropIfExists('teacher_infos');
    }
}
