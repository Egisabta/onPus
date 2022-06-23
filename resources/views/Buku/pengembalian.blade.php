@extends('navbar')
@section('content')

<div class="container">
<div class="row">
<div class="col mt-5 mb-5">
    <form>
        <div class="form-group mt-4">
          <div class="text mt-4">
            <label for="exampleInputEmail1">Nama Peminjam</label>
          </div>
          <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda">
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">Judul Buku</label>
          </div>
          <input type="text" class="form-control" placeholder="Masukkan Judul Buku">
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">Tanggal pengembalian</label>
          </div>
          <input type="date" class="form-control" placeholder="Masukkan Tanggal Peminjaman">
        </div>
        <div class="button mt-5">
            <button type="submit" class="btn btn-danger">Kembalikan buku</button>
        </div>
    </form>
</div>
</div>
</div>
  @endsection