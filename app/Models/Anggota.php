<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'No_CIF';
    protected $fillable = [  
        'No_CIF',
        'No_Alt',
        'Nama_Anggota',
        'No_HP',
        'Jenis_Pekerjaan', 
        'Status_CIF',
        'No_KTP',
        'No_NPWP',
        'Email', 17,
        'Tempat_Lahir',
        'Tgl_Lahir',
        'Agama',
        'Status_Kawin',
        'Pendidikan',
        'Etnis',
        'Nama_Panggilan',
        'Umur',
        'RT_KTP',
        'RW_KTP',
        'Kelurahan_KTP',
        'Kecamatan_KTP',
        'Kota_KTP',
        'Provinsi_KTP',
        'Alamat_Domisili',
        'Kelurahan_Domisili',
        'Kecamatan_Domisili',
        'Kota_Domisili',
        'Provinsi_Domisili',
        'Kodepos_Domisili',
        'Nama_Ibu_Kandung',
        'Nama_Ahli_Waris_1',
        'Nama_Ahli_Waris_2',
        'Nama_Ahli_Waris_3',
        'Jenis_Kelamin',
        'Alamat',
        'Jenis_Nasabah',
        'Jenis_Anggota',
        'Upload_Dokumen',
        'Cabang',
        'Tanggal_Pembukaan',
        'Tujuan_Pembukaan', 
        'Kategori_Pinjaman', 
        'Total_Penghasilan_Perbulan', 
        'Officer', 
        ];

      
        public function pahar()
        {
            return $this->hasOne('App\Models\PaharModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function simpananPokok()
        {
            return $this->hasOne('App\Models\simpananPokok', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function sapalaku()
        {
            return $this->hasOne('App\Models\sapalaModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function simpanawajibku()
        {
            return $this->hasOne('App\Models\SimpananWajibModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function siraya()
        {
            return $this->hasOne('App\Models\SirayaModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }

        //kedua
        public function bahata()
        {
            return $this->hasOne('App\Models\BahataModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function banih()
        {
            return $this->hasOne('App\Models\BanihModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function langko()
        {
            return $this->hasOne('App\Models\LangkoModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function paramu()
        {
            return $this->hasOne('App\Models\ParamuModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function topokng()
        {
            return $this->hasOne('App\Models\TopokngModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }
        public function batuah()
        {
            return $this->hasOne('App\Models\BatuahModel', 'No_CIF', 'No_CIF')->latestOfMany('created_at');
        }

    }
