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
    
    Route::get('/notebook', 'NotebooksController@index');
    Route::get('/notebook/create', 'NotebooksController@create');
    Route::post('/notebook', 'NotebooksController@store');

    #Route::get('/notebook', function () {
    # return view('notebook.notebooks');
    #});

Route::get('/notes', function () {
           return view('notes.notes');
           });

    Route::get('/home/{name}/{fav}', function ($name,$fav) {
        return ($name.' likes '.$fav);
});
