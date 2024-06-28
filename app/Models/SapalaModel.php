<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SapalaModel extends Model
{
    use HasFactory;
   
    protected $table = 'sapala';
    public $timestamps = true;
    protected $primaryKey = 'No_Rekening';
    protected $fillable = [  
        'Cabang',
        'ID_Produk',
        'Produk',
        'No_Rekening',
        'No_HP',
        'No_Alt',
        'Nama_Anggota',
        'Tgl_Buka_Rekening',
        'No_CIF',
        'Status',
        'Tujuan_Pembukaan_Rekening',
        'Cetak_Buku_Tabungan',
        'Suku_Bunga',
        'Auto_Debet',
        'Joint_Account',
        'Jumlah_Auto_Debet',
        'Officer',
        'Currency',
        'Saldo',
        'Alamat_Domisili',
        'Kota_Domisili',
        'Provinsi_Domisili',
        'Kodepos_domisili',
        ];
}
