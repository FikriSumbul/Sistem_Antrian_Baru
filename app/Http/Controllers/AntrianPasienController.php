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
        // Ambil 10 pasien pertama dalam antrian yang belum selesai
        $antrianPasien = AntrianPasien::where('status', '!=', 'Selesai')
            ->orderBy('waktu_antrian', 'asc')
            ->take(10) // Ambil 10 data pertama
            ->get();

        // Ambil pasien dengan status "Dipanggil"
        $pasienDipanggil = AntrianPasien::where('status', 'Dipanggil')->first();

        return view('halamanClient', compact('antrianPasien', 'pasienDipanggil'));
    }
}
