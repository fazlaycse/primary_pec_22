<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteSanitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_sanitations', function (Blueprint $table) {
            $table->id();
            $table->integer('toilet_no');
            $table->integer('toilet_users');
            $table->integer('toilet_curcond');
            $table->integer('clean_mat_yn');
            $table->integer('hand_soap_yn');
            $table->integer('toi_water_yn');
            $table->integer('toi_project');
            $table->integer('year');
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
        Schema::dropIfExists('institute_sanitations');
    }
}
