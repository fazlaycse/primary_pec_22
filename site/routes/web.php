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

/*fourth Second page*/
Route::post('fourth_page_save', 'FourthPageController@updateOrcreate');
Route::get('fourth_page_save', 'FourthPageController@updateOrcreate');
/*fourth page end*/

Route::get('/pre_primary', function () {
    return view('pre_primary');
});
Route::get('/class_one', function () {
    return view('class_one');
});
Route::get('/class_two', function () {
    return view('class_two');
});
Route::get('/class_three', function () {
    return view('class_three');
});
Route::get('/class_four', function () {
    return view('class_four');
});
Route::get('/class_five', function () {
    return view('class_five');
});
Route::get('/class_six', function () {
    return view('class_six');
});
Route::get('/teacher_info', function () {
    return view('teacher_info');
});
/*Page View:end*/

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
