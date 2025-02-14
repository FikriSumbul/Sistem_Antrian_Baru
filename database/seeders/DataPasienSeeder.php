<?php

namespace Database\Seeders;

// use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_pasien')->insert([
            'nomor_rm' => '00167233',
            'nama_pasien' => 'Zacky Ilham',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00000002',
            'nama_pasien' => 'Radhi Indrawan',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00165126',
            'nama_pasien' => 'Awaludin',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00147653',
            'nama_pasien' => 'Rapi Duruk',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00168129',
            'nama_pasien' => 'M. Khadir. B',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00168271',
            'nama_pasien' => 'Muhammad Fikri Maulana',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00167273',
            'nama_pasien' => 'Muh. Alif Al Qadri',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00123456',
            'nama_pasien' => 'Ahmad Fadillah',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00234567',
            'nama_pasien' => 'Budi Santoso',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00345678',
            'nama_pasien' => 'Cindy Rahmawati',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00456789',
            'nama_pasien' => 'Daniel Pratama',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00567890',
            'nama_pasien' => 'Eka Saputra',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00678901',
            'nama_pasien' => 'Farah Nabila',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00789012',
            'nama_pasien' => 'Gunawan Prasetyo',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);

        DB::table('data_pasien')->insert([
            'nomor_rm' => '00890123',
            'nama_pasien' => 'Hesti Amelia',
            'nama_dokter' => 'dr. Muhammad Hafizh Alfarabi',
            'asal_pasien' => 'Poli Mata 3',
        ]);
    }
}
