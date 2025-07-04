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
                <label for="pasien_id">Pilih Poli Tujuan</label>
                | <a href="{{ route('pasien.create', ['redirect' => 'daftar']) }}" target="_blank">Pasien Baru</a>
                <select name="pasien_id" class="form-control select2">
                    <option value="">-- Pilih Pasien --</option>
                    @foreach ($listPasien as $item)
                        <option value="{{ $item->id }}" @selected(old('pasien_id') == $item->id)>
                            {{ $item->no_pasien }} - {{ $item->nama }}
                        </option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                {{-- <div>
                    Setelah menambahkan data pasien baru tekan F5
                </div> --}}
            </div>

            <div class="form-group mt-3">
                <label for="poli_id">Poli</label>
                <select name="poli_id" class="form-control">
                    <option value="">-- Pilih Poli --</option>
                    @foreach ($listPoli as $itemPoli)
                        <option value="{{ $itemPoli->id }}" @selected(old('poli_id') == $itemPoli->id)>
                            {{ $itemPoli->nama }}
                        </option>
                    @endforeach
                </select>
                <span class="text-danger">{{ $errors->first('poli_id') }}</span>
            </div>
        <div class="form-group mt-3 mb-3">
            <label for="keluhan">Keluhan</label>
            <textarea name="keluhan" rows="2" class="form-control">{{ old('keluhan') }} </textarea>
            <span class="text-danger">{{ $errors->first('keluhan') }} </span>
        </div>


            <button type="submit" class="btn btn-primary mt-3">Simpan Pendaftaran</button>
        </form>
    </div>
</div>
@endsection
