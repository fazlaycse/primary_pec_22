<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\General_infos;
use App\Curriculums;
use App\Special_std_facilities;
use Session;
use App\Http\Controllers\CurriculumsController;
class GeneralInfosController extends Controller
{
    public function index(Request $request){
        return redirect()->action('CurriculumsController@index');
    }
    public  function create(Request $request){
        ini_set('post_max_size','2000000M');
        $request->session()->put('institute_id', '6');
        $inst_id = $request->session()->get('institute_id');
        //print_r($inst_id); die;
        //var_dump($request->all());exit;

        if ($request->method() == 'POST') {
            $table = new General_infos();
            $table->acdmic_function_yn = $request->acdmic_function_yn;
            $table->pprimary_exist_yn = $request->pprimary_exist_yn;
            $table->school_grade = $request->school_grade;
            $table->safe_water_yn = $request->safe_water_yn;
            $table->blding_own_land_yn = $request->blding_own_land_yn;
            $table->cycln_shelter_yn = $request->cycln_shelter_yn;
            $table->reg_year = $request->reg_year;
            $table->establishment_date = $request->establishment_date;
            $table->nationalisation_date = $request->nationalisation_date;
            $table->electricity_yn = $request->electricity_yn;
            $table->sntz_facility_yn = $request->sntz_facility_yn;
            $table->mltpl_inst_cmps_yn = $request->mltpl_inst_cmps_yn;
            $table->learning_media = $request->learning_media;
            $table->wash_block = $request->wash_block;
            $table->shaheed_minar_yn = $request->shaheed_minar_yn;
            $table->shift_number = $request->shift_number;
            $table->toilet_yn = $request->toilet_yn;
            $table->boundary_wall_yn = $request->boundary_wall_yn;
            $table->disable_student_toilet_yn = $request->disable_student_toilet_yn;
            $table->year=date('Y');
            $table->institute_id=$inst_id;
            $table1 = new Curriculums();
            $table1->preprimary_yn = $request->preprimary_yn;
            $table1->class_1_yn = $request->class_1_yn;
            $table1->class_2_yn = $request->class_2_yn;
            $table1->class_3_yn = $request->class_3_yn;
            $table1->class_4_yn = $request->class_4_yn;
            $table1->class_5_yn = $request->class_5_yn;
            $table1->class_6_yn = $request->class_6_yn;
            $table1->class_7_yn = $request->class_7_yn;
            $table1->class_8_yn = $request->class_8_yn;
            $table1->year=date('Y');
            $table1->institute_id=$inst_id;
            $table2 = new Special_std_facilities();
            $table2->ramp_yn = $request->ramp_yn;
            $table2->spc_washblock_yn = $request->spc_washblock_yn;
            $table2->wheel_chair_yn = $request->wheel_chair_yn;
            $table2->cratch_yn = $request->cratch_yn;
            $table2->clr_contrast_yn = $request->clr_contrast_yn;
            $table2->daisy_book_yn = $request->daisy_book_yn;
            $table2->brail_book_yn = $request->brail_book_yn;
            $table2->sign_lang_tutor_yn = $request->sign_lang_tutor_yn;
            $table2->sign_lang_manual_yn = $request->sign_lang_manual_yn;
            $table2->silent_envr_yn = $request->silent_envr_yn;
            $table2->hearing_aid_yn = $request->hearing_aid_yn;
            $table2->year=date('Y');
            $table2->institute_id=$inst_id;
            try {
               // print_r($_POST);die;
                $table->save(); // returns false
                $table1->save(); // returns false
                $table2->save(); // returns false
                Session::flash('message', 'Data Saved Successfully!');
                return redirect('fourth_page');
            } catch (\Exception $e) {
                // do task when error
                echo $e->getMessage();
                exit();
                Session::flash('message', 'Something went wrong!');
                return redirect('/third_page');
            }
        }
    }
}
