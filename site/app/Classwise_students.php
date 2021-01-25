<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classwise_students extends Model
{
   protected $fillable=[

       'token',
       'boy_y_first',
       'girl_y_first',
       'total_y_first',
       'boy_y_second',
       'girl_y_second',
       'total_y_second',
       'year',
       'class_id',
       'institute_id'
   ];
}
