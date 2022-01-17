<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\View;
//use App\Http\Controllers\WelcomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/space-form','App\Http\Controllers\SpaceController@create_remove_spc_form');
Route::get('/count-word-form','App\Http\Controllers\SpaceController@creat_count_form');
Route::post('remove/space','App\Http\Controllers\SpaceController@removeSpace');
Route::post('words/counts','App\Http\Controllers\SpaceController@wordCount');