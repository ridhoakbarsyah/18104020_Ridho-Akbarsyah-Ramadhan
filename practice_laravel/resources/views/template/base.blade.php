<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <title>Latihan Laravel</title>
  </head>
  <body>
        <!-- container adalah container dengan lebar tetap yang responsif. mt-5 merupakan merge top dengan jaraknya 5  -->
    <div class="container mt-5">
      <!--  row merupakan kelas untuk baris -->
        <div class="row">
          <!-- col merupakan coloum dengan large 12 -->
            <div class="col-lg-12">

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <!--  navbar-brand digunakan untuk judul company atau product -->
                    <a class="navbar-brand" href="#">Laravel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <!-- funtion route() berguna untuk memanggil name dari routenya -->
                        <a class="nav-link active" href="{{ route('index') }}">Beranda <span class="sr-only">(current)</span></a>
                        <a class="nav-link" href="{{ route('student.index') }}">Mahasiswa</a>
                        <a class="nav-link" href="{{ route('student.data') }}">DataTable</a>
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    @yield('script')
  </body>
</html>