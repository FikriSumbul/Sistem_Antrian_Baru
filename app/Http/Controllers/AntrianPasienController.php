<?php

namespace App\Http\Controllers;

use App\Models\AntrianPasien;
use Illuminate\Http\Request;

class AntrianPasienController extends Controller
{
    /**
     * Menampilkan daftar antrian pasien.
     */
    public function antrianPasien()
    {
        // Mengambil semua data antrian pasien yang belum selesai
        $antrianPasien = AntrianPasien::where('status', '!=', 'Selesai')
        ->orderBy('waktu_antrian', 'asc')
        ->get();

        // Ambil pasien dengan status "Dipanggil"
        $pasienDipanggil = AntrianPasien::where('status', 'Dipanggil')->first();

        return view('halamanClient', compact('antrianPasien', 'pasienDipanggil'));
    }
}
