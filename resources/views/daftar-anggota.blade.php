@extends('dashboard')
@section('title','Daftar Anggota')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"> --}}
    <script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="assets/js/data"></script> --}}
@endsection
@section('welcome','Daftar Anggota')
@section('halaman','Daftar Anggota')
@section('content')

<div >
   
    <!-- row -->
    <div>
        
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Total Anggota CU Bonaventura </div>
                            <div class="stat-digit">
                                {{$hitung}} Orang</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text"> Perempuan</div>
                            <div class="stat-digit"> {{$totalperempuan}} Orang </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Laki-Laki</div>
                            <div class="stat-digit">  {{$totallaki}} Orang</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-two card-body">
                        <div class="stat-content">
                            <div class="stat-text">Anggota Aktif</div>
                            <div class="stat-digit">  {{$aktif}} Orang</div>
                        </div>
                      
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <div class="row">
           
           @if (session ('dataanggota'))
                        <script>
                            Swal.fire({
                                    title: "Terimakasih!",
                                    text:  "{{session('dataanggota')}}",
                                    icon: "success"
                                    });
                        </script>
                        
             @endif
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h4 >Daftar Anggota</h4>
                        <div class="alert alert-light solid alert-square"><strong>Tanggal terakhir upload :</strong>{{$tanggal}}</div>    
                               
                                        
                        <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button> --}}
                        
                        <!-- Modal 1 -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="importexcel" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="modal fade" id="pokok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Simpanan Pokok</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="simpananpokokimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="pahar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Pahar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="paharimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="sapala" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Sapala</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="sapalaimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="bahata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Bahata</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="bahataimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="langko" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Langko</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="langkoimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="siraya" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Siraya</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="sirayaimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="simpananwajib" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Simpanan Wajib</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="simpananwajibimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="topokng" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Topokng</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="topokngimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="banih" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Banih</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="banihimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="paramu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Paramu</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="paramuimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="batuah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Pilih File Yang Ingin Di Import ke Batuah</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="batuahimport" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                         <input type="file" name="file" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <!-- Modal 2 -->
                                    <div class="modal fade" id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                ...
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Understood</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                    <div class="">
                         <div class="container px-2">     
                            <div class="row gx-5">  
                                <div class="col-xl-6">             
                                <label for=""  class="card-title">Filter Berdasarkan</label>
                                    <select id="filter" class="form-control" style="width:50% ; display:inline;">
                                        <option value="">Tentukan Filter</option>
                                        <option value="3">No Alt</option>
                                        <option value="7">Status CIF</option>
                                        <option value="5">No_HP</option>
                                        <option value="8">No KTP</option>
                                        <option value="9">No NPWP</option>
                                        <option value="10">Email</option>
                                        <option value="11">Tempat Lahir</option>
                                        <option value="12">Tgl_Lahir</option>
                                        <option value="13">Agama</option>
                                        <option value="14">Status_Kawin</option>
                                        <option value="15">Pendidikan</option>
                                        <option value="16">Etnis</option>
                                        <option value="17">Nama_Panggilan</option>
                                        <option value="18">Umur</option>
                                        <option value="19">RT_KTP</option>
                                        <option value="20">RW_KTP</option>
                                        <option value="21">Kelurahan_KTP</option>
                                        <option value="22">Kecamatan_KTP</option>
                                        <option value="23">Kota_KTP</option>
                                        <option value="24">Provinsi_KTP</option>
                                        <option value="25">Alamat_Domisili</option>
                                        <option value="26">Kelurahan_Domisili</option>
                                        <option value="27">Kecamatan_Domisili</option>
                                        <option value="28">Kota_Domisili</option>
                                        <option value="29">Provinsi_Domisili</option>
                                        <option value="30">Kodepos_Domisili</option>
                                        <option value="31">Nama_Ibu_Kandung</option>
                                        <option value="32">Nama_Ahli_Waris_1</option>
                                        <option value="33">Nama_Ahli_Waris_2</option>
                                        <option value="34">Nama_Ahli_Waris_3</option>
                                        <option value="35">Jenis_Kelamin</option>
                                        <option value="36">Alamat</option>
                                        <option value="37">Jenis_Nasabah</option>
                                        <option value="38">Jenis_Anggota</option>
                                        <option value="39">Upload_Dokumen</option>
                                        <option value="40">Cabang</option>
                                        <option value="41">Tanggal_Pembukaan</option>
                                        <option value="42">Tujuan_Pembukaan</option>
                                        <option value="43">Kategori_Pinjaman</option>
                                        <option value="44">Total_Penghasilan_Perbulan</option>
                                        <option value="45">Officer</option>           
                                    </select>
                                </div>
                                <div class="col-4">  
                                   
                                    <input type="text" id="pencarian" placeholder="Ketik disini yaa.." class="form-control" style="display:inline; width:50% ; ">
                                    <a href="daftar-anggota"><button type="button" class="btn btn-outline-secondary">Refresh</button>  </a>
                                </div>
                        
                                <div class="col-xl-6">   
                                         
                                        <button id="importButton" type="button" class="btn btn-rounded btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span
                                                class="btn-icon-left text-success"><i class="fa fa-upload color-success" ></i>
                                            </span>Import 
                                        </button>
                                
                        
                                        <a href="exportexcel"><button  type="button" class="btn btn-rounded btn-warning" data-bs-toggle="modal" data-bs-target="#export"><span
                                        class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                                        </span>Export</button></a>

                                        <button type="button" class="btn btn-rounded btn-info"><span
                                            class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                        </span><a href="{{ url('tambahanggota') }}">Tambah Anggota</a></button>
                                 </div>
                            
                         </div>
                     </div>
                   
                    <div class="card-body">
                        {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        
                         </div> --}}
                       
                            <table id="example"  class="display" class="table table table-striped center" >
                                <thead class="table-primary">
                                    <tr >
                                        <th>
                                            <div class="icheck-primary d-inline ml-2">
                                                <input wire:model="selectedRows" type="checkbox" value="" name="todo2" id="todoCheck2">
                                                <label for="todoCheck2"></label>
                                            </div>
                                        </th>
                                        <th class="card-title"><h4 class="">#</h4></th>
                                        <th class="card-title"><h4 class="">No CIF</h4></th>
                                        <th class="card-title"><h4>No_Alt</h4></th>
                                        <th class="card-title"><h4>Nama Anggota</h4></th>
                                        <th class="card-title"><h4>No_HP</h4></th>
                                        <th class="card-title"><h4>Jenis Pekerjaan</h4></th>
                                        <th class="card-title"><h4>Status CIF</h4></th>
                                        <th class="card-title"><h4>No KTP</h4></th>
                                        <th class="card-title"><h4>No NPWP</h4></th>
                                        <th class="card-title"><h4>Email</h4></th>
                                        <th class="card-title"><h4>Tempat Lahir</h4></th>
                                        <th class="card-title"><h4>Tgl Lahir</h4></th>
                                        <th class="card-title"><h4>Agama</h4></th>
                                        <th class="card-title"><h4>Status_Kawin</h4></th>
                                        <th class="card-title"><h4>Pendidikan</h4></th>
                                        <th class="card-title"><h4>Etnis</h4></th>
                                        <th class="card-title"><h4>Nama_Panggilan</h4></th>
                                        <th class="card-title"><h4>Umur</h4></th>
                                        <th class="card-title"><h4>RT_KTP</h4></th>
                                        <th class="card-title"><h4>RW_KTP</h4></th>
                                        <th class="card-title"><h4>Kelurahan_KTP</h4></th>
                                        <th class="card-title"><h4>Kecamatan_KTP</h4></th>
                                        <th class="card-title"><h4>Kota_KTP</h4></th>
                                        <th class="card-title"><h4>Provinsi_KTP</h4></th>
                                        <th class="card-title"><h4>Alamat_Domisili</h4></th>
                                        <th class="card-title"><h4>Kelurahan_Domisili</h4></th>
                                        <th class="card-title"><h4>Kecamatan_Domisili</h4></th>
                                        <th class="card-title"><h4>Kota_Domisili</h4></th>
                                        <th class="card-title"><h4>Provinsi_Domisili</h4></th>
                                        <th class="card-title"><h4>Kodepos_Domisili</h4></th>
                                        <th class="card-title"><h4>Nama_Ibu_Kandung</h4></th>
                                        <th class="card-title"><h4>Nama_Ahli_Waris_1</h4></th>
                                        <th class="card-title"><h4>Nama_Ahli_Waris_2</h4></th>
                                        <th class="card-title"><h4>Nama_Ahli_Waris_3</h4></th>
                                        <th class="card-title"><h4>Jenis Kelamin</h4></th>
                                        <th class="card-title"><h4>Alamat</h4></th>
                                        <th class="card-title"><h4>Jenis_Nasabah</h4></th>
                                        <th class="card-title"><h4>Jenis_Anggota</h4></th>
                                        <th class="card-title"><h4>Upload_Dokumen</h4></th>
                                        <th class="card-title"><h4>Cabang</h4></th>
                                        <th class="card-title"><h4>Tanggal_Pembukaan</h4></th>
                                        <th class="card-title"><h4>Tujuan_Pembukaan</h4></th>
                                        <th class="card-title"><h4>Kategori_Pinjaman</h4></th>
                                        <th class="card-title"><h4>Total_Penghasilan_Perbulan</h4></th>
                                        <th class="card-title"><h4>Officer</h4></th>
                                        <th class="card-title"><h4>Action</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggota as $anggota )                                  
                                    <tr>
                                        <td style="width: 15px;">
                                            <div class="icheck-primary d-inline ml-2">
                                                <input wire:model="selectedRows" type="checkbox" value="{{$anggota->No_CIF}}" name="" id="">
                                                <label for="{{$anggota->No_CIF}}"></label>
                                            </div>
                                        </td>
                                        <td><span>{{$loop->iteration    }}</span></td>
                                        <td><span>{{$anggota->No_CIF}}</span></td>
                                        <td><span>{{$anggota->No_Alt}}</span></td>
                                        <td><span>{{$anggota->Nama_Anggota}}</span></td>
                                        <td><span>{{$anggota->No_HP}}</span></td>
                                        <td><span>{{$anggota->Jenis_Pekerjaan}}</span></td>
                                        <td><span>{{$anggota->Status_CIF}}</span></td>
                                        <td><span>{{$anggota->No_KTP}}</span></td>
                                        <td><span>{{$anggota->No_NPWP}}</span></td>
                                        <td><span>{{$anggota->Email}}</span></td>
                                        <td><span>{{$anggota->Tempat_Lahir}}</span></td>
                                        <td><span>{{$anggota->Tgl_Lahir}}</span></td>
                                        <td><span>{{$anggota->Agama}}</span></td>
                                        <td><span>{{$anggota->Status_Kawin}}</span></td>
                                        <td><span>{{$anggota->Pendidikan}}</span></td>
                                        <td><span>{{$anggota->Etnis}}</span></td>
                                        <td><span>{{$anggota->Nama_Panggilan}}</span></td>
                                        <td><span>{{$anggota->Umur}}</span></td>
                                        <td><span>{{$anggota->RT_KTP}}</span></td>
                                        <td><span>{{$anggota->RW_KTP}}</span></td>
                                        <td><span>{{$anggota->Kelurahan_KTP}}</span></td>
                                        <td><span>{{$anggota->Kecamatan_KTP}}</span></td>
                                        <td><span>{{$anggota->Kota_KTP}}</span></td>
                                        <td><span>{{$anggota->Provinsi_KTP}}</span></td>
                                        <td><span>{{$anggota->Alamat_Domisili}}</span></td>
                                        <td><span>{{$anggota->Kelurahan_Domisili}}</span></td>
                                        <td><span>{{$anggota->Kecamatan_Domisili}}</span></td>
                                        <td><span>{{$anggota->Kota_Domisili}}</span></td>
                                        <td><span>{{$anggota->Provinsi_Domisili}}</span></td>
                                        <td><span>{{$anggota->Kodepos_Domisili}}</span></td>
                                        <td><span>{{$anggota->Nama_Ibu_Kandung}}</span></td>
                                        <td><span>{{$anggota->Nama_Ahli_Waris_1}}</span></td>
                                        <td><span>{{$anggota->Nama_Ahli_Waris_2}}</span></td>
                                        <td><span>{{$anggota->Nama_Ahli_Waris_3}}</span></td>
                                        <td><span>{{$anggota->Jenis_Kelamin}}</span></td>
                                        <td><span>{{$anggota->Alamat}}</span></td>
                                        <td><span>{{$anggota->Jenis_Nasabah}}</span></td>
                                        <td><span>{{$anggota->Jenis_Anggota}}</span></td>
                                        <td><span>{{$anggota->Upload_Dokumen}}</span></td>
                                        <td><span>{{$anggota->Cabang}}</span></td>
                                        <td><span>{{$anggota->Tanggal_Pembukaan}}</span></td>
                                        <td><span>{{$anggota->Tujuan_Pembukaan}}</span></td>
                                        <td><span>{{$anggota->Kategori_Pinjaman}}</span></td>
                                        <td><span>{{$anggota->Total_Penghasilan_Perbulan}}</span></td>
                                        <td><span>{{$anggota->Officer}}</span></td>
                                        <td>
                                        {{-- <span>
                                            <a href="{{url('daftar-anggota/'.$anggota->No_CIF.'/lihatData')}}"><button type="button" class="btn btn-rounded btn-primary">Lihat</a> </span>
                                            </button>
                                        </span> --}}
                                            <div class="btn-group" role="group">
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Pilih Aksi</button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="{{url('daftar-anggota/'.$anggota->No_CIF.'/lihatData')}}">Lihat</a>
                                                <a class="dropdown-item" href="{{url('daftar-anggota/'.$anggota->No_CIF.'/editdata')}}">Edit</a>
                                                <a class="dropdown-item" href=""  data-bs-toggle="modal" data-bs-target="#export">Update Transaksi</a>
                                                <a class="dropdown-item" href=""  data-bs-toggle="modal" data-bs-target="#hapus{{ $anggota->No_CIF }}">Hapus</a>
                                                </div>
                                            </div> 
                                        </td>

                                        
                                        
                                        <div class="modal fade" id="hapus{{ $anggota->No_CIF }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" >
                                                 <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Data Yang Ingin Di Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ url('delete',['No_CIF'=>$anggota->No_CIF]) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method("DELETE")
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">No CIF
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"  name="" value="{{ $anggota->No_CIF }}" aria-label="Disabled input example" disabled readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Anggota
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"  name="" value="{{ $anggota->Nama_Anggota }}"  aria-label="Disabled input example" disabled readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                       
                        </div>
                    </div>
                 </div>
             </div>
        </div>


      
        <div class="row">
           
            <div class="col-sm-12 col-md-12 col-xxl-6 col-xl-4 col-lg-6">
                <div class="card">
                    @if (session ('erorr'))
                     <script>
                         Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "{{session('error')}}",
                                
                                });
                     </script>
                  @endif
                    @if (session ('simpananpokok'))
                        <script>
                            Swal.fire({
                                    title: "Simpanan Pokok!",
                                    text:  "{{session('simpananpokok')}}",
                                    icon: "success"
                                    });
                        </script>
                     @endif
                     @if (session ('banih'))
                     <script>
                         Swal.fire({
                                 title: "Banih!",
                                 text:  "{{session('banih')}}",
                                 icon: "success"
                                 });
                     </script>
                  @endif
                     @if (session ('sapala'))
                     <script>
                         Swal.fire({
                                 title: "Sapala!",
                                 text:  "{{session('sapala')}}",
                                 icon: "success"
                                 });
                     </script>
                  @endif
                  @if (session ('pahar'))
                     <script>
                         Swal.fire({
                                 title: "Pahar!",
                                 text:  "{{session('pahar')}}",
                                 icon: "success"
                                 });
                     </script>
                  @endif
                  @if (session ('tambah'))
                        <script>
                            Swal.fire({
                                    title: "Tambah Anggota Berhasil!",
                                    text:  "{{session('tambah')}}",
                                    icon: "success"
                                    });
                        </script>
                     @endif
                     @if (session ('wajib'))
                     <script>
                         Swal.fire({
                                 title: "Simpanan Wajib!",
                                 text:  "{{session('wajib')}}",
                                 icon: "success"
                                 });
                     </script>
                  @endif
                     @if (session ('siraya'))
                        <script>
                            Swal.fire({
                                    title: "Siraya!",
                                    text:  "{{session('siraya')}}",
                                    icon: "success"
                                    });
                        </script>
                     @endif
                     @if (session ('langko'))
                        <script>
                            Swal.fire({
                                    title: "Langko!",
                                    text:  "{{session('langko')}}",
                                    icon: "success"
                                    });
                        </script>
                     @endif
                     
                     @if (session ('batuah'))
                     <script>
                         Swal.fire({
                                 title: "Batuah!",
                                 text:  "{{session('batuah')}}",
                                 icon: "success"
                                 });
                     </script>
                     @endif
                     @if (session ('paramu'))
                     <script>
                         Swal.fire({
                                 title: "Paramu!",
                                 text:  "{{session('paramu')}}",
                                 icon: "success"
                                 });
                     </script>
                     @endif
                     @if (session ('delete'))
                     <script>
                         Swal.fire({
                                 title: "BERHASIL!",
                                 text:  "{{session('delete')}}",
                                 icon: "success"
                                 });
                     </script>
                     @endif
                     @if (session ('bahata'))
                     <script>
                         Swal.fire({
                                 title: "Bahata!",
                                 text:  "{{session('bahata')}}",
                                 icon: "success"
                                 });
                     </script>
                     @endif
                     @if (session ('topokng'))
                     <script>
                         Swal.fire({
                                 title: "topokng!",
                                 text:  "{{session('topokng')}}",
                                 icon: "success"
                                 });
                     </script>
                     @endif
                     
                    <div class="card-header">
                        <h4 class="card-title">History Upload Data Simpanan</h4>
                        <div class="card-action">
                            {{-- <div class="dropdown custom-dropdown">
                                <div data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" id="simpananpokok" data-bs-toggle="modal" data-bs-target="#pokok">Simpanan Pokok</a>
                                    <a class="dropdown-item" id="simpananwajib" data-bs-toggle="modal" data-bs-target="#simpananwajib">Simpanan Wajib</a>
                                    <a class="dropdown-item" id="sapala" data-bs-toggle="modal" data-bs-target="#sapala">Sapala</a>
                                    <a class="dropdown-item" id="pahar" data-bs-toggle="modal" data-bs-target="#pahar">Pahar</a>
                                    <a class="dropdown-item" id="batuah" data-bs-toggle="modal" data-bs-target="#batuah">Batuah</a>
                                    <a class="dropdown-item" id="paramu" data-bs-toggle="modal" data-bs-target="#paramu">Paramu</a>
                                    <a class="dropdown-item" id="siraya" data-bs-toggle="modal" data-bs-target="#siraya">Siraya</a>
                                    <a class="dropdown-item" id="langko" data-bs-toggle="modal" data-bs-target="#langko">Langko</a>
                                    <a class="dropdown-item" id="bahata" data-bs-toggle="modal" data-bs-target="#bahata">Bahata</a>
                                    <a class="dropdown-item" id="topokng" data-bs-toggle="modal" data-bs-target="#topokng">Topokng</a>
                                    <a class="dropdown-item" id="banih" data-bs-toggle="modal" data-bs-target="#banih">Banih</a>
                                </div>
                            </div> --}}
                            <div class="btn-group m-b-10">
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Import Simpanan</button>
                                
                                </button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="simpananpokokimport" id="simpananpokok" data-bs-toggle="modal" data-bs-target="#pokok">Simpanan Pokok</a>
                                    <a class="dropdown-item" href="simpananwajib" id="simpananwajib" data-bs-toggle="modal" data-bs-target="#simpananwajib">Simpanan Wajib</a>
                                    <a class="dropdown-item" href="sapalaimport" id="sapala" data-bs-toggle="modal" data-bs-target="#sapala">Sapala</a>
                                    <a class="dropdown-item" href="paharimport" id="pahar" data-bs-toggle="modal" data-bs-target="#pahar">Pahar</a>
                                    <a class="dropdown-item" href="batuahimport" id="batuah" data-bs-toggle="modal" data-bs-target="#batuah">Batuah</a>
                                    <a class="dropdown-item" href="paramuimport" id="paramu" data-bs-toggle="modal" data-bs-target="#paramu">Paramu</a>
                                    <a class="dropdown-item" href="sirayaimport" id="siraya" data-bs-toggle="modal" data-bs-target="#siraya">Siraya</a>
                                    <a class="dropdown-item" href="langkoimport" id="langko" data-bs-toggle="modal" data-bs-target="#langko">Langko</a>
                                    <a class="dropdown-item" href="bahataimport" id="bahata" data-bs-toggle="modal" data-bs-target="#bahata">Bahata</a>
                                    <a class="dropdown-item" href="topokngimport" id="topokng" data-bs-toggle="modal" data-bs-target="#topokng">Topokng</a>
                                    <a class="dropdown-item" href="banihimport" id="banih" data-bs-toggle="modal" data-bs-target="#banih">Banih</a>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <div class="card-body">
                       <h2>Simpanan Pokok update : {{$pokok}}</h2>
                       <h2>Simpanan Wajib update : {{$wajib}}</h2>
                       <h2>Sapala update : {{$sapala}}</h2>
                       <h2>Pahar update : {{$pahar}}</h2>
                       <h2>Batuah update : {{$batuah}}</h2>
                       <h2>Paramu update : {{$paramu}}</h2>
                       <h2>Siraya update : {{$siraya}}</h2>
                       <h2>Langko update : {{$langko}}</h2>
                       <h2>Bahata update : {{$bahata}}</h2> 
                       <h2>Topokng update : {{$topokng}}</h2>
                       <h2>Banih update :{{$banih}} </h2>
                    </div>
                </div>
            </div>
           
        </div>

    </div>
</div>
@endsection
@push('scripts')
    <script src="//cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    
    <script>
        $('#pencarian').val('');
        $('#pencarian').css('display', 'none');
        // $('#filterBaru').css('display', 'none');
        var table =  $('#example').DataTable({
            ordering: false,
            info: false,
            buttons:['copy'],
            
            columnDefs: [
                {
                    target: 3,
                    visible: false,
                },
                {
                    target: 5,
                    visible: false,
                },
               
                
                {
                    target: 8,
                    visible: false,
                },
                {
                    target: 9,
                    visible: false
                },
                {
                    target: 10,
                    visible: false,
                },
                {
                    target: 11,
                    visible: false
                },
                {
                    target: 12,
                    visible: false,
                },
                {
                    target: 13,
                    visible: false
                },
                {
                    target: 14,
                    visible: false,
                },
                {
                    target: 15,
                    visible: false
                },
                {
                    target: 16,
                    visible: false,
                },
                {
                    target: 17,
                    visible: false
                },
                {
                    target: 18,
                    visible: false,
                },
                {
                    target: 19,
                    visible: false
                },
                {
                    target: 20,
                    visible: false,
                },
                {
                    target: 21,
                    visible: false
                },
                {
                    target: 22,
                    visible: false,
                },
                {
                    target: 23,
                    visible: false
                },
                {
                    target: 24,
                    visible: false,
                },
                {
                    target: 25,
                    visible: false
                },
                {
                    target: 26,
                    visible: false,
                },
                {
                    target: 27,
                    visible: false
                }
                ,
                {
                    target: 28,
                    visible: false
                },
                {
                    target: 29,
                    visible: false,
                },
                {
                    target: 30,
                    visible: false
                },
                {
                    target: 31,
                    visible: false,
                },
                {
                    target: 32,
                    visible: false
                },
                {
                    target: 33,
                    visible: false,
                },
                {
                    target: 34,
                    visible: false
                }
                ,
                {
                    target: 35,
                    visible: false
                },
                {
                    target: 36,
                    visible: false,
                },
                {
                    target: 37,
                    visible: false
                },
                {
                    target: 38,
                    visible: false,
                },
                {
                    target: 39,
                    visible: false
                }
                ,
                {
                    target: 40,
                    visible: false
                },
                {
                    target: 41,
                    visible: false,
                },
                {
                    target: 42,
                    visible: false
                }
                ,
                {
                    target: 43,
                    visible: false
                },
                {
                    target: 44,
                    visible: false
                }
                ,
                {
                    target: 45,
                    visible: false
                }
        ],
           
            searching:true,
            ordering: false,
            bPaginate: true,
            bFilter: false,
            bInfo: true,
           

        });

       

    $('#filter').on('change', function(){   
        let angka = $('#filter').val();
       
        if ($('#filter').val() == '') {
            $('#pencarian').css('display', 'none');
            table.column(3).visible(false);
            table.column(6).visible(false);
            table.column(8).visible(false);
            table.column(9).visible(false);
            table.column(10).visible(false);
            table.column(11).visible(false);
            table.column(12).visible(false);
            table.column(13).visible(false);
            table.column(14).visible(false);
            table.column(15).visible(false);
            table.column(16).visible(false);
            table.column(17).visible(false);
            table.column(18).visible(false);
            table.column(19).visible(false);
            table.column(20).visible(false);
            table.column(21).visible(false);
            table.column(22).visible(false);
            table.column(23).visible(false);
            table.column(24).visible(false);
            table.column(25).visible(false);
            table.column(26).visible(false);
            table.column(27).visible(false);
            table.column(28).visible(false);
            table.column(29).visible(false);
            table.column(30).visible(false);
            table.column(31).visible(false);
            table.column(32).visible(false);
            table.column(33).visible(false);
            table.column(34).visible(false);
            table.column(35).visible(false);
            table.column(36).visible(false);
            table.column(37).visible(false);
            table.column(38).visible(false);
            table.column(39).visible(false);
            table.column(40).visible(false);
            table.column(41).visible(false);
            table.column(42).visible(false);
            table.column(43).visible(false);
            table.column(44).visible(false);
            } 
            else if ($('#filter').val() == '3') {
                    table.column(3).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            
            else if ($('#filter').val() == '5') {
                    table.column(5).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '6') {
                    table.column(6).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '7') {
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '8') {
                    table.column(8).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '9') {
                    table.column(9).visible(true);
                    
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '10') {
                    table.column(10).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '11') {
                    table.column(11).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '12') {
                    table.column(12).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '13') {
                    table.column(13).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '14') {
                    table.column(14).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '15') {
                    table.column(15).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '16') {
                    table.column(16).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '17') {
                    table.column(17).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '18') {
                    table.column(18).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '19') {
                    table.column(19).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '20') {
                    table.column(20).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '21') {
                    table.column(21).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '22') {
                    table.column(2).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '23') {
                    table.column(23).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '24') {
                    table.column(24).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '25') {
                    table.column(25).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '26') {
                    table.column(26).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '27') {
                    table.column(27).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '28') {
                    table.column(28).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '29') {
                    table.column(29).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '30') {
                    table.column(30).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '31') {
                    table.column(31).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '32') {
                    table.column(32).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '33') {
                    table.column(33).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '34') {
                    table.column(34).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '35') {
                    table.column(35).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '36') {
                    table.column(36).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '37') {
                    table.column(37).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '38') {
                    table.column(38).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '39') {
                    table.column(39).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '40') {
                    table.column(40).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '41') {
                    ta$('#pencarian').css('display', 'inline-block');ble.column(41).visible(true);
                    
            }else if ($('#filter').val() == '42') {
                    table.column(42).visible(true);
                    $('#pencarian').css('display', 'inline-block');
            }
            else if ($('#filter').val() == '43') {
                table.column(43).visible(true).searching(true);
                table.searching(true);
                $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '44') {
                table.column(44).visible(true).searching(true);
                table.searching(true);
                $('#pencarian').css('display', 'inline-block');
            }else if ($('#filter').val() == '45') {
                table.column(45).visible(true).searching(true);
                table.searching(true);
                $('#pencarian').css('display', 'inline-block');
            }

        });     
        $('#pencarian').on('keyup change clear', function(e) {
            var inputFilter = $('#filter').val();
            if (inputFilter == '43') {
                table.column(inputFilter)
                    .search($('#pencarian').val())
                    .draw();
            } else {
                table.column(inputFilter)
                    .search($('#pencarian').val())
                    .draw();
            }
        });          
    
    $('select').on('click'),function(){

    }
    </script>
       
@endpush
