<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasswiseStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classwise_students', function (Blueprint $table) {
            $table->id();
            $table->integer('boy_y_first');
            $table->integer('girl_y_first');
            $table->integer('total_y_first');
            $table->integer('boy_y_second');
            $table->integer('girl_y_second');
            $table->integer('total_y_second');
            $table->integer('year');
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
        Schema::dropIfExists('classwise_students');
    }
}
