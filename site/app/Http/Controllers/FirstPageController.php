<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Users;
use Illuminate\Support\Facades\Hash;
class FirstPageController extends Controller
{
    public function read(Request $request)
    {
        if ($request->method() == 'POST') {
            //   echo Hash::make($request->input('123456'));exit;
            $request->validate([
                'emis_code' => 'required|min:9|max:15',
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
            $request->validate([
                'emis_code' => 'numeric'
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                try {
                    $instRow = Institute::where('emis_code', '=', $request->input('emis_code'))->firstOrFail();
                    $request->session()->put('institute_id', $instRow->id);
                   // echo $instRow;
                   // exit;
                    return view('first_page')->with(compact('instRow'));
                } catch (\Exception $e) {
                    // do task when error
                    $instRow = new Institute();
                    $instRow->emis_code = $request->input('emis_code');
                    $instRow->user_id = Auth::id();
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
            } else {
                return view('landing_page')->withErrors(['Email or Password did not match!']);
            }
        } else {
            return redirect('/');
        }
    }

    public function updateOrcreate(Request $request)
    {
        if ($request->method() == 'POST') {

            try {
                $reqData = $request->all();
                var_dump($reqData);exit;
                $reqData['update_user_id'] = Auth::id();
                $updateOrcreateRow = Institute::updateOrCreate(['id' => $request->session()->get('institute_id')], $reqData);
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
