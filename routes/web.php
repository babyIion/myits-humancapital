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
    return view('Beranda.index');
});

Route::get('/berkas', function(){
    return view('Berkas-Saya.index');
});

Route::prefix('profil')->group(function () {
    Route::get('', function(){
        return view('Profil.index');
    });
    Route::get('/biodata', function(){
        return view('Profil.Biodata.index');
    });
});

Route::prefix('portofolio')->group(function () {
    Route::get('', function(){
        return view('Portofolio.index');
    });
    Route::get('/bahan-ajar', function(){
        return view('Portofolio.Bahan-Ajar.index');
    });
    Route::get('/bahan-ajar/tambah', function(){
        return view('Portofolio.Bahan-Ajar.create');
    });
});
