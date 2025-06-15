@extends('layouts.app_modern')
@section('title','Data Pasien')
@section('content')

<div class="card">
    <h3 class="card-header">Form Pasien</h3>
    <div class="card-body">
        <form action="/pasien" method="POST">
            @csrf
            <div class="form-group mt-1 mb-3">
                <label for="nama">Nama Pasien</label>
                <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') }}">
                <span class="text-danger">{{ $errors->first('nama') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="no_pasien">No Pasien</label>
                <input id="no_pasien" class="form-control @error('no_pasien') is-invalid @enderror" type="text" name="no_pasien" value="{{ old('no_pasien') }}">
                <span class="text-danger">{{ $errors->first('no_pasien') }}</span>
            </div>
            <div class="form-group mt-1 mb-3">
                <label for="umur">umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" id="number"
                 name="umur" value="{{ old('umur') }}">
                <span class="text-danger">{{ $errors->first('umur') }}</span>
            </div>

            <div class="form-group mt-1 mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
            </div>

            <div class="form-group mt-1 mb-3">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
</div>
@endsection
