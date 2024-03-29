<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || On_pus</title>
    {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    {{-- propper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    {{-- css local --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.bootstrap.min.css') }}">
</head>
<body>
    {{-- navbar --}}
    <div class="col">
        <section>
          <nav class="navbar navbar-expand-lg navbar-inverse navbar-light shadow-md bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand bi-journal arial" href="/">N_Pus</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link bi bi-person-circle" href="/daftarAnggota"> DataUser</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bi bi-person-circle" href="{{ route('employees') }}"> Pegawai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bi bi-person-circle" href="{{ route('students') }}"> Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bi-book" href="/listBuku"> DataBuku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bi-people" href="/listPeminjam"> DaftarPeminjam</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
      </div>
      </section>
        {{-- akhir navbar --}}
        @yield('navbar')
  <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>