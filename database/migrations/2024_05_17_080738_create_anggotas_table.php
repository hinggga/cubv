<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->string('No_CIF')->unique();
            $table->char('No_Alt')->nullable();
            $table->string('Nama_Anggota', 100);
            $table->string('No_HP', 16)->nullable();;
            $table->text('Jenis_Pekerjaan', 100)->nullable();
            $table->string('Status_CIF')->nullable();;
            $table->string('No_KTP')->nullable();;
            $table->string('No_NPWP')->nullable();
            $table->string('Email')->nullable();
            $table->string('Tempat_Lahir')->nullable();;
            $table->date('Tgl_Lahir')->nullable();;
            $table->string('Agama')->nullable();;
            $table->string('Status_Kawin')->nullable();
            $table->string('Pendidikan')->nullable();
            $table->string('Etnis')->nullable();
            $table->string('Nama_Panggilan', 100)->nullable();
            $table->string('Umur')->nullable();
            $table->string('RT_KTP')->nullable();
            $table->string('RW_KTP', 100)->nullable();
            $table->string('Kelurahan_KTP', 100)->nullable();
            $table->string('Kecamatan_KTP', 100)->nullable();
            $table->string('Kota_KTP', 100)->nullable();
            $table->string('Provinsi_KTP')->nullable();
            $table->string('Alamat_Domisili', 100)->nullable();
            $table->string('Kelurahan_Domisili', 100)->nullable();
            $table->string('Kecamatan_Domisili', 100)->nullable();
            $table->string('Kota_Domisili', 100)->nullable();
            $table->string('Provinsi_Domisili', 100)->nullable();
            $table->string('Kodepos_Domisili', 100)->nullable();
            $table->string('Nama_Ibu_Kandung', 100)->nullable();
            $table->string('Nama_Ahli_Waris_1', 100)->nullable();
            $table->string('Nama_Ahli_Waris_2', 100)->nullable();
            $table->string('Nama_Ahli_Waris_3', 100)->nullable();
            $table->string('Jenis_Kelamin', 100)->nullable();
            $table->string('Alamat', 255)->nullable();
            $table->string('Jenis_Nasabah')->nullable();
            $table->string('Jenis_Anggota', 100)->nullable();
            $table->string('Upload_Dokumen', 100)->nullable();
            $table->string('Cabang', 100)->nullable();
            $table->date('Tanggal_Pembukaan')->nullable();
            $table->string('Tujuan_Pembukaan', 100)->nullable();
            $table->string('Kategori_Pinjaman', 100)->nullable();
            $table->string('Total_Penghasilan_Perbulan', 100)->nullable();
            $table->string('Officer', 100)->nullable();
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
