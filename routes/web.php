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
    Route::get('/biodata/edit-riset', function(){
        return view('Profil.Biodata.edit');
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
    Route::get('/sertifikasi', function(){
        return view('Portofolio.Sertifikasi.index');
    });
});

Route::prefix('qinerja')->group(function () {
    Route::get('', function(){
        return view('Qinerja.index');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('', function(){
        return view('Admin.index');
    });
    Route::prefix('data-pegawai')->group(function () {
        Route::get('', function(){
            return view('Admin.Data-Pegawai.index');
        });
        Route::get('/tambah', function(){
            return view('Admin.Data-Pegawai.create');
        });
        Route::get('/added', function(){
            return view('Admin.Data-Pegawai.index-added');
        });
    });
    Route::prefix('data-master')->group(function () {
        Route::get('', function(){
            return view('Admin.Data-Master.index');
        });
        Route::get('/status-keaktifan', function(){
            return view('Admin.Data-Master.Status-Keaktifan.index');
        });
        Route::get('/status-keaktifan/deleted', function(){
            return view('Admin.Data-Master.Status-Keaktifan.index-deleted');
        });
        Route::get('/status-keaktifan', function(){
            return view('Admin.Data-Master.Status-Keaktifan.index');
        });
        Route::get('/jenis-pegawai', function(){
            return view('Admin.Data-Master.Jenis-Pegawai.index');
        });
        Route::get('/jenis-pegawai/added', function(){
            return view('Admin.Data-Master.Jenis-Pegawai.index-added');
        });
    });
    Route::prefix('verifikasi')->group(function () {
        Route::get('', function(){
            return view('Admin.Verifikasi.index');
        });
        Route::get('/sertifikasi', function(){
            return view('Admin.Verifikasi.Sertifikasi.index');
        });
        Route::get('/sertifikasi/detail', function(){
            return view('Admin.Verifikasi.Sertifikasi.detail');
        });
        Route::get('/sertifikasi/detail-setuju', function(){
            return view('Admin.Verifikasi.Sertifikasi.detail-setuju');
        });
    });
    Route::prefix('qinerja')->group(function () {
        Route::get('', function(){
            return view('Admin.Qinerja.index');
        });
        Route::get('/monitoring-dosen', function(){
            return view('Admin.Qinerja.Monitoring.dosen');
        });
        Route::get('/monitoring-tendik', function(){
            return view('Admin.Qinerja.Monitoring.tendik');
        });
        Route::get('/monitoring-tendik-perilaku', function(){
            return view('Admin.Qinerja.Monitoring.tendik-perilaku');
        });
        Route::get('/monitoring-tendik-rintu', function(){
            return view('Admin.Qinerja.Monitoring.tendik-rintu');
        });
        Route::get('/atur-jadwal', function(){
            return view('Admin.Qinerja.Pengaturan.jadwal');
        });
        Route::get('/atur-jadwal-added', function(){
            return view('Admin.Qinerja.Pengaturan.jadwal-added');
        });
        Route::get('/atur-penilai', function(){
            return view('Admin.Qinerja.Pengaturan.penilai');
        });
        Route::get('/atur-penilai/detail', function(){
            return view('Admin.Qinerja.Pengaturan.detail');
        });
        Route::get('/kualitas-kerja', function(){
            return view('Admin.Qinerja.Laporan.kualitas-kerja');
        });
        Route::get('/kualitas-kerja-added', function(){
            return view('Admin.Qinerja.Laporan.kualitas-kerja-added');
        });
        Route::get('/rekap-tendik', function(){
            return view('Admin.Qinerja.Laporan.rekap-tendik');
        });
    });
});
