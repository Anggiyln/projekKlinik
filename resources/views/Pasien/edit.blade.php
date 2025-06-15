@extends('layouts.app_modern')

@section('title', 'Edit Data Pasien')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-header"> Edit Data <b>{{ $pasien->nama }}</b></h3>

        <form action="/pasien/{{ $pasien->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="no_pasien" class="form-label">No Pasien</label>
                <input type="text" name="no_pasien" class="form-control" value="{{ $pasien->no_pasien }}" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" name="umur" class="form-control" value="{{ $pasien->umur }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required>{{ $pasien->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="/pasien" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
