@extends('dashboard')
@section('title','Update Anggota')
@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"> --}}
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
@endsection
@section('welcome','Update Anggota')
@section('halaman','Update Anggota')
@section('content')


<script src="{{asset('js/jquery.mask.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
            $('.rupiah').mask('0,00', {reverse: true}); 
  
        });
</script>

<div >
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Detail Anggota</h4>
                </div>
                @if (session ('update'))
                <script>
                    Swal.fire({
                            title: "Update Data Anggota!",
                            text:  "{{session('update')}}",
                            icon: "success"
                            });
                </script>
             @endif
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form" action="{{url('update', $data)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">No CIF
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text"  name="No_CIF" value="{{ old('No_CIF',$data->No_CIF)}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">No Alt
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text"  name="No_Alt" value="{{ old('No_Alt',$data->No_Alt)}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Nama Anggota <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Anggota" value="{{old('Nama_Anggota',$data->Nama_Anggota)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-password">No HP
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="No_HP" placeholder="" value="{{old('No_HP',$data->No_HP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Jenis Pekerjaan<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Jenis_Pekerjaan" value="{{old('Jenis_Pekerjaan',$data->Jenis_Pekerjaan)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Status CIF<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Status_CIF"  value="{{old('Status_CIF',$data->Status_CIF)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Nomor KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="No_KTP"  value="{{old('No_KTP',$data->No_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Nomor NPWP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="No_NPWP" placeholder="Kosong.."   value="{{old('No_NPWP',$data->No_NPWP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Email<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Email" placeholder="Kosong .."  value="{{old('Email',$data->Email)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Tempat Lahir<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Tempat_Lahir"   value="{{old('Tempat_Lahir',$data->Tempat_Lahir)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Tgl_Lahir"  value="{{old('Tgl_Lahir',$data->Tgl_Lahir)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Agama<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Agama"  value="{{old('Agama',$data->Agama)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Status Kawin<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Status_Kawin"  value="{{old('Status_Kawin',$data->Status_Kawin)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Pendidikan<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Pendidikan"  value="{{old('Pendidikan',$data->Pendidikan)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Etnis<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Etnis"  value="{{old('Etnis',$data->Etnis)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Nama Panggilan<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Panggilan"  value="{{old('Nama_Panggilan',$data->Nama_Panggilan)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Umur<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Umur"  value="{{old('Umur',$data->Umur)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">RT KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="RT_KTP"  value="{{old('RT_KTP',$data->RT_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">RW KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="RW_KTP"  value="{{old('RW_KTP',$data->RW_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Kelurahan KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kelurahan_KTP"  value="{{old('Kelurahan_KTP',$data->Kelurahan_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Kecamatan KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kecamatan_KTP"  value="{{old('Kecamatan_KTP',$data->Kecamatan_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Kota KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kota_KTP"  value="{{old('Kota_KTP',$data->Kota_KTP)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Provinsi KTP<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Provinsi_KTP"  value="{{old('Provinsi_KTP',$data->Provinsi_KTP)}}">
                                        </div>
                                    </div>
                                    
                                </div>
                               
                                <div class="col-xl-6">
                                    
                                    {{-- <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Best Skill
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="val-skill" name="val-skill">
                                                <option value="">Please select</option>
                                                <option value="html">HTML</option>
                                                <option value="css">CSS</option>
                                                <option value="javascript">JavaScript</option>
                                                <option value="angular">Angular</option>
                                                <option value="angular">React</option>
                                                <option value="vuejs">Vue.js</option>
                                                <option value="ruby">Ruby</option>
                                                <option value="php">PHP</option>
                                                <option value="asp">ASP.NET</option>
                                                <option value="python">Python</option>
                                                <option value="mysql">MySQL</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Alamat Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            {{-- <input type="text" class="form-control" id="" name="" value="{{$data->Alamat_Domisili}}"> --}}
                                            <textarea class="form-control" id="val-suggestions" name="Alamat_Domisili" rows="5" placeholder="">{{old('Alamat_Domisili',$data->Alamat_Domisili)}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-website">Kelurahan Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-website" name="Kelurahan_Domisili" value="{{old('Kelurahan_Domisili',$data->Kelurahan_Domisili)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-phoneus">Kecamatan Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-phoneus" name="Kecamatan_Domisili" value="{{old('Kecamatan_Domisili',$data->Kecamatan_Domisili)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Kota Domisili <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kota_Domisili" value="{{$data->Kota_Domisili}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-number">Provinsi Domisili <span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Provinsi_Domisili" value="{{$data->Provinsi_Domisili}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Kodepos Domisili
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kodepos_Domisili" value="{{$data->Kodepos_Domisili}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Nama Ibu Kandung
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Ibu_Kandung" value="{{$data->Nama_Ibu_Kandung}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Nama Ahli Waris 1
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Ahli_Waris_1" value="{{$data->Nama_Ahli_Waris_1}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Nama Ahli Waris 2
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Ahli_Waris_2" value="{{$data->Nama_Ahli_Waris_2}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Nama Ahli Waris 3
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Nama_Ahli_Waris_3" placeholder="Kosong.."  value="{{$data->Nama_Ahli_Waris_3}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Jenis Kelamin
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Jenis_Kelamin" value="{{$data->Jenis_Kelamin}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Alamat
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Alamat" value="{{old('Alamat',$data->Alamat)}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Jenis Nasabah
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Jenis_Nasabah" value="{{$data->Jenis_Nasabah}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Jenis Anggota
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Jenis_Anggota" value="{{$data->Jenis_Anggota}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Upload Anggota
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Upload_Dokumen" value="{{$data->Upload_Dokumen}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Cabang
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Cabang" value="{{$data->Cabang}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Tanggal Pembukaan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Tanggal_Pembukaan" value="{{$data->Tanggal_Pembukaan}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Tujuan Pembukaan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Tujuan_Pembukaan" value="{{$data->Tujuan_Pembukaan}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Kategori Pinjaman
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Kategori_Pinjaman" value="{{$data->Kategori_Pinjaman}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Total Penghasilan /Bulan
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Total_Penghasilan_Perbulan" value="{{$data->Total_Penghasilan_Perbulan}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Officer
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="Officer" value="{{$data->Officer}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">Tanggal Data di Input
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" name="created_at" value="{{$data->created_at}}">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="">
                                            <span class="text-danger"></span>
                                        </label>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                              
                                </div>
                                
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Detail Simpanan Anggota (Saldo Akhir)</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                  
                            
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan Pokok
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->simpananPokok->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan Wajib
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->simpanawajibku->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan Sapala
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->sapalaku->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan Pahar
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->pahar->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan Batuah
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->batuah->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Simpanan paramu
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="{{$data->paramu->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                </div>
                               

                                <div class="col-xl-6">
                                    
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Simpanan Siraya
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="{{$data->siraya->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Simpanan Langko
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="{{$data->langko->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Simpanan Bahata
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="{{$data->bahata->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Simpanan Topokng
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="{{$data->topokng->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Simpanan Banih
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="{{$data->banih->Saldo ?? 'KOSONG'}}" aria-label="Disabled input example" disabled readonly>
                                               
                                            </div>
                                        </div>
                                   
                                   
                                   
                              

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Detail Pinjaman Anggota (Saldo Akhir)</h4>
                </div>
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                   
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Bele
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Paket
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Basaroh
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Ramin
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Krete
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="col-xl-6">
                                   
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Gawe
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Pande
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Babore
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Pakakas
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Plesir
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pinjaman Balale'
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>
                                               
                                            </div>
                                        </div>
                                   
                                   
                                   
                               
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
    </div> 
</div>
@endsection