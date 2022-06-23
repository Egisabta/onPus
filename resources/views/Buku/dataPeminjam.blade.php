@extends('admin')
@section('navbar')
<div class="container">
<div class="row">
    <div class="col mt-5 mb-3">
        <table class="table table-bordered mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">JudulBuku</th>
                <th scope="col">NamaPeminjam</th>
                <th scope="col">TanggalPeminjaman</th>
                <th scope="col">TanggalPengembalian</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($peminjam as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->daftarBuku->judul_buku }}</td>
                  <td>{{ $item->user->name}}</td>
                  <td>{{ $item->tanggal_peminjaman }}</td>
                  <td>{{ $item->tanggal_pengembalian }}</td>
                  {{-- <td>
                      <div class="justify-content-between">
                        <form action="/dataPeminjam/{{$item->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                      </div>
                         
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>

@endsection