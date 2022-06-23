@extends('admin')
@section('navbar')

<div class="container">
    <div class="row">
        <div class="col mt-5 mb-3">
            <a href="/isiDataBuku/create" class="btn btn-primary btn-sm mt-5"><i class="fas fa-trash-alt"></i> Tambah</a>
            <table class="table table-bordered mt-3 mb-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">JudulBuku</th>
                    <th scope="col">NoBuku</th>
                    <th scope="col">LinkBuku</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($listbuku as $items)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $items->judul_buku }}</td>
                      <td>{{ $items->no_buku }}</td>
                      <td>{{ $items->link }}</td>
                      <td>
                          <div class="justify-content-between">
                            <a href="{{ route('daftar_buku.edit', ['daftar_buku' => $items->id]) }}" class="btn btn-success btn-sm">Edit</a>
                            <form action="/listBuku/{{$items->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                          </div>
                             
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    </div>
    

@endsection