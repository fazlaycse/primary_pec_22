<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialStdFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_std_facilities', function (Blueprint $table) {
            $table->id();
            $table->integer('ramp_yn');
            $table->integer('spc_washblock_yn');
            $table->integer('wheel_chair_yn');
            $table->integer('cratch_yn');
            $table->integer('clr_contrast_yn');
            $table->integer('daisy_book_yn');
            $table->integer('brail_book_yn');
            $table->integer('sign_lang_tutor_yn');
            $table->integer('sign_lang_manual_yn');
            $table->integer('silent_envr_yn');
            $table->integer('hearing_aid_yn');
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
        Schema::dropIfExists('special_std_facilities');
    }
}
