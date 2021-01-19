<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repeater_students extends Model
{
    protected $fillable=[
        'token',
        'repeater_boy',
        'repeater_girl',
        'repeater_total',
        'class_id',
        'institute_id',
        'created_at',
        'updated_at',
        'year'
    ];
}
