<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General_infos extends Model
{
    protected $fillable = [
        'token',
        'year',
        'shift_number',
        'toilet_yn',
        'wash_block',
        'shaheed_minar_yn',
        'establishment_date',
        'nationalisation_date',
        'boundary_wall_yn',
        'disable_student_toilet_yn',
        'acdmic_function_yn',
        'pprimary_exist_yn',
        'school_grade',
        'safe_water_yn',
        'blding_own_land_yn',
        'cycln_shelter_yn',
        'reg_year',
        'electricity_yn',
        'sntz_facility_yn',
        'mltpl_inst_cmps_yn',
        'learning_media',
        'institute_id'
    ];
}
