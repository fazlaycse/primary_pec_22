<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    protected $fillable = [
        'token',
        'emis_code',
        'inst_type',
        'name_bangla',
        'name_english',
        'division_id',
        'district_id',
        'thana_id',
        'union_id',
        'user_id',
        'update_user_id',
        'village_word',
        'cluster'
    ];
}
