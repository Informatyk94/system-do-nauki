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

Route::get('/', function () {
    return view('index');
});


Route::group(['middleware' => ['web']], function(){
    Route::post('/addproblem', 'AddProblemController@addproblem');
    Route::get('/panel', 'PanelController@panel');
    Route::get('/research', 'ResearchController@research');
    Route::get('/show/{id}', 'ResearchController@show');
    Route::get('/addproblemform', 'AddProblemController@addproblemform');
});
