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
Route::resource('institute', 'InstituteController');
