<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute_sanitations extends Model
{
    protected $fillable=[
        'token',
        'toilet_no',
        'toilet_users',
        'toilet_curcond',
        'clean_mat_yn',
        'hand_soap_yn',
        'toi_water_yn',
        'toi_project',
        'year',
        'institute_id'
    ];
}
