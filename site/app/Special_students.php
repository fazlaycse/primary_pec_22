<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_students extends Model
{
    protected $fillable=[
        'token',
        'physical_boy',
        'physical_girl',
        'physical_total',
        'myopia_boy',
        'myopia_girl',
        'myopia_total',
        'impaired_hearing_boy',
        'impaired_hearing_girl',
        'impaired_hearing_total',
        'speech_impaired_boy',
        'speech_impaired_girl',
        'speech_impaired_total',
        'intl_handicapped_boy',
        'intl_handicapped_girl',
        'intl_handicapped_total',
        'autistic_boy',
        'autistic_girl',
        'autistic_total',
        'other_boy',
        'other_girl',
        'other_total',
        'year',
        'class_id',
        'institute_id'
    ];
}
