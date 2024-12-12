<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matkul', '\App\Http\Controllers\MatkulController@index')->name('matkul');
Route::get('/matkul/add', '\App\Http\Controllers\MatkulController@add')
    ->name('matkul.add');
Route::post('/matkul/add', '\App\Http\Controllers\MatkulController@addAction')
    ->name('matkul.add.action');
Route::get('/matkul/delete/{id}', '\App\Http\Controllers\MatkulController@deleteAction')
    ->name('matkul.add.delte');
Route::get('/matkul/edit/{id}', '\App\Http\Controllers\MatkulController@edit')
    ->name('matkul.edit');
Route::post('/matkul/edit/{id}', '\App\Http\Controllers\MatkulController@editAction')
    ->name('matkul.edit.action');