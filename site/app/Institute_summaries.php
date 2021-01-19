<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute_summaries extends Model
{
    protected $fillable = [
        'token',
        'onu_head_teacher',
        'onu_ast_teacher',
        'onu_pprimary_teacher',
];
}
