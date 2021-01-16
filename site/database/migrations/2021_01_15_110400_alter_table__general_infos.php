<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableGeneralInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('General_infos', function (Blueprint $table) {
        //
        $table->integer('shift_number');
        $table->integer('toilet_yn');
        $table->integer('wash_block');
        $table->integer('shaheed_minar_yn');
        $table->date('establishment_date');
        $table->date('nationalisation_date');
        $table->integer('boundary_wall_yn');
        $table->integer('disable_student_toilet_yn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('General_infos', function (Blueprint $table) {
        //
        $table->dropColumn('shift_number');
        $table->dropColumn('toilet_yn');
        $table->dropColumn('wash_block');
        $table->dropColumn('shaheed_minar_yn');
        $table->date('establishment_date');
        $table->date('nationalisation_date');
        $table->dropColumn('boundary_wall_yn');
        $table->dropColumn('disable_student_toilet_yn');
        });
    }
}
