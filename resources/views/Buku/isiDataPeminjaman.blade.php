@extends('navbar')
@section('content')

<div class="container">
<div class="row">
<div class="col mt-5 mb-5">
    <form method="post" action="/pinjamBuku/store">
        @csrf
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">Buku</label>
          </div>
          <select name="daftar_buku_id" id="daftar_buku_id" class="form-control">
            @foreach ($items as $item)
              <option value="{{ $item->id }}">{{ $item->judul_buku }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">Tanggal Peminjaman</label>
          </div>
          <input type="date" class="form-control" name="tanggal_peminjaman" value="" placeholder="Masukkan tanggal">
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">Tanggal Pengembalian</label>
          </div>
          <input type="date" class="form-control" name="tanggal_pengembalian" placeholder="Masukkan tanggal">
        </div>
        <div class="button mt-4">
            <button type="submit" href='pinjamBuku' class="btn btn-primary">{{'tambahkan'}}</button>
        </div>
    </form>
</div>
</div>
</div>
  @endsection