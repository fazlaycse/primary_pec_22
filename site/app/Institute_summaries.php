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
        'onu_sg',
        'att_in_head_teacher',
        'att_in_ast_teacher',
        'att_in_pprimary_teacher',
        'att_in_sg',
        'att_out_hd_teacher',
        'att_out_ast_teacher',
        'att_out_pprimary_teacher',
        'att_out_sg',
        'wk_hd_teacher',
        'wk_ast_teacher',
        'wk_pprimary_teacher',
        'working_sg',
        'prl_hd_teacher',
        'prl_ast_teacher',
        'prl_pprimary_teacher',
        'prl_sg',
        'dd_hd_teacher',
        'dd_ast_teacher',
        'dd_pprimary_teacher',
        'dead_sg',
        'building_number',
        'room_number',
        'washblock_number',
        'year',
        'institute_id'
    ];
}
