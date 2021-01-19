<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\General_infos;
use App\Curriculums;
use App\Special_std_facilities;
use Session;

class ThirdPageController extends Controller
{
    public function read(Request $request)
    {
        $instRow = [];

        //deal with Geneal Infos Table
        try {
            $row = General_infos::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new General_infos();
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
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }
        var_dump($instRow);
    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {

            try {
                $updateOrcreateRow = Institute_summaries::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('/third_page');
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong!');
                return redirect('/second_page');
            }
        }
    }
}
