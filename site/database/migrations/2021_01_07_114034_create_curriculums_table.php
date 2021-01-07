<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->integer('preprimary_yn');
            $table->integer('class_1_yn');
            $table->integer('class_2_yn');
            $table->integer('class_3_yn');
            $table->integer('class_4_yn');
            $table->integer('class_5_yn');
            $table->integer('class_6_yn');
            $table->integer('class_7_yn');
            $table->integer('class_8_yn');
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
        Schema::dropIfExists('curriculums');
    }
}
