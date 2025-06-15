@extends('layouts.app_modern')
@section('title', 'Pendaftaran Peserta')

@section('content')
<div class="card">
    <div class="card-header">Form Pendaftaran Pasien</div>

    <div class="card-body">
        <form action="/daftar" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="tanggal_daftar">Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control"
                       value="{{ old('tanggal_daftar') ?? date('Y-m-d') }}">
                <span class="text-danger">{{ $errors->first('tanggal_daftar') }}</span>
            </div>

            <div class="form-group mt-3">
                <label for="pasien_id">Nama Pasien</label>
                <select name="pasien_id" class="form-control">
                    <option value="">-- Pilih Pasien --</option>
                    @foreach ($listPasien as $item)
                        <option value="{{ $item->id }}" @selected(old('pasien_id') == $item->id)>{{ $item->no_pasien }} - {{ $item->nama }}</option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
            </div>

            <!-- Tambahkan input lainnya di sini jika ada -->

            <button type="submit" class="btn btn-primary mt-3">Daftar</button>
        </form>
    </div>
</div>
@endsection
