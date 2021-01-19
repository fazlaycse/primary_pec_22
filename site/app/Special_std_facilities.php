<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_std_facilities extends Model
{
    protected $fillable = [
        'token',
        'year',
        'vision_fencing',
        'ramp_yn',
        'spc_washblock_yn',
        'wheel_chair_yn',
        'cratch_yn',
        'clr_contrast_yn',
        'daisy_book_yn',
        'brail_book_yn',
        'sign_lang_tutor_yn',
        'sign_lang_manual_yn',
        'silent_envr_yn',
        'hearing_aid_yn',
        'institute_id'
    ];
}
