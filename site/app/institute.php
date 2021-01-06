<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institute extends Model
{
    //
    protected $fillable = [
        'emis_code',
        'inst_type',
        'name_bangla',
        'name_english',
        'zila',
        'upazila_thana',
        'union_municipal',
        'village_word',
        'cluster'
    ];
}
