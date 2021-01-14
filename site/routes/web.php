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

/*Page View [done by: Ifti@1/6/2021]*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/first_page', function () {
    return view('first_page');
});
Route::get('/second_page', function () {
    return view('second_page');
});
Route::get('/third_page', function () {
    return view('third_page');
});
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

Route::post('institutteadd', 'InstituteController@create');
Route::get('institutteadd', 'InstituteController@create');
//Route::get('classes/delete', 'ClassesController@delete');
