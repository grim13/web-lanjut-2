<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matkul', '\App\Http\Controllers\MatkulController@index')->name('matkul');
Route::get('/matkul/add', '\App\Http\Controllers\MatkulController@add')->name('matkul.add');
Route::post('/matkul/add', '\App\Http\Controllers\MatkulController@addAction')->name('matkul.add.action');
