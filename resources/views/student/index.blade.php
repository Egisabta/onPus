@extends('admin')
@section('navbar')
<div class="container">
<div class="row">
    <div class="col mt-5 mb-3">
        <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm mt-5"><i class="fas fa-trash-alt"></i> Tambah</a>
        <table class="table table-bordered mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item['NIM'] }}</td>
                  <td>{{ $item['Nama'] }}</td>
                  <td>{{ $item['Alamat'] }}</td>
                  <td>
                      <div class="justify-content-between">
                        <a href="{{ route('students.edit', $item['id']) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $item['id']) }}" method="POST" class="d-inline">
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