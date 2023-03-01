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
    echo "Selamat Datang";
});

Route::get('/about', function () { 
    echo "2141720060 - Maidy Putri Joshi";
});

Route::get('/articles/1', function () { 
    echo "Halaman Artikel 1";
});

Route::get('/articles/2', function () { 
    echo "Halaman Artikel 2";
});

