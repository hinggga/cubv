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
                <a href="/dashboard" class="brand-logo">               
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
                                    <li ><a href="{{ url('/daftar-anggota') }}">Daftar Anggota</a></li>
                                    {{-- <li><a href="./index2.html">Daftar User</a></li> --}}
                                </ul>
                            </li>
                          
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-app-store"></i><span class="nav-text">Upload</span></a>
                                <ul aria-expanded="false">
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Data Simpanan</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ url('/daftar-anggota') }}">Simpanan Pokok</a></li>
                                            <li><a href="./email-inbox.html">Simpanan Wajib</a></li>
                                            <li><a href="./email-read.html">Sapala</a></li>
                                            <li><a href="./email-compose.html">Pahar</a></li>
                                            <li><a href="./email-inbox.html">Batuah</a></li>
                                            <li><a href="./email-read.html">Paramu</a></li>
                                            <li><a href="./email-compose.html">Siraya</a></li>
                                            <li><a href="./email-inbox.html">Langko</a></li>
                                            <li><a href="./email-read.html">Bahata</a></li>
                                            <li><a href="./email-compose.html">Topokng</a></li>
                                            <li><a href="./email-inbox.html">Banih</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Data Pinjaman</a>
                                        <ul aria-expanded="false">
                                            <li><a href="./email-compose.html">Pinjaman Bele</a></li>
                                            <li><a href="./email-inbox.html">Pinjaman Paket</a></li>
                                            <li><a href="./email-read.html">Pinjaman Basaroh</a></li>
                                            <li><a href="./email-compose.html">Pinjaman Ramin</a></li>
                                            <li><a href="./email-inbox.html">Pinjaman Krete</a></li>
                                            <li><a href="./email-read.html">Pinjaman Gawe</a></li>
                                            <li><a href="./email-compose.html">Pinjaman Pande</a></li>
                                            <li><a href="./email-inbox.html">Pinjaman Babore</a></li>
                                            <li><a href="./email-read.html">Pinjaman Pakakas</a></li>
                                            <li><a href="./email-compose.html">Pinjaman Plesir</a></li>
                                            <li><a href="./email-inbox.html">Pinjamannih Balale'</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text" >User</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ url('/daftar-user') }}">Daftar User</a></li>
                                    {{-- <li><a href="./index2.html">Daftar User</a></li> --}}
                                </ul>
                            </li>
                            
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./chart-flot.html">Flot</a></li>
                                    <li><a href="./chart-morris.html">Morris</a></li>
                                    <li><a href="./chart-chartjs.html">Chartjs</a></li>
                                    <li><a href="./chart-chartist.html">Chartist</a></li>
                                    <li><a href="./chart-sparkline.html">Sparkline</a></li>
                                    <li><a href="./chart-peity.html">Peity</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Components</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./ui-accordion.html">Accordion</a></li>
                                    <li><a href="./ui-alert.html">Alert</a></li>
                                    <li><a href="./ui-badge.html">Badge</a></li>
                                    <li><a href="./ui-button.html">Button</a></li>
                                    <li><a href="./ui-modal.html">Modal</a></li>
                                    <li><a href="./ui-button-group.html">Button Group</a></li>
                                    <li><a href="./ui-list-group.html">List Group</a></li>
                                    <li><a href="./ui-media-object.html">Media Object</a></li>
                                    <li><a href="./ui-card.html">Cards</a></li>
                                    <li><a href="./ui-carousel.html">Carousel</a></li>
                                    <li><a href="./ui-dropdown.html">Dropdown</a></li>
                                    <li><a href="./ui-popover.html">Popover</a></li>
                                    <li><a href="./ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="./ui-tab.html">Tab</a></li>
                                    <li><a href="./ui-typography.html">Typography</a></li>
                                    <li><a href="./ui-pagination.html">Pagination</a></li>
                                    <li><a href="./ui-grid.html">Grid</a></li>
        
                                </ul>
                            </li>
        
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./uc-select2.html">Select 2</a></li>
                                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                                    <li><a href="./uc-toastr.html">Toastr</a></li>
                                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                                </ul>
                            </li>
                            <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                        class="nav-text">Widget</span></a></li>
                            <li class="nav-label">Forms</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="./form-element.html">Form Elements</a></li>
                                    <li><a href="./form-wizard.html">Wizard</a></li>
                                    <li><a href="./form-editor-summernote.html">Summernote</a></li>
                                    <li><a href="form-pickers.html">Pickers</a></li>
                                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                                </ul>
                            </li>
                            <li class="nav-label">Table</li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div  class="content-body">
                    <div  class="container-fluid">
                        <div class="card">
                            <div class="row page-titles mx-0">
                                <div class="col-sm-6 p-md-0">
                                    <div class="welcome-text">
                                        <h4>@yield('welcome', 'Hi,Selamat Datang Admin CU Bonaventura!')</h4>
                                        <span >Database Anggota CU Bonaventura untuk ADMIN</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
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
