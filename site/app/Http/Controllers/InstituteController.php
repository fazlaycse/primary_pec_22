<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;

class InstituteController extends Controller
{
    public function index(){

    }
    public  function create(Request $request){
//            var_dump($request->all());exit;
//        var_dump($request->all());exit;
        if ($request->method() == 'POST') {
            $table = new Institute();
            $table->emis_code = $request->emis_code;
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
               echo "done";
            } catch (\Exception $e) {
                // do task when error
              echo $e->getMessage();   // insert query
                echo "Note done";

            }
        }

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}
