@extends('layouts.app_modern')
@section('title','Data Pasien')
@section('content')
<div class="card">
    <h3 class="card-header">Data Pasien</h3>
    <div class="card-body">
        <h3>Data Pasien</h3>
        <a href="/pasien/create" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NO PASIEN</th>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL BUAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <Tbody>
                @foreach ($pasien as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->no_pasien }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <a href="/pasien/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                         <form action="/pasien/{{ $item->id }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </Tbody>
        </table>
        {!! $pasien->links() !!}
    </div>
</div>

@endsection
