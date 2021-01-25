<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buildings;
use App\Building_infos;
use App\Institute_sanitations;
use App\Washblocks;
use App\Water_facilities;
use App\Ict_multimedias;
use Session;

class SeventhPageController extends Controller
{
    public function read(Request $request)
    {
        /*$columns = Schema::getColumnListing('Special_std_facilities');

           for($i=0;$i<sizeof($columns);$i++){
                echo "'".strtolower($columns[$i])."',<br>";
            }
              exit();*/

        $instRow = [];
        //deal with Water_facilities  Table
        try {
            $row = Water_facilities::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Water_facilities();
            $row->year = 2020;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Ict_multimedias  Table
        try {
            $row = Ict_multimedias::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Ict_multimedias();
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
        $instRowObj->water_facilities = $instRow[0];
        $instRowObj->ict_multimedias = $instRow[1];
        return view('seventh_page')->with('instRowObj',$instRowObj);

    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {
            //var_dump($request->all()); exit;

            try {
                $updateOrcreateRow = Water_facilities::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Water_facilities Table!');
                return redirect('/sixth_page');
            }

            try {
                $updateOrcreateRow = Ict_multimedias::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong for Ict_multimedias Table!');
                return redirect('/sixth_page');
            }

            Session::flash('message', 'Data Saved Successfully!');
            return redirect('/pre_primary');
        }
    }
}
