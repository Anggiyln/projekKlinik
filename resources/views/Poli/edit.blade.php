@extends('layouts.app_modern')

@section('title', 'Edit Data Poli')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="card-header">Edit Data <b>{{ $poli->nama }}</b></h3>

        <form action="/poli/{{ $poli->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Poli</label>
                <input type="text" name="nama" class="form-control" value="{{ $poli->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="biaya" class="form-label">Biaya</label>
                <input type="number" name="biaya" class="form-control" value="{{ $poli->biaya }}" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="3">{{ $poli->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="/poli" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection

