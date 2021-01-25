<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building_infos extends Model
{

    protected $fillable = [
        'token',
        'building_no',
        'building_no_1',
        'storied_number',
        'storied_number_1',
        'storied_number_2',
        'estb_year',
        'estb_year_1',
        'estb_year_2',
        'bld_foundation',
        'bld_foundation_1',
        'bld_foundation_2',
        'room_number',
        'room_numbe_1',
        'room_numbe_2',
        'bld_condition',
        'bld_condition_1',
        'bld_condition_2',
        'bld_projt_name',
        'bld_projt_name_1',
        'bld_projt_name_2',
        'bld_ramp_yn',
        'bld_ramp_yn_1',
        'bld_ramp_yn_2',
        'year',
        'institute_id',
    ];

}
