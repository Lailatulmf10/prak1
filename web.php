<?php

use Illuminate\Support\Facades\Route;

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
    echo 'Selamat Datang';
});
Route::get('/about', function () { 
    echo " Nama     : Lailatul Mufida <br>
           NIM      : 2031710094";
});
Route::get('/articles/1', function () {
    echo 'Halaman article dengan id 1 ';
});
Route::get('/articles/2', function () {
    echo 'Halaman article dengan id 2 ';
});
