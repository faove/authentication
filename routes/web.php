<?php


Route::get('/', function () {
    return view('welcome');
});
//->middleware('auth.basic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
