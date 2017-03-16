<?php

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
use App\er_ntra;
use App\er_ntras;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{ne_name}', 'TaskController@show');

/*
Route::get('/tasks/{task}', function ($fe_name) {
    $task = er_ntra::where('fe_name',$fe_name)->get();
    dd($task);
    return view('welcome');
});*/
