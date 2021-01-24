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

class SixthPageController extends Controller
{
    public function read(Request $request)
    {

        //deal with Washblocks  Table
        try {
            $row = Washblocks::where('institute_id', '=', $request->session()->get('institute_id'))->get();
            $instRowObj = new \stdClass();
            $instRowObj->data = $row;
            $instRowObj->instId = $request->session()->get('institute_id');
            return view('sixth_page')->with('instRowObj', $instRowObj);
        } catch (\Exception $e) {
            echo "Error occurred: " . $e;
            exit;
        }
    }

    public function updateOrcreate(Request $request)
    {
        $reqData = $request->all();
        if ($request->method() == 'POST') {
            /* var_dump($request->all());
                     return response(json_encode(['error' => $e->getMessage()]), 401);
                     exit;*/

            for ($i = 0; $i < sizeof($reqData); $i++) {
                $reqData[$i]['institute_id'] = $request->session()->get('institute_id');
                $reqData[$i]['year'] = 2020;
            }

            try {
                Washblocks::where('institute_id', '=', $request->session()->get('institute_id'))->delete();
                Washblocks::insert($reqData);
                Session::flash('message', 'Data Submitted Successfully!');
                return response('OK', 200);
            } catch (\Exception $e) {
                return response(json_encode(['error' => $e->getMessage()]), 401);
            }

        }
    }
}
