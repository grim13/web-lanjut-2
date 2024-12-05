<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/matkul', '\App\Http\Controllers\MatkulController@index');
