<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_facilities', function (Blueprint $table) {
            $table->id();
            $table->integer('supp_src_condition');
            $table->integer('supp_rpable_yn');
            $table->integer('supp_src_project');
            $table->integer('supp_ecoli_test_yn');
            $table->integer('tbwell_condition');
            $table->integer('tbwell_rpable_yn');
            $table->integer('tbwell_ars_test_yn');
            $table->integer('tbwell_project');
            $table->integer('tbwell_ecoli_test_yn');
            $table->integer('tbwell_salt_test');
            $table->integer('filter_src_condition');
            $table->integer('filter_rpable_yn');
            $table->integer('filter_src_project');
            $table->integer('filter_ecoli_test_yn');
            $table->integer('other_src_condition');
            $table->integer('other_rpable_yn');
            $table->integer('other_src_project');
            $table->integer('other_ecoli_test_yn');
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
        Schema::dropIfExists('water_facilities');
    }
}
