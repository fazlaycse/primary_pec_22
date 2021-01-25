<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ethnic_student extends Model
{
    protected $fillable=[
        'token',
        'cakma_boy',
        'cakma_girl',
        'cakma_total',
        'marma_boy',
        'marma_girl',
        'marma_total',
        'tripura_boy',
        'tripura_girl',
        'tripura_total',
        'garo_boy',
        'garo_girl',
        'garo_total',
        'saotal_boy',
        'saotal_girl',
        'saotal_total',
        'monipuri_boy',
        'monipuri_girl',
        'monipuri_total',
        'sadri_boy',
        'sadri_girl',
        'sadri_total',
        'other_ethnic_boy',
        'other_ethnic_girl',
        'other_ethnic_total',
        'class_id',
        'institute_id'
    ];
}
