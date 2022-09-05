@extends('admin')
@section('navbar')
<form action="{{ isset($employee) ? route('employees.update', $employee['id']) : route('employees.store') }}" method="post" data-request="ajax">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title"></h5>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="" class="label-control">Jabatan</label>
            <select name="employee_type_id" id="employeeType" class="form-control">
                @foreach ($employeeTypes as $item)
                    <option value="{{ $item['id'] }}" {{ isset($employee) && $employee['employee_type_id'] == $item['id'] ? 'selected' : '' }}>{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="label-control">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ isset($employee) ? $employee['nip'] : '' }}" placeholder="NIP">
        </div>
        <div class="mb-3">
            <label for="" class="label-control">NIDN</label>
            <input type="text" name="nidn" value="{{ isset($employee) ? $employee['nidn'] : '' }}" class="form-control" placeholder="NIDN">
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Gelar Depan</label>
                <input type="text" name="front_degree" value="{{ isset($employee) ? $employee['front_degree'] : '' }}" class="form-control" placeholder="Gelar Depan">
            </div>
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Gelar Belakang</label>
                <input type="text" value="{{ isset($employee) ? $employee['back_degree'] : '' }}" name="back_degree" class="form-control" placeholder="Gelar Belakang">
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ isset($employee) ? $employee['name'] : '' }}">
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Jenis Kelamin</label>
            <select name="gender" class="form-control">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" {{ isset($employee) && $employee['gender'] == 'L' ? 'selected' : '' }}>Laki - Laki</option>
                <option value="P" {{ isset($employee) && $employee['gender'] == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Email</label>
                <input type="text" name="email" class="form-control" value="{{ isset($employee) ? $employee['email'] : '' }}" placeholder="Email">
            </div>
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">No. Telp</label>
                <input type="text" value="{{ isset($employee) ? $employee['phone'] : '' }}" name="phone" class="form-control" placeholder="No. Telp">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Tempat</label>
                <input type="text" name="birthplace" class="form-control" value="{{ isset($employee) ? $employee['birthplace'] : '' }}" placeholder="Tempat">
            </div>
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Tanggal Lahir</label>
                <input type="date" name="birthdate" value="{{ isset($employee) ? $employee['birthdate'] : '' }}" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Agama</label>
            <select name="religion" class="form-control">
                <option value="">Pilih Agama</option>
                <option value="Buddha" {{ isset($employee) && $employee['religion'] == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                <option value="Hindu" {{ isset($employee) && $employee['religion'] == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Islam" {{ isset($employee) && $employee['religion'] == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Kristen" {{ isset($employee) && $employee['religion'] == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                <option value="Katolik" {{ isset($employee) && $employee['religion'] == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                <option value="Lainnya" {{ isset($employee) && $employee['religion'] == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Alamat</label>
            <textarea name="address" rows="2" class="form-control">{{ isset($employee) ? $employee['address'] : '' }}</textarea>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Desa</label>
                <input type="text" value="{{ isset($employee) ? $employee['city'] : '' }}" name="city" class="form-control" placeholder="Desa">
            </div>
            <div class="col-sm-6 mb-3">
                <label for="" class="label-control">Kecamatan</label>
                <input type="text" name="district" class="form-control" value="{{ isset($employee) ? $employee['district'] : '' }}" placeholder="Kecamatan">
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Provinsi</label>
            <input type="text" name="province" value="{{ isset($employee) ? $employee['province'] : '' }}" class="form-control" placeholder="Provinsi">
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Kewarganegaraan</label>
            <input type="text" name="nationality" value="{{ isset($employee) ? $employee['nationality'] : '' }}" class="form-control" placeholder="Kewarganegaraan">
        </div>
        <div class="mb-3">
            <label for="" class="label-control">Kode Pos</label>
            <input type="text" value="{{ isset($employee) ? $employee['postal_code'] : '' }}" name="postal_code" class="form-control" placeholder="Kode Pos">
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection