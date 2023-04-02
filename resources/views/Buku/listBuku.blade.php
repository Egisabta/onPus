@extends('admin')
@section('navbar')
<div class="container">
<div class="row">
    <div class="col mt-5 mb-3">
        <table class="table table-bordered mt-3 mb-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($listbuku as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->role }}</td>
                  <td>{{ $item->password }}</td>
                  <td>
                      <div class="justify-content-between">
                        <form action="/daftarAnggota/{{$item->id }}" method="POST" class="d-inline">
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