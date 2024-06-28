<?php

namespace App\Http\Controllers;

use App\Exports\AnggotaExport;
use App\Imports\AnggotaImport;
use App\Imports\BahataImport;
use App\Imports\BanihImport;
use App\Imports\BatuahImport;
use App\Imports\LangkoImport;
use App\Imports\PaharImport;
use App\Imports\ParamuImport;
use App\Imports\SapalaImport;
use App\Imports\SimpananPokokImport;
use App\Imports\SimpananWajibImport;
use App\Imports\SirayaImport;
use App\Imports\TopokngImport;
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\LangkoModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PaharModel;
use App\Models\SapalaModel;
use App\Models\SimpananPokok;
use App\Models\SimpananPokokModel;
use App\Models\SimpananWajibModel;
use App\Models\SirayaModel;
use App\Models\User;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();
        $user = User::all();
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
        return view('daftar-anggota', compact('anggota','detailanggota','hitung','test','totalperempuan','totallaki','aktif','tanggal','pokok','sapala','langko','siraya','wajib','pahar','batuah','banih','paramu','topokng','bahata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view ('test',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'No_CIF' => 'required',
            'Nama_Anggota' => ' required',
            'Tempat_Lahir' => 'required',
            'Tgl_Lahir' => 'required',
           

        ], [
            'No_CIF.required' => 'Harus Di Isi',
            'Nama_Anggota.required' => 'Harus Di Isi',
            'Tempat_Lahir.required' => 'Harus Di Isi',
            'Tgl_Lahir.required' => 'Harus Di Isi',
        ]);

        $data = new Anggota();
        $data->No_CIF = $request->No_CIF;
        $data->No_Alt = $request->No_Alt;
        $data->Nama_Anggota= $request->Nama_Anggota;
        $data-> No_HP= $request->No_HP;
        $data->Jenis_Pekerjaan= $request->Jenis_Pekerjaan; 
        $data-> Status_CIF= $request->Status_CIF;
        $data-> No_KTP= $request->No_KTP;
        $data-> No_NPWP= $request->No_NPWP;
        $data-> Email= $request->Email;
        $data-> Tempat_Lahir= $request->Tempat_Lahir;
        $data-> Tgl_Lahir= $request->Tgl_Lahir;
        $data-> Agama= $request->Agama;
        $data->Status_Kawin= $request->Status_Kawin;
        $data->Pendidikan= $request->Pendidikan;
        $data-> Etnis= $request->Etnis;
        $data-> Nama_Panggilan= $request->Nama_Panggilan;
        $data-> Umur= $request->Umur;
        $data-> RT_KTP= $request->RT_KTP;
        $data->RW_KTP= $request->RW_KTP;
        $data->Kelurahan_KTP= $request->Kelurahan_KTP;
        $data->Kecamatan_KTP= $request->Kecamatan_KTP;
        $data-> Kota_KTP= $request->Kota_KTP;
        $data-> Provinsi_KTP = $request->Provinsi_KTP;
        $data->Alamat_Domisili= $request->Alamat_Domisili;
        $data->Kelurahan_Domisili = $request->Kelurahan_Domisili;
        $data->Kecamatan_Domisili = $request->Kecamatan_Domisili;
        $data->Kota_Domisili = $request->Kota_Domisili;
        $data->Provinsi_Domisili= $request->Provinsi_Domisili; 
        $data->Kodepos_Domisili= $request->Kodepos_Domisili;
        $data-> Nama_Ibu_Kandung= $request->Nama_Ibu_Kandung;
        $data-> Nama_Ahli_Waris_1= $request->Nama_Ahli_Waris_1;
        $data-> Nama_Ahli_Waris_2= $request->Nama_Ahli_Waris_2;
        $data-> Nama_Ahli_Waris_3= $request->Nama_Ahli_Waris_3;
        $data-> Jenis_Kelamin= $request->Jenis_Kelamin;
        $data-> Alamat= $request->Alamat;
        $data->Jenis_Nasabah= $request->Jenis_Nasabah;
        $data-> Jenis_Anggota= $request->Jenis_Anggota;
        $data-> Upload_Dokumen = $request->Upload_Dokumen;
        $data->Cabang= $request->Cabang;
        $data-> Tanggal_Pembukaan= $request->Tanggal_Pembukaan;
        $data->Tujuan_Pembukaan= $request->Tujuan_Pembukaan; 
        $data->Kategori_Pinjaman= $request->Kategori_Pinjamans; 
        $data->Total_Penghasilan_Perbulan= $request->Total_Penghasilan_Perbulan; 
        $data->Officer= $request->Officer; 

        $data->save();
        return redirect('daftar-anggota')->with('tambah', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
         
        return view('tambahanggota');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function importexcel(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('DataAnggota',$namafile);
        Excel::import(new AnggotaImport, \public_path('/DataAnggota/'.$namafile));

        return redirect()->back()->with('dataanggota','Data Anggota Berhasil diupload!');
    }
     /**
     * Update the specified resource in storage.
     */
    public function simpananpokokimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('SimpananPokok',$namafile);
        Excel::import(new SimpananPokokImport, \public_path('/SimpananPokok/'.$namafile));

        return redirect()->back()->with('simpananpokok','Data Berhasil diupload Simpannan Pokok');
    }
   
      /**
     * Update the specified resource in storage.
     */
    public function  sapalaimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Sapala',$namafile);
        Excel::import(new SapalaImport, \public_path('/Sapala/'.$namafile));

        return redirect()->back()->with('sapala','Data Berhasil diupload Sapala');
    }

    public function  paharimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Pahar',$namafile);
        Excel::import(new PaharImport, \public_path('/Pahar/'.$namafile));

       
        return redirect()->back()->with('pahar','Data Berhasil diupload Pahar');
    }

    public function  sirayaimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Siraya',$namafile);
        Excel::import(new SirayaImport, \public_path('/Siraya/'.$namafile));

        return redirect()->back()->with('siraya','Data Berhasil diupload Siraya');
    }
    public function  simpananwajibimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Simpanan Wajib',$namafile);
        Excel::import(new SimpananWajibImport, \public_path('/Simpanan Wajib/'.$namafile));

        return redirect()->back()->with('wajib','Data Berhasil diupload Simpanan Wajib');
    }
    public function  langkoimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Langko',$namafile);
        Excel::import(new LangkoImport, \public_path('/Langko/'.$namafile));

        return redirect()->back()->with('langko','Data Berhasil diupload Langko');
    }

    public function  banihimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Simpanan Wajib',$namafile);
        Excel::import(new BanihImport, \public_path('/Simpanan Wajib/'.$namafile));

        return redirect()->back()->with('banih','Data Berhasil diupload Simpanan Wajib');
    }
    public function  batuahimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Langko',$namafile);
        Excel::import(new BatuahImport, \public_path('/Langko/'.$namafile));

        return redirect()->back()->with('batuah','Data Berhasil diupload Langko');
    }

    public function  topokngimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Simpanan Wajib',$namafile);
        Excel::import(new TopokngImport, \public_path('/Simpanan Wajib/'.$namafile));

        return redirect()->back()->with('topokng','Data Berhasil diupload Simpanan Wajib');
    }
    public function  paramuimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Langko',$namafile);
        Excel::import(new ParamuImport, \public_path('/Langko/'.$namafile));

        return redirect()->back()->with('paramu','Data Berhasil diupload Langko');
    }
    public function  bahataimport(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('Simpanan Wajib',$namafile);
        Excel::import(new BahataImport, \public_path('/Simpanan Wajib/'.$namafile));

        return redirect()->back()->with('bahata','Data Berhasil diupload Simpanan Wajib');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function exportexcel()
    {
        return Excel::download(new AnggotaExport, 'DataAnggota.xls');
    }
    
    public function lihatData(string $No_CIF)
    {
        $data = Anggota::all()->find($No_CIF);
        $saldoPahar = PaharModel::all()->first();
        $saldoSimpananPokok = SimpananPokok::all();
        $saldoSapala = SapalaModel::all();
        $saldoSimpananWajib = SimpananWajibModel::all();
        $saldoSiraya = SirayaModel::all();  
        return view('lihatData',compact('data','saldoPahar','saldoSimpananPokok','saldoSapala','saldoSimpananWajib','saldoSiraya'));
    }

    public function editdata(Request $request, $No_CIF)
    {
        $data = Anggota::all()->find($No_CIF);
        $saldoPahar = PaharModel::all()->first();
        $saldoSimpananPokok = SimpananPokok::all();
        $saldoSapala = SapalaModel::all();
        $saldoSimpananWajib = SimpananWajibModel::all();
        $saldoSiraya = SirayaModel::all();  
        return view('editdata',compact('data','saldoPahar','saldoSimpananPokok','saldoSapala','saldoSimpananWajib','saldoSiraya'));
    }

    public function delete(Request $request,$data)
    { 
        $hapus = Anggota::find($data);
        if($hapus){
            $hapus->delete();
        }

        return redirect()->back()->with('delete','Data Berhasil DIHAPUS');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request,$data)
    {       
        $data = Anggota::findorfail($data);
        $data->Nama_Anggota= $request->Nama_Anggota;
        $data-> No_HP= $request->No_HP;
        $data->Jenis_Pekerjaan= $request->Jenis_Pekerjaan; 
        $data-> Status_CIF= $request->Status_CIF;
        $data-> No_KTP= $request->No_KTP;
        $data-> No_NPWP= $request->No_NPWP;
        $data-> Email= $request->Email;
        $data->Tempat_Lahir= $request->Tempat_Lahir;
        $data-> Tgl_Lahir= $request->Tgl_Lahir;
        $data-> Agama= $request->Agama;
        $data->Status_Kawin= $request->Status_Kawin;
        $data->Pendidikan= $request->Pendidikan;
        $data-> Etnis= $request->Etnis;
        $data-> Nama_Panggilan= $request->Nama_Panggilan;
        $data-> Umur= $request->Umur;
        $data-> RT_KTP= $request->RT_KTP;
        $data->RW_KTP= $request->RW_KTP;
        $data->Kelurahan_KTP= $request->Kelurahan_KTP;
        $data->Kecamatan_KTP= $request->Kecamatan_KTP;
        $data-> Kota_KTP= $request->Kota_KTP;
        $data-> Provinsi_KTP = $request->Provinsi_KTP;
        $data->Alamat_Domisili= $request->Alamat_Domisili;
        $data->Kelurahan_Domisili = $request->Kelurahan_Domisili;
        $data->Kecamatan_Domisili = $request->Kecamatan_Domisili;
        $data->Kota_Domisili = $request->Kota_Domisili;
        $data->Provinsi_Domisili= $request->Provinsi_Domisili; 
        $data->Kodepos_Domisili= $request->Kodepos_Domisili;
        $data-> Nama_Ibu_Kandung= $request->Nama_Ibu_Kandung;
        $data-> Nama_Ahli_Waris_1= $request->Nama_Ahli_Waris_1;
        $data-> Nama_Ahli_Waris_2= $request->Nama_Ahli_Waris_2;
        $data-> Nama_Ahli_Waris_3= $request->Nama_Ahli_Waris_3;
        $data-> Jenis_Kelamin= $request->Jenis_Kelamin;
        $data-> Alamat= $request->Alamat;
        $data->Jenis_Nasabah= $request->Jenis_Nasabah;
        $data-> Jenis_Anggota= $request->Jenis_Anggota;
        $data-> Upload_Dokumen = $request->Upload_Dokumen;
        $data->Cabang= $request->Cabang;
        $data-> Tanggal_Pembukaan= $request->Tanggal_Pembukaan;
        $data->Tujuan_Pembukaan= $request->Tujuan_Pembukaan; 
        $data->Kategori_Pinjaman= $request->Kategori_Pinjamans; 
        $data->Total_Penghasilan_Perbulan= $request->Total_Penghasilan_Perbulan; 
        $data->Officer= $request->Officer; 

        $data->update();
        return redirect()->back()->with('update', 'Data Berhasil Di Update');
        
    }

}
