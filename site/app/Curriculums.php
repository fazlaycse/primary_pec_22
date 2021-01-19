<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculums extends Model
{
    protected $fillable =[
        'token',
        'year',
        'preprimary_yn',
        'class_1_yn',
        'class_2_yn',
        'class_3_yn',
        'class_4_yn',
        'class_5_yn',
        'class_6_yn',
        'class_7_yn',
        'class_8_yn',
        'institute_id'
    ];
}
