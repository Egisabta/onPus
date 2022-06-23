    {{-- navbar --}} 
@extends ('navbar')
@section ('content')
{{-- fungsi perulangan --}}
<div class="container">
<div class="row mb-5">
  @if(count($listbuku))
  @foreach( $listbuku as $listbukus )
  <div class="col mt-5 mb-5">
      <div class="card mt-4 mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="https://ae01.alicdn.com/kf/H49cc3344c5e640aa804ccd0348d893f6v/Secret-Garden-Wallpaper-Versi-Bahasa-Inggris-Buku-Mewarnai-Sketsa-Gambar-Anak-anak-Dewasa-12-Halaman-24.jpg_Q90.jpg_.webp" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">nama buku : {{$listbukus->judul_buku}}</p></p>
          <p class="card-text">no buku : {{$listbukus->no_buku}}</p></p>
          <a href="/pinjamBuku" class="btn btn-primary bi bi-plus-circle-fill"> Pinjam Buku</a>
        </div>
      </div>
    </div>  
    @endforeach
    @else
    <div class="container mt-5">
      <div class="alert alert-primary d-flex align-items-center mt-5" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div>
         tidak ada buku yang tersedia saat ini
        </div>
      </div>
    </div>
    @endif
  </div>
</div>
{{-- akhir fungsi --}}
{{-- akhir navbar --}}
@endsection