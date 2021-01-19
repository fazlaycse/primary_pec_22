<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    protected $fillable = [
        'token',
        'number_of_building',
        'institute_id',
    ];
}
