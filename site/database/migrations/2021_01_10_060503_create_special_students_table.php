<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_students', function (Blueprint $table) {
            $table->id();
            $table->integer('physical_boy');
            $table->integer('physical_girl');
            $table->integer('physical_total');
            $table->integer('myopia_boy');
            $table->integer('myopia_girl');
            $table->integer('myopia_total');
            $table->integer('impaired_hearing_boy');
            $table->integer('impaired_hearing_girl');
            $table->integer('impaired_hearing_total');
            $table->integer('speech_impaired_boy');
            $table->integer('speech_impaired_girl');
            $table->integer('speech_impaired_total');
            $table->integer('intl_handicapped_boy');
            $table->integer('intl_handicapped_girl');
            $table->integer('intl_handicapped_total');
            $table->integer('autistic_boy');
            $table->integer('autistic_girl');
            $table->integer('autistic_total');
            $table->integer('other_boy');
            $table->integer('other_girl');
            $table->integer('other_total');
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
        Schema::dropIfExists('special_students');
    }
}
