<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepeaterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repeater_students', function (Blueprint $table) {
            $table->id();
            $table->integer('repeater_boy');
            $table->integer('repeater_girl');
            $table->integer('repeater_total');
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
        Schema::dropIfExists('repeater_students');
    }
}
