<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIctMultimediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_multimedias', function (Blueprint $table) {
            $table->id();
            $table->integer('desktop_yn');
            $table->integer('desktop_amount');
            $table->integer('dsktp_other_src_amnt');
            $table->integer('dsktp_dmg_amnt');
            $table->integer('laptop_yn');
            $table->integer('lptop_amount');
            $table->integer('lptop_other_src_amnt');
            $table->integer('lptop_dmg_amnt');
            $table->integer('internet_type');
            $table->integer('ict_known_teacher_yn');
            $table->integer('dsktp_use_yn');
            $table->integer('internet_use_yn');
            $table->integer('mltmdia_use_yn');
            $table->integer('mltmdia_class_yn');
            $table->integer('mltmdia_intr_class_yn');
            $table->integer('sound_system_yn');
            $table->integer('electr_device_pdg_yn');
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
        Schema::dropIfExists('ict_multimedias');
    }
}
