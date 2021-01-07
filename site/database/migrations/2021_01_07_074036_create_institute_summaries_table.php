<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_summaries', function (Blueprint $table) {
            $table->id();
            $table->integer('onu_head_teacher');
            $table->integer('onu_ast_teacher');
            $table->integer('onu_pprimary_teacher');
            $table->integer('onu_sg');
            $table->integer('att_in_head_teacher');
            $table->integer('att_in_ast_teacher');
            $table->integer('att_in_pprimary_teacher');
            $table->integer('att_in_sg');
            $table->integer('att_out_hd_teacher');
            $table->integer('att_out_ast_teacher');
            $table->integer('att_out_pprimary_teacher');
            $table->integer('att_out_sg');
            $table->integer('wk_hd_teacher');
            $table->integer('wk_ast_teacher');
            $table->integer('wk_pprimary_teacher');
            $table->integer('working_sg');
            $table->integer('prl_hd_teacher');
            $table->integer('prl_ast_teacher');
            $table->integer('prl_pprimary_teacher');
            $table->integer('prl_sg');
            $table->integer('dd_hd_teacher');
            $table->integer('dd_ast_teacher');
            $table->integer('dd_pprimary_teacher');
            $table->integer('dead_sg');
            $table->integer('building_number');
            $table->integer('room_number');
            $table->integer('washblock_number');
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
        Schema::dropIfExists('institute_summaries');
    }
}
