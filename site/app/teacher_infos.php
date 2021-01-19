<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_infos extends Model
{
    protected $fillable=[
        'token',
        'tname_bangla',
        'tname_english',
        'dob',
        'sex',
        'ethinicity',
        'deisgnation',
        'inst_deisgnated',
        'inst_present',
        'edu_degree',
        'joining_dt',
        'class_six_eight',
        'short_training',
        'long_training',
        'twelve_month_training',
        'year',
        'institute_id'

    ];
}
