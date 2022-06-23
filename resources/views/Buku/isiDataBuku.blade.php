@extends('admin')
@section('navbar')

<div class="container">
<div class="row">
<div class="col mt-5 mb-5">
    <form method="post" action="{{ isset($daftar_buku) ? '/isiDataBuku/' . $daftar_buku->id .'/update' : '/isiDataBuku/store' }}">
        @csrf
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">JudulBuku</label>
          </div>
          <input type="text" class="form-control" name="judul_buku" value="{{ isset($daftar_buku) ? $daftar_buku->judul_buku : ''}}" placeholder="Masukkan Judul Buku">
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">NoBuku</label>
          </div>
          <input type="text" class="form-control" name="no_buku" value="{{ isset($daftar_buku) ? $daftar_buku->no_buku : '' }}" placeholder="Masukkan no_buku">
        </div>
        <div class="form-group mt-4">
          <div class="text mt-2">
            <label for="exampleInputPassword1">link</label>
          </div>
          <input type="text" class="form-control" name="link" value="{{ isset($daftar_buku) ? $daftar_buku->link : '' }}" placeholder="Masukkan link_buku">
        </div>
        <div class="button mt-4">
            <button type="submit" class="btn btn-primary">{{ isset($listbuku) ? 'Perbarui' : 'Tambahkan' }}</button>
        </div>
    </form>
</div>
</div>
</div>
  @endsection