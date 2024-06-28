<?php

namespace App\Imports;

use App\Models\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;

class AnggotaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Anggota([
            //
            'No_CIF' => $row[0],
            'No_Alt'=> $row[1],
            'Nama_Anggota'=> $row[2],
            'No_HP'=> $row[3],
            'Jenis_Pekerjaan'=> $row[4], 
            'Status_CIF'=> $row[5],
            'No_KTP'=> $row[6],
            'No_NPWP'=> $row[7],
            'Email'=> $row[8],
            'Tempat_Lahir' => $row[9],
            'Tgl_Lahir'=> $row[10],
            'Agama'=> $row[11],
            'Status_Kawin'=> $row[12],
            'Pendidikan'=> $row[13],
            'Etnis'=> $row[14],
            'Nama_Panggilan'=> $row[15],
            'Umur'=> $row[16],
            'RT_KTP'=> $row[17],
            'RW_KTP'=> $row[18],
            'Kelurahan_KTP'=> $row[19],
            'Kecamatan_KTP'=> $row[20],
            'Kota_KTP'=> $row[21],
            'Provinsi_KTP'=> $row[22],
            'Alamat_Domisili'=> $row[23],
            'Kelurahan_Domisili'=> $row[24],
            'Kecamatan_Domisili'=> $row[25],
            'Kota_Domisili'=> $row[26],
            'Provinsi_Domisili'=> $row[27],
            'Kodepos_Domisili'=> $row[28],
            'Nama_Ibu_Kandung'=> $row[29],
            'Nama_Ahli_Waris_1'=> $row[30],
            'Nama_Ahli_Waris_2'=> $row[31],
            'Nama_Ahli_Waris_3'=> $row[32],
            'Jenis_Kelamin'=> $row[33],
            'Alamat'=> $row[34],
            'Jenis_Nasabah'=> $row[35],
            'Jenis_Anggota'=> $row[36],
            'Upload_Dokumen'=> $row[37],
            'Cabang'=> $row[38],
            'Tanggal_Pembukaan'=> $row[39],
            'Tujuan_Pembukaan'=> $row[40], 
            'Kategori_Pinjaman'=> $row[41], 
            'Total_Penghasilan_Perbulan'=> $row[42], 
            'Officer'=> $row[43], 
           
        ]);
    }
}
