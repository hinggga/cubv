@extends('dashboard')
@section('title','Daftar User')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"> --}}
    <script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="assets/js/data"></script> --}}
@endsection
@section('welcome','Daftar User')
@section('halaman','Daftar User')
@section('content')

<div >
   
    <!-- row -->
    <div>
        
       
        <div class="row">
           
         
           
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        
                        <h4 >Daftar Anggota</h4>
                       
                               
                                        
                        <!-- Button trigger modal -->
                                <!-- Button trigger modal -->
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Launch static backdrop modal
                        </button> --}}
                        
                        <!-- Modal 1 -->
                                    
                    </div>
                    <div class="">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">password</th>
                                <th scope="col">Tanggal Daftar</th>
                                <th scope="col">action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user )   
                              <tr>
                                <td><span>{{$loop->iteration    }}</span></td>
                                <td><span>{{$user->name}}</span></td>
                                <td><span>{{$user->email}}</span></td>
                                <td><span>{{$user->password}}</span></td>
                                <td><span>{{$user->created_at}}</span></td>
                                <td><span> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $user->id }}">Hapus</button></span></td>

                              </tr>
                             <div class="modal fade" id="hapus{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" >
                                                 <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Data Yang Ingin Di Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ url('delete',['id'=>$user->id ]) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method("DELETE")
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">Nama User
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"  name="" value="{{$user->name  }}" aria-label="Disabled input example" disabled readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-username">Email
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"  name="" value="{{$user->email}}"  aria-label="Disabled input example" disabled readonly>
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
                            </tbody>
                            @endforeach
                          </table>
                     </div>
                   
                    
                 </div>
             </div>
        </div>


      
       <div class="row"></div>

    </div>
</div>
@endsection
@push('scripts')
    
       
@endpush
