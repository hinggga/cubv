
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'CU Bonaventura')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
        <link rel="stylesheet" href="{{asset('admin/vendor/owl-carousel/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
        <link href="{{asset('admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
        @yield('css')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" >
        
        {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"><p>a</p> --}}
       
              
            <div class="nav-header">
                <a href="/dashboardPegawai" class="brand-logo">               
                    <img  src="{{asset('admin/images/cubv.png')}}" alt="">
                </a>
            </div>
           
            <div class="header">
                <livewire:layout.navigation />
              
            </div>
            
            <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif 

            <!-- Page Content -->
            
            <main>
                <div class="quixnav">
                    <div class="quixnav-scroll">
                        <ul class="metismenu" id="menu">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-single-04"></i><span class="nav-text" >Dashboard</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ url('/daftar-anggotaPegawai') }}">Daftar Anggota</a></li>
                                    {{-- <li><a href="./index2.html">Daftar User</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class="content-body">
                    <div  class="container-fluid">
                        <div class="card">
                            <div class="row page-titles mx-0">
                                <div class="col-sm-6 p-md-0">
                                    <div class="welcome-text">
                                        <h4>@yield('welcome', 'Hi,Selamat Datang Pegawai CU Bonaventura!')</h4>
                                        <span >Database Anggota CU Bonaventura Untuk Pegawai</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('/dashboardPegawai') }}">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/daftar-anggota') }}">@yield('halaman')</a></li>
                                        </ol>
                                </div>
                            </div>
                        </div>
                    @yield('content')
                </div>
            </div>
               
                
            </main>
     
    {{-- </div> --}}
    </body>
    <script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('admin/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('admin/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('admin/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    @stack('scripts')
</html>
