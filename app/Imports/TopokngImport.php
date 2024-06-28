<?php

namespace App\Imports;

use App\Models\TopokngModel;
use Maatwebsite\Excel\Concerns\ToModel;

class TopokngImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TopokngModel([
            'Cabang' => $row[0],
            'ID_Produk' => $row[1],
            'Produk' => $row[2],
            'No_Rekening' => $row[3],
            'No_HP' => $row[4],
            'No_Alt' => $row[5],
            'Nama_Anggota' => $row[6],
            'Tgl_Buka_Rekening' => $row[7],
            'No_CIF' => $row[8],
            'Status' => $row[9],
            'Tujuan_Pembukaan_Rekening' => $row[10],
            'Cetak_Buku_Tabungan' => $row[11],
            'Suku_Bunga' => $row[12],
            'Auto_Debet' => $row[13],
            'Joint_Account' => $row[14],
            'Jumlah_Auto_Debet' => $row[15],
            'Officer' => $row[16],
            'Currency' => $row[17],
            'Saldo' => $row[18],
            'Alamat_Domisili' => $row[19],
            'Kota_Domisili' => $row[20],
            'Provinsi_Domisili' => $row[21],
            'Kodepos_domisili' => $row[22],
        ]);
    }
}
