<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use App\Users;
use Session;


class FirstPageController extends Controller
{
    public function read(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'emis_code' => 'required|min:9|max:15'
//                'username' => 'required'
            ]);
            $request->validate([
                'emis_code' => 'numeric'
            ]);
            try {
                $userRow = Users::where('username', '=', $request->input('username'))->firstOrFail();
                $instRow = Institute::where('emis_code', '=', $request->input('emis_code'))->firstOrFail();
                $request->session()->put('institute_id', $instRow->id);
                $request->session()->put('user_id', $userRow->id);
                return view('first_page')->with(compact('instRow'));
            } catch (\Exception $e) {
                // do task when error
                $userRow = Users::where('username', '=', $request->input('username'))->firstOrFail();
                $instRow = new Institute();
                $instRow->emis_code = $request->input('emis_code');
                $instRow->user_id = $userRow->id;
                try {
                    $instRow->save(); // returns false
                    $request->session()->put('institute_id', $instRow->id);
                    Session::flash('message', 'Data Updated Successfully!');
                    return view('first_page')->with(compact('instRow'));
                } catch (\Exception $e) {
                    // do task when error
//              echo $e->getMessage();   // insert query
                    Session::flash('message', 'Something went wrong!');
                    exit;
                }
            }
        }
    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {

            try {
                $updateOrcreateRow = Institute::updateOrCreate(['id' => $request->session()->get('institute_id')], $request->all());
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('/second_page');
            } catch (\Exception $e) {
                echo $e->getMessage();

                // do task when error
                /*echo $e->getMessage();
                exit();*/
                Session::flash('message', 'Something went wrong!');
                return redirect('/first_page');
            }
        }
    }

}
