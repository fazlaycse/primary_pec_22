<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashblocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washblocks', function (Blueprint $table) {
            $table->id();
            $table->integer('wsblk_amount');
            $table->string('w_es_year');
            $table->integer('wsblk_user');
            $table->integer('wsblk_condition');
            $table->integer('wsblk_std_yn');
            $table->integer('cleaning_agent_yn');
            $table->integer('toilet_water_yn');
            $table->integer('hand_wash_yn');
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
        Schema::dropIfExists('washblocks');
    }
}
