<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ethnic_student;
use App\Special_students;
use App\Classwise_students;
use App\Repeater_students;
use Session;

class ClassTwoController extends Controller
{
    public function read(Request $request)
    {
        /*$columns = Schema::getColumnListing('Special_std_facilities');

           for($i=0;$i<sizeof($columns);$i++){
                echo "'".strtolower($columns[$i])."',<br>";
            }
              exit();*/

        $instRow = [];
        //deal with Ethnic_student Table
        try {
            $row = Ethnic_student::where('institute_id', '=', $request->session()->get('institute_id'))->where('class_id', '=', 2)->firstOrFail();
            //print_r($row);die;
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Ethnic_student();
            $row->year = 2020;
            $row->class_id = 2;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Special_students Table
        try {
            $row = Special_students::where('institute_id', '=', $request->session()->get('institute_id'))->where('class_id', '=', 2)->firstOrFail();
            //print_r($row); exit;
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Special_students();
            $row->year = 2020;
            $row->class_id = 2;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Classwise_students  Table
        try {
            $row = Classwise_students::where('institute_id', '=', $request->session()->get('institute_id'))->where('class_id', '=', 2)->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Classwise_students();
            $row->year = 2020;
            $row->class_id = 2;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Repeater_students  Table
        try {
            $row = Repeater_students::where('institute_id', '=', $request->session()->get('institute_id'))->where('class_id', '=', 2)->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Repeater_students();
            $row->year = 2020;
            $row->class_id = 2;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }


        $instRowObj = new \stdClass();
        $instRowObj->ethnic_students = $instRow[0];
        $instRowObj->special_students = $instRow[1];
        $instRowObj->classwise_students = $instRow[2];
        $instRowObj->repeater_students = $instRow[3];
        return view('class_two')->with('instRowObj',$instRowObj);

    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {
            //var_dump($request->all()); exit;
            try {
                $updateOrcreateRow = Ethnic_student::updateOrCreate(['institute_id' => $request->session()->get('institute_id'),'class_id'=>2], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Ethnic_student Table!');
                return redirect('/class_one');
            }

            try {

                $updateOrcreateRow = Special_students::updateOrCreate(['institute_id' => $request->session()->get('institute_id'),'class_id'=>2], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for special_students Table!');
                return redirect('/class_one');
            }

            try {
                $updateOrcreateRow = Classwise_students::updateOrCreate(['institute_id' => $request->session()->get('institute_id'),'class_id'=>2], $request->all());


            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for classwise_students Table!');
                return redirect('/class_one');
            }

            try {
                $updateOrcreateRow = repeater_students::updateOrCreate(['institute_id' => $request->session()->get('institute_id'),'class_id'=>2], $request->all());
                //print_r($request->all());die;
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for repeater_students Table!');
                return redirect('/class_one');
            }


            Session::flash('message', 'Data Saved Successfully!');
            return redirect('/class_three');
        }
    }


}
