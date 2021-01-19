<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Washblocks extends Model
{
    protected $fillable=[
        'token',
        'wsblk_amount',
        'wsblk_estb_year',
        'wsblk_user',
        'wsblk_condition',
        'wsblk_std_yn',
        'cleaning_agent_yn',
        'toilet_water_yn',
        'hand_wash_yn',
        'institute_id',
        'year',
        'toilet_project'
    ];
}
