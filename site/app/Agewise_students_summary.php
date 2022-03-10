<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agewise_students_summary extends Model
{
    //
    //
    protected $fillable = [
        'token',
        'institute_id',
        'class_id',
        'YEAR',
        'nine_yr_boy',
        'nine_yr_girl' ,
        'nine_yr_total',
        'ten_yr_boy',
        'ten_yr_girl',
        'ten_yr_total',
        'eleven_yr_boy' ,
        'eleven_yr_girl',
        'eleven_yr_total',
        'twelve_yr_boy',
        'twelve_yr_girl',
        'twelve_yr_total',
        'thirteen_yr_boy',
        'thirteen_yr_girl',
        'thirteen_yr_total',
        'fourteen_yr_boy',
        'fourteene_yr_girl',
        'fourteen_yr_total',
        'fifteen_yr_boy',
        'fifteen_yr_girl',
        'fifteen_yr_total' ,
        'other_yr_boy',
        'other_yr_girl' ,
        'other_yr_total',
        'total_yr_boy',
        'total_yr_girl',
        'grand_total'
    ];
}
