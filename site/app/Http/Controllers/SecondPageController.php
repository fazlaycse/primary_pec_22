<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute_summaries;
use Session;
use Illuminate\Support\Facades\Schema;

class SecondPageController extends Controller
{
    public function read(Request $request)
    {
        $columns = Schema::getColumnListing('Institute_summaries');

  /*    for($i=0;$i<sizeof($columns);$i++){
          echo "'".strtolower($columns[$i])."',<br>";
      }
        exit();*/

        try {
            $instRow = Institute_summaries::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            return view('second_page')->with(compact('instRow'));
        } catch (\Exception $e) {
            // do task when error
            $instRow = new Institute_summaries();
            $instRow->institute_id = $request->session()->get('institute_id');
            $instRow->year = 2020;
            try {
                $instRow->save(); // returns false
                Session::flash('message', 'Data Updated Successfully!');
                return view('second_page')->with(compact('instRow'));
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
                $updateOrcreateRow = Institute_summaries::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('/third_page');
            } catch (\Exception $e) {
                echo 'saad';die;
                echo $e->getMessage();exit;

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong!');
                return redirect('/second_page');
            }
        }
    }
}
