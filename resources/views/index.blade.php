    @extends('template.template')
    @section('content')
    <?php
    $title = 'Dashboard';
    $page = 'dashboard';
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
        <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
        <title>
            Sistem Informasi Pemilihan Ketua OSIS 
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="../asset/css/nucleo-icons.css" rel="stylesheet" />
        <link href="../asset/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="../asset/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
    </head>
    <div class="content container-fluid py-4">
        @if (auth()->user()->level=="admin")            
        <div class="row w-200 justify-content-center">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Total Siswa</p>
                            <h4 class="mb-0">{{ $totalSiswa }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Suara Masuk</p>
                            <h4 class="mb-0">{{ $hasVote }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">Belum Voting</p>
                            <h4 class="mb-0">{{ $notVote }}</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-danger text-sm font-weight-bolder"></span></p>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col text-center">
            <h2>Selamat Datang <b class="text-danger">{{ auth()->user()->name }}</b></h2>
        </div>
        @endif
        <div class="row mt-4 row-cols-1 row-cols-md-3 g-4">
            @foreach ($kan as $k)
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('storage/' . $k->foto_kandidat) }}" class=" card-image-top rounded" alt="..." height="300">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kandidat {{ $loop->iteration }}</h5>
                        {{-- <p class="card-text">{{ $k->kelas_kandidat }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><b>Jumlah Suara : </b>{{ $k->vote }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>

    <script src="../asset/js/core/popper.min.js"></script>
    <script src="../asset/js/core/bootstrap.min.js"></script>
    <script src="../asset/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../asset/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../asset/js/plugins/chartjs.min.js"></script>
    <script>
    </script>
    {{-- <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> --}}
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../asset/js/material-dashboard.min.js?v=3.0.4"></script>
    </body>

    </html>
    @endsection
