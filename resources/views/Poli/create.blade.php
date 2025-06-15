@extends('layouts.app_modern')
@section('title','Form Poli')
@section('content')

<div class="card">
    <h3 class="card-header">Form Poli</h3>
    <div class="card-body">
        <form action="/poli" method="POST">
            @csrf

            <div class="form-group mt-1 mb-3">
                <label for="nama">Nama Poli</label>
                <input id="nama" class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') }}">
                <span class="text-danger">{{ $errors->first('nama') }}</span>
            </div>

            <div class="form-group mt-1 mb-3">
                <label for="biaya">Biaya</label>
                <input id="biaya" class="form-control @error('biaya') is-invalid @enderror" type="number" name="biaya" value="{{ old('biaya') }}">
                <span class="text-danger">{{ $errors->first('biaya') }}</span>
            </div>

            <div class="form-group mt-1 mb-3">
                <label for="keterangan">Keterangan</label>
                <textarea id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                <span class="text-danger">{{ $errors->first('keterangan') }}</span>
            </div>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    </div>
</div>

@endsection
