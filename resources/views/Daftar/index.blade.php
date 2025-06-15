@extends('layouts.app_modern')

@section('title', 'Data Pendaftaran')

@section('content')
<div class="card">
    <h3 class="card-header">Data Pendaftaran</h3>
    <div class="card-body">
        <a href="{{ route('daftar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL DAFTAR</th>
                    <th>POLI</th>
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
<td> : {{ $daftar->poli->nama ?? '-' }}</td>
                        <td>{{ $item->keluhan }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                 <a href="/daftar/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                {{-- <a href="{{ route('daftar.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a> --}}
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
