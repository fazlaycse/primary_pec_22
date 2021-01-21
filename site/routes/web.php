<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Page View [done by: Ifti@1/6/2021] update by: suzon@19/01/2021*/
Route::get('/', function () {
    return view('landing_page');
});

/*first page by suzon*/
Route::post('first_page', 'FirstPageController@read');
Route::get('first_page', 'FirstPageController@read');

/*save first page*/
Route::post('first_page_save', 'FirstPageController@updateOrcreate');
Route::get('first_page_save', 'FirstPageController@updateOrcreate');
/*first page end*/

/*Second page by suzon*/
Route::post('second_page', 'SecondPageController@read');
Route::get('second_page', 'SecondPageController@read');

/*save Second page*/
Route::post('second_page_save', 'SecondPageController@updateOrcreate');
Route::get('second_page_save', 'SecondPageController@updateOrcreate');
/*Second page end*/

/*Third page by suzon*/
Route::post('third_page', 'ThirdPageController@read');
Route::get('third_page', 'ThirdPageController@read');

/*Third Second page*/
Route::post('third_page_save', 'ThirdPageController@updateOrcreate');
Route::get('third_page_save', 'ThirdPageController@updateOrcreate');
/*Third page end*/

/*fourth page by lemon*/
Route::post('fourth_page', 'FourthPageController@read');
Route::get('fourth_page', 'FourthPageController@read');

/*fourth page Save*/
Route::post('fourth_page_save', 'FourthPageController@updateOrcreate');
Route::get('fourth_page_save', 'FourthPageController@updateOrcreate');
/*fourth page end*/

/*pre_primary_page  by lemon*/
Route::post('pre_primary', 'PrePrimaryController@read');
Route::get('pre_primary', 'PrePrimaryController@read');

/*pre_primary_page Second page*/
Route::post('pre_primary_save', 'PrePrimaryController@updateOrcreate');
Route::get('pre_primary_save', 'PrePrimaryController@updateOrcreate');
/*pre_primary_page  end*/

/*class_one  by lemon*/
Route::post('class_one', 'ClassOneController@read');
Route::get('class_one', 'ClassOneController@read');

/*class_one Second page*/
Route::post('class_one_save', 'ClassOneController@updateOrcreate');
Route::get('class_one_save', 'ClassOneController@updateOrcreate');
/*class_one  end*/


/*class_two  by lemon*/
Route::post('class_two', 'ClassTwoController@read');
Route::get('class_two', 'ClassTwoController@read');

/*class_two Second page*/
Route::post('class_two_save', 'ClassTwoController@updateOrcreate');
Route::get('class_two_save', 'ClassTwoController@updateOrcreate');
/*class_two  end*/

/*class_three  by lemon*/
Route::post('class_three', 'ClassThreeController@read');
Route::get('class_three', 'ClassThreeController@read');

/*class_three Second page*/
Route::post('class_three_save', 'ClassThreeController@updateOrcreate');
Route::get('class_three_save', 'ClassThreeController@updateOrcreate');
/*class_three  end*/

/*class_four  by lemon*/
Route::post('class_four', 'ClassFourController@read');
Route::get('class_four', 'ClassFourController@read');

/*class_four Second page*/
Route::post('class_four_save', 'ClassFourController@updateOrcreate');
Route::get('class_four_save', 'ClassFourController@updateOrcreate');
/*class_four  end*/

/*class_five  by lemon*/
Route::post('class_five', 'ClassFiveController@read');
Route::get('class_five', 'ClassFiveController@read');

/*class_five Second page*/
Route::post('class_five_save', 'ClassFiveController@updateOrcreate');
Route::get('class_five_save', 'ClassFiveController@updateOrcreate');
/*class_five  end*/

/*class_six  by lemon*/
Route::post('class_six', 'ClassSixController@read');
Route::get('class_six', 'ClassSixController@read');

/*class_six Second page*/
Route::post('class_six_save', 'ClassSixController@updateOrcreate');
Route::get('class_six_save', 'ClassSixController@updateOrcreate');
/*class_six  end*/


/*teacher_info page by lemon*/
Route::post('teacher_info', 'TeacherInfosController@read');
Route::get('teacher_info', 'TeacherInfosController@read');

/*teacher_info Second page*/
Route::post('teacher_info_page_save', 'TeacherInfosController@updateOrcreate');
Route::get('teacher_info_page_save', 'TeacherInfosController@updateOrcreate');
/*teacher_info page end*/

/*class controller  [done by : suzon@1/6/2021*/
Route::get('classes/', 'ClassesController@index');

Route::get('classes/create', 'ClassesController@create');
Route::post('classes/create', 'ClassesController@create');

Route::get('classes/read', 'ClassesController@read');

Route::get('classes/update', 'ClassesController@update');
Route::post('classes/update', 'ClassesController@update');

Route::post('classes/delete', 'ClassesController@delete');
Route::get('classes/delete', 'ClassesController@delete');

/*class controller*/
/*institute controller by lemon*/
Route::post('instituteadd', 'InstituteController@create');
Route::get('instituteadd', 'InstituteController@create');
/*InstituteSummariesController controller by lemon*/
Route::post('institute_summaries_add', 'InstituteSummariesController@create');
Route::get('institute_summaries_add', 'InstituteSummariesController@create');
/*GeneralInfosController controller by lemon*/
Route::post('general_infos_add', 'GeneralInfosController@create');
Route::get('general_infos_add', 'GeneralInfosController@create');

/*GeneralInfosController controller by lemon*/
Route::post('buildings_add', 'BuildingsController@create');
Route::get('buildings_add', 'BuildingsController@create');
//Route::get('classes/delete', 'ClassesController@delete');
