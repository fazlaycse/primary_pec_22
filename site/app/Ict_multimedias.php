<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ict_multimedias extends Model
{
    protected $fillable=[
        'token',
        'lptop_other_src_amnt',
        'lptop_dmg_amnt',
        'internet_type',
        'ict_known_teacher_yn',
        'dsktp_use_yn',
        'internet_use_yn',
        'mltmdia_use_yn',
        'mltmdia_class_yn',
        'mltmdia_intr_class_yn',
        'sound_system_yn',
        'electr_device_pdg_yn',
        'institute_id',
        'year',
        'desktop_yn',
        'desktop_amount',
        'dsktp_other_src_amnt',
        'dsktp_dmg_amnt',
        'laptop_yn',
        'lptop_amount'
    ];
}
