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
        Schema::create('pahar', function (Blueprint $table) {
            $table->id('id_rekening')->unique();
            $table->string('Cabang')->nullable();
            $table->string('ID_Produk')->nullable();
            $table->string('Produk')->nullable();
            $table->string('No_Rekening')->nullable();
            $table->string('No_HP')->nullable();
            $table->string('No_Alt')->nullable();
            $table->string('Nama_Anggota')->nullable();
            $table->date('Tgl_Buka_Rekening')->nullable();
            $table->string('No_CIF')->index();
            $table->string('Status')->nullable();
            $table->string('Tujuan_Pembukaan_Rekening')->nullable();
            $table->string('Cetak_Buku_Tabungan');
            $table->string('Suku_Bunga')->nullable();
            $table->string('Auto_Debet')->nullable();
            $table->string('Joint_Account')->nullable();
            $table->string('Jumlah_Auto_Debet')->nullable();
            $table->string('Officer')->nullable();
            $table->string('Currency')->nullable();
            $table->string('Saldo')->nullable();
            $table->string('Alamat_Domisili')->nullable();
            $table->string('Kota_Domisili')->nullable();
            $table->string('Provinsi_Domisili')->nullable();
            $table->string('Kodepos_domisili')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pahar');
    }
};
