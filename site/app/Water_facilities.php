<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water_facilities extends Model
{
    protected $fillable=[
        'year',
        'token',
        'supp_src_condition',
        'supp_rpable_yn',
        'supp_src_project',
        'supp_ecoli_test_yn',
        'tbwell_condition',
        'tbwell_rpable_yn',
        'tbwell_ars_test_yn',
        'tbwell_project',
        'tbwell_ecoli_test_yn',
        'tbwell_salt_test',
        'filter_src_condition',
        'filter_rpable_yn',
        'filter_src_project',
        'filter_ecoli_test_yn',
        'other_src_condition',
        'other_rpable_yn',
        'other_src_project',
        'other_ecoli_test_yn',
        'institute_id'
    ];
}
