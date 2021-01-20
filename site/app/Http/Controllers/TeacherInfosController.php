<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher_infos;
use Session;

class TeacherInfosController extends Controller
{
    public function read(Request $request)
    {
        /* $columns = Schema::getColumnListing('Water_facilities');

       for($i=0;$i<sizeof($columns);$i++){
           echo "'".strtolower($columns[$i])."',<br>";
       }
         exit();*/

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
        if ($request->method() == 'POST') {

            try {
                $request->year = 2020;
                $updateOrcreateRow = Teacher_infos::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                Session::flash('message', 'Data Saved Successfully!');
                //$request->session()->forget('institute_id');
                return redirect('/');
                $request->session()->forget('institute_id');
            } catch (\Exception $e) {
                echo $e->getMessage();
                exit;
                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong!');
                return redirect('/class_six');
            }
        }
    }
}
