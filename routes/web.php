<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/Customer', \App\Http\Controllers\CustomerController::class);
Route::resource('/Komputer', \App\Http\Controllers\KomputerController::class);
Route::resource('/Pegawai', \App\Http\Controllers\PegawaiController::class);
