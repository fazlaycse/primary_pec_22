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

class FifthPageController extends Controller
{
    public function read(Request $request)
    {

        //deal with Institute_sanitations  Table
        try {
            $row = Institute_sanitations::where('institute_id', '=', $request->session()->get('institute_id'))->get();
            $instRowObj = new \stdClass();
            $instRowObj->data = $row;
            $instRowObj->instId = $request->session()->get('institute_id');
            return view('fifth_page')->with('instRowObj', $row);
        } catch (\Exception $e) {
            echo "Error occurred: ". $e ;exit;
        }
    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {

            try {
                $updateOrcreateRow = Institute_sanitations::updateOrCreate(['institute_id' => $request->session()->get('institute_id')], $request->all());
                return response('OK', 200);
            } catch (\Exception $e) {
                return response(json_encode(['error' => $e->getMessage()]), 401);
            }

        }
    }
}
