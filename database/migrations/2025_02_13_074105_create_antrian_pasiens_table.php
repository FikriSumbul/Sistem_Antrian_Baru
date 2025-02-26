<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('antrian_pasiens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomor_rm');
            $table->string('nama_pasien');
            $table->string('nama_dokter');
            $table->string('asal_pasien');
            $table->timestamp('waktu_antrian')->default(now());
            $table->string('status')->default('Menunggu'); // Menunggu, Dipanggil, Selesai
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrian_pasiens');
    }
};
