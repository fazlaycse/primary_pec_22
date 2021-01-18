<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use Session;

class ClassesController extends Controller
{
    public function index()
    {
        return view('classes.index');
    }

    public function create(Request $request)
    {
        if ($request->method() == 'POST') {
            $name = $request->input('name');
            $table = new Classes();
            $table->NAME = $name;
            try {
                $table->save(); // returns false
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('classes/create');
            } catch (\Exception $e) {
                // do task when error
//              echo $e->getMessage();   // insert query
                Session::flash('message', 'Something went wrong!');

            }
        }

        return view('classes.create');
    }

    public function read()
    {
        $getDataFromTable = Classes::all();
        return view('classes.read')->with(compact('getDataFromTable'));
    }

    public function update(Request $request)
    {
        if ($request->method() == 'POST') {
            $id = $request->input('id');
            $name = $request->input('name');
            $getRow = Classes::find($id);
            $getRow->name = $name;
            try {
                $getRow->save(); // returns false
                Session::flash('message', 'Data Updated Successfully!');
                return redirect('classes/read');
            } catch (\Exception $e) {
                // do task when error
//              echo $e->getMessage();   // insert query
                Session::flash('message', 'Something went wrong!');
            }
        }
        $getRow = Classes::where('id', $request->input('id'))->get();
        return view('classes.update')->with(compact('getRow'));
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        try {
            $customer = Classes::findOrFail($id);
        } catch (\Exception $exception) {
            Session::flash('message', 'No record found to delete!');
            return redirect('classes/read');
        }

        if (Classes::destroy($id)) {
            Session::flash('message', 'Data Deleted Successfully!');
            return redirect('classes/read');
        } else {
            Session::flash('message', 'Something went wrong!');
            return redirect('classes/read');
        }

    }
}
