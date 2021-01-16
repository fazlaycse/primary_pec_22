<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute_summaries;
use Session;

class InstituteSummariesController extends Controller
{
    public function index(){

    }
    public  function create(Request $request){
            $request->session()->put('institute_id', '6');
            $inst_id = $request->session()->get('institute_id');
            //print_r($inst_id); die;
            //var_dump($request->all());exit;

        if ($request->method() == 'POST') {
            $table = new Institute_summaries();
            $table->onu_head_teacher = $request->onu_head_teacher;
            $table->onu_ast_teacher = $request->onu_ast_teacher;
            $table->onu_pprimary_teacher = $request->onu_pprimary_teacher;
            $table->onu_sg = $request->onu_sg;
            $table->att_in_head_teacher = $request->att_in_head_teacher;
            $table->att_in_ast_teacher = $request->att_in_ast_teacher;
            $table->att_in_pprimary_teacher = $request->att_in_pprimary_teacher;
            $table->att_in_sg = $request->att_in_sg;
            $table->att_out_hd_teacher = $request->att_out_hd_teacher;
            $table->att_out_ast_teacher = $request->att_out_ast_teacher;
            $table->att_out_pprimary_teacher = $request->att_out_pprimary_teacher;
            $table->att_out_sg = $request->att_out_sg;
            $table->wk_hd_teacher = $request->wk_hd_teacher;
            $table->wk_ast_teacher = $request->wk_ast_teacher;
            $table->wk_pprimary_teacher = $request->wk_pprimary_teacher;
            $table->working_sg = $request->working_sg;
            $table->prl_hd_teacher = $request->prl_hd_teacher;
            $table->prl_ast_teacher = $request->prl_ast_teacher;
            $table->prl_pprimary_teacher = $request->prl_pprimary_teacher;
            $table->prl_sg = $request->prl_sg;
            $table->dd_hd_teacher = $request->dd_hd_teacher;
            $table->dd_ast_teacher = $request->dd_ast_teacher;
            $table->dd_pprimary_teacher = $request->dd_pprimary_teacher;
            $table->dead_sg = $request->dead_sg;
            $table->building_number = $request->building_number;
            $table->room_number = $request->room_number;
            $table->washblock_number = $request->washblock_number;
            $table->year=date('Y');
            $table->institute_id=$inst_id;
            try {
                $table->save(); // returns false
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('/third_page');
            } catch (\Exception $e) {
                // do task when error
                echo $e->getMessage();
                exit();
                Session::flash('message', 'Something went wrong!');
                return redirect('/second_page');
            }
        }
    }
}
