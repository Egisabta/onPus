@extends('navbar')
@section('content')
     {{-- carousel --}}
     <section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="https://images8.alphacoders.com/886/886681.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption ">
              <h5>Selamat Datang Di On_Pus</h5>
              <p>Online Perpustakaan</p>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="https://images8.alphacoders.com/886/886681.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption ">
              <h5>Selamat Datang Di On_Pus</h5>
              <p>Online Perpustakaan</p>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="https://images8.alphacoders.com/886/886681.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption ">
              <h5>Selamat Datang Di On_Pus</h5>
              <p>Online Perpustakaan</p>
            </div>
          </div>
      </section>
        {{-- akhir caraousel --}}
        
        {{-- sejarah --}}
        <div class="container">
            <div class="row text-center mt-5">
            <div class="col">
                <h2>On_Pus atau Disebut Online Perpustakaan</h2>
              <p>Dibuat untuk mempermudah akses membaca kapanpun, dan dimanapun. On_Pus menyediakan buku untuk semua kalangan oleh karena itu On_Pus sangat dibuat se efektif mungkin untuk meningkatkan mutu baca.</p>
            </div>
            </div>
            </div>
        {{-- akhir sejarah--}}
        {{-- kamu tahu --}}
        <div class="container">
            <div class="row text-center mt-5">
            <div class="col">
                <h2>Kamu Tahu ?</h2>
              <p> membaca buku dapat melatih otak untuk dapat berfikir lebih kritis maupun menganalisis adanya masalah yang tersaji dalam apa yang kita baca. Kita seperti mendapatkan akses atau jalan untuk dapat masuk ke dalam alur cerita dan membantu dalam penyelesaian cerita tersebut.</p>
            </div>
            </div>
            </div>
        {{-- akhir kamu tahu--}}
        {{-- minat baca --}}
        <div class="container">
            <div class="row text-center mt-5 mb-3">
            <div class="col mb-3">
                <h2>Negara Dengan Minat Baca Tinggi</h2>
                <p align="left">Finlandia</p>
         <div class="progress">
    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Peringkat 1</div>
  </div>
                <p align ="left">Belanda</p>
         <div class="progress">
    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Peringkat 2</div>
  </div>
                <p align ="left">Swedia</p>
         <div class="progress mb-5">
    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Peringkat 3</div>
  </div>
            </div> 
            </div>
            </div>
            </div>
        {{-- akhir minat baca--}}
        {{-- tata cara membaca --}}
        {{-- akhir tata cara membaca --}}
@endsection