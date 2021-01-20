<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher_infos;
use Session;

class TeacherInfosController extends Controller
{
    public function read(Request $request)
    {
        try {
            $instRow = Teacher_infos::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            return view('teacher_info')->with(compact('instRow'));
        } catch (\Exception $e) {
            // do task when error
            $instRow = new Teacher_infos();
            $instRow->institute_id = $request->session()->get('institute_id');
            $instRow->year = 2020;
            try {
                $instRow->save(); // returns false
                Session::flash('message', 'Data Updated Successfully!');
                return view('teacher_info')->with(compact('instRow'));
            } catch (\Exception $e) {
                // do task when error
                echo $e->getMessage();   // insert query
//                Session::flash('message', 'Something went wrong!');
                exit;
            }
        }
    }

    public function updateOrcreate(Request $request)
    {
        $reqData = $request->all();

        if ($request->method() == 'POST') {
            for ($i = 0; $i < sizeof($reqData); $i++) {
                $reqData[$i]['institute_id'] = $request->session()->get('institute_id');
                $reqData[$i]['year'] = 2010;
            }

            try {
                Teacher_infos::where('institute_id', '=', $request->session()->get('institute_id'))->delete();
                Teacher_infos::insert($reqData);
                $request->session()->forget('institute_id');
                return response('OK', 200);
            } catch (\Exception $e) {
                return response(json_encode(['error' =>  $e->getMessage()]), 401);

            }
        }
    }
}
