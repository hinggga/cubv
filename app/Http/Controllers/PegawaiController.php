<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Anggota;

class PegawaiController extends Controller
{
    public function index(){
        $anggota = Anggota::all();
       
        $hitung = Anggota::count();
        $totalperempuan = DB::table('anggotas')->where('Jenis_Kelamin', 'Perempuan')->count();
        $totallaki = DB::table('anggotas')->where('Jenis_Kelamin', 'Laki-Laki')->count();
        $test = DB::table('anggotas')->where('Jenis_Kelamin','Perempuan');
        $aktif = DB::table('anggotas')->where('Status_CIF', 'Aktif')->count();
        $tanggal = DB::table('anggotas')->pluck('created_at')->last();
        $pokok = DB::table('simpananpokok')->pluck('created_at')->last();
        $sapala = DB::table('sapala')->pluck('created_at')->last();
        $langko = DB::table('langko')->pluck('created_at')->last();
        $pahar = DB::table('pahar')->pluck('created_at')->last();
        $wajib = DB::table('simpananwajib')->pluck('created_at')->last();
        $siraya = DB::table('siraya')->pluck('created_at')->last();
        $detailanggota = Anggota::all(); 
        $banih = DB::table('banih')->pluck('created_at')->last();
        $bahata = DB::table('bahata')->pluck('created_at')->last();
        $batuah = DB::table('batuah')->pluck('created_at')->last();
        $topokng = DB::table('topokng')->pluck('created_at')->last();
        $paramu = DB::table('paramu')->pluck('created_at')->last();
        return view('daftar-anggotaPegawai', compact('anggota','detailanggota','hitung','test','totalperempuan','totallaki','aktif','tanggal','pokok','sapala','langko','siraya','wajib','pahar','batuah','banih','paramu','topokng','bahata'));
    }
}
