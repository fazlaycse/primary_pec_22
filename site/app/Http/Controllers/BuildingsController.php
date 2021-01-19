<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buildings;
use App\Building_infos;
use App\institute_sanitations;
use App\washblocks;
use App\water_facilities;
use App\ict_multimedias;
use Session;

class BuildingsController extends Controller
{
    public function index(){

    }
    public  function create(Request $request){
        var_dump($request->all());exit;
        $inst_id = $request->session()->get('institute_id');
//        var_dump($request->all());exit;
        if ($request->method() == 'POST') {
            $table = new Buildings();
            $table->number_of_building = $request->number_of_building;
            $table->inst_type = $request->inst_type;
            $table->name_bangla = $request->name_bangla;
            $table->name_english = $request->name_english;
            $table->division_id = $request->division_id;
            $table->district_id = $request->district_id;
            $table->thana_id = $request->thana_id;
            $table->union_id = $request->union_id;
            $table->village_word = $request->village_word;
            $table->cluster = $request->cluster;
            try {
                $table->save(); // returns false
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('/second_page');
            } catch (\Exception $e) {
                // do task when error
                echo $e->getMessage();
                exit();
                Session::flash('message', 'Something went wrong!');
                return redirect('/first_page');
            }
        }
    }
}
