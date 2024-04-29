<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', function () {
    return view('menukaryawan');
});

Route::get('/addmoviekar', function () {
    return view('addmoviekar');
});

Route::get('/addoffer', function () {
    return view('addoffer');
});

Route::get('/historytrans', function () {
    return view('historytrans');
});