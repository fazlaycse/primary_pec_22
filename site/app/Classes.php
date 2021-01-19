<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'token',
        'number_of_building',
        'institute_id'
    ];
}
