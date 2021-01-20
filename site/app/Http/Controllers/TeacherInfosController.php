<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Teacher_infos;
class TeacherInfosController extends Controller
{
    public function read(){
        return view('teacher_info');
    }

    public function updateOrcreate(){

    }
}
