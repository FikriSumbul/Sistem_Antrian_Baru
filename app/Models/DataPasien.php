<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    /** @use HasFactory<\Database\Factories\DataPasienFactory> */
    use HasFactory;
    protected $table = 'data_pasien';
    protected $fillable = ['nomor_rm', 'nama_pasien', 'nama_dokter', 'asal_pasien'];
}
