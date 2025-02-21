<?php

use App\Http\Controllers\AntrianPasienController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\PasienController;
use App\Models\AntrianPasien;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/antrian', [AntrianPasienController::class, 'antrianPasien'])->name('antrian');

// Route::get('/pasien', function () {
//     return view('dataPasien');
// })->name('cari.pasien');

Route::get('/pasien', [DataPasienController::class, 'tampilkanAntrian'])->name('pasien');

Route::post('/cari-pasien', [DataPasienController::class, 'cariPasien'])->name('cari.pasien');

Route::get('/get-antrian', [DataPasienController::class, 'tampilkanAntrian'])->name('tampilkan.antrian');
Route::post('/panggil/{nomor_rm}', [DataPasienController::class, 'panggilPasien'])->name('panggil.pasien');
Route::post('/selesai/{nomor_rm}', [DataPasienController::class, 'selesaiPasien'])->name('selesai.pasien');
Route::post('/reset-antrian', [DataPasienController::class, 'resetAntrian'])->name('reset.antrian');
