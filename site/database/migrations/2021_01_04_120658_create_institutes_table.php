<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->integer('emis_code');
            $table->integer('inst_type');
            $table->string('name_bangla');
            $table->string('name_english');
            $table->integer('zila');
            $table->integer('upazila_thana');
            $table->string('union_municipal');
            $table->string('village_word');
            $table->string('cluster');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
