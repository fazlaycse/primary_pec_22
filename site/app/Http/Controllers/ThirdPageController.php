<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\General_infos;
use App\Curriculums;
use App\Special_std_facilities;
use Session;
use Illuminate\Support\Facades\Schema;
class ThirdPageController extends Controller
{
    public function read(Request $request)
    {
        /*$columns = Schema::getColumnListing('Special_std_facilities');

           for($i=0;$i<sizeof($columns);$i++){
                echo "'".strtolower($columns[$i])."',<br>";
            }
              exit();*/

        $instRow = [];

        //deal with Geneal Infos Table
        try {
            $row = General_infos::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new General_infos();
            $row->year = 2020;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Curriculums Infos Table
        try {
            $row = Curriculums::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Curriculums();
            $row->year = 2020;

            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Special_std_facilities Infos Table
        try {
            $row = Special_std_facilities::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Special_std_facilities();
            $row->year = 2020;

            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }
        $instRowObj = new \stdClass();
        $instRowObj->general_info = $instRow[0];
        $instRowObj->curriculums = $instRow[1];
        $instRowObj->special_std_facilities = $instRow[2];

        return view('third_page')->with('instRowObj',$instRowObj);

    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {

//            var_dump($request->all());
            try {
                $updateOrcreateRow = General_infos::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for General_infos Table!');
                return redirect('/second_page');
            }

            try {
                $updateOrcreateRow = Curriculums::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Curriculums Table!');
                return redirect('/second_page');
            }

            try {
                $updateOrcreateRow = Special_std_facilities::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Special_std_facilities Table!');
                return redirect('/second_page');
            }
            Session::flash('message', 'Data Saved Successfully!');
            return redirect('/fourth_page');
        }
    }
}
