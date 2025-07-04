@extends('layouts.app_modern')

@section('title', 'Data Pendaftaran')

@section('content')
<div class="card">
    <h3 class="card-header">Data Pendaftaran</h3>
    <div class="card-body">
        <form action="">
            <div class="row g-3 mb-2">
                <div class="col">
                    <input type="text" name="q" class="form-control" placeholder="Nama atau No. Pasien" value="{{ request('q') }}">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <a href="{{ route('daftar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL DAFTAR</th>
                    <th>POLI</th>
                    <th>BIAYA</th>
                    <th>KELUHAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftar as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->pasien->nama }}</td>
                        <td>{{ $item->pasien->jenis_kelamin }}</td>
                        <td>{{ $item->tanggal_daftar }}</td>
                        <td>{{ $item->poli->nama ?? '-' }}</td>
                        <td>{{ $item->biaya }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/daftar/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                <form action="{{ route('daftar.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! $daftar->links() !!}
    </div>
</div>
@endsection
