<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_infos extends Model
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
        //'short_training',
        //'long_training',
        'twelve_month_training',
        'year',
        'institute_id',
        'short_tr_1',
        'short_tr_2',
        'short_tr_3',
        'short_tr_4',
        'short_tr_5',
        'short_tr_6',
        'long_tr_1',
        'long_tr_2',
        'long_tr_3',
        'long_tr_4',
        'long_tr_5',
        'long_tr_6',
        'tlv_mon_tr_1',
        'tlv_mon_tr_2',
        'tlv_mon_tr_3',
        'tlv_mon_tr_4',
        'tlv_mon_tr_5',
        'tlv_mon_tr_6',

    ];
}
