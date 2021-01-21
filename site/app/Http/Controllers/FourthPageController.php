<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buildings;
use App\Building_infos;
use Session;

class FourthPageController extends Controller
{
    public function read(Request $request)
    {

        $instRow = [];
        $buildingId='';
        //deal with Buildings Table
        try {
            $row = Buildings::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            $buildingId=$row->id;
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Buildings();
            //$row->year = 2020;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                $buildingId=$row->id;
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Building_infos Table
        try {

            $row = Building_infos::where('institute_id', '=', $request->session()->get('institute_id'))->get();
            //print_r($row); exit;
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Building_infos();
            $row->year = 2020;
            $row->building_id = $buildingId;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }


        $instRowObj = new \stdClass();
        $instRowObj->buildings = $instRow[0];
        $instRowObj->building_infos = $instRow[1];
        return view('fourth_page')->with('instRowObj',$instRowObj);

    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {
            //var_dump($request->all()); exit;
            try {
                $updateOrcreateRow = Buildings::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                $buildingId=$updateOrcreateRow->id;
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Buildings Table!');
                return redirect('/third_page');
            }

            try {

                $updateOrcreateRow = Building_infos::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Building_infos Table!');
                return redirect('/third_page');
            }

            try {
                $updateOrcreateRow = Institute_sanitations::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Institute_sanitations Table!');
                return redirect('/third_page');
            }

            try {
                $updateOrcreateRow = Washblocks::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                //print_r($request->all());die;
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Washblocks Table!');
                return redirect('/third_page');
            }

            try {
                $updateOrcreateRow = Water_facilities::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Water_facilities Table!');
                return redirect('/third_page');
            }

            try {
                $updateOrcreateRow = Ict_multimedias::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Ict_multimedias Table!');
                return redirect('/third_page');
            }

            Session::flash('message', 'Data Saved Successfully!');
            return redirect('/pre_primary');
        }
    }
}
