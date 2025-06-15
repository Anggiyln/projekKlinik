@extends('layouts.app_modern')
@section('title','Data Poli')

@section('content')
<div class="card">
    <h3 class="card-header">Data Poli</h3>
    <div class="card-body">
        <a href="/poli/create" class="btn btn-primary mb-3">Tambah Poli</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Biaya</th>
                    <th>Keterangan</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($polis as $poli)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $poli->nama }}</td>
                        <td>{{ number_format($poli->biaya) }}</td>
                        <td>{{ $poli->keterangan }}</td>
                        <td>
                            <a href="/poli/{{ $poli->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/poli/{{ $poli->id }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- PAGINATION --}}
        <div class="d-flex justify-content-center">
            {{ $polis->links() }}
        </div>
    </div>
</div>
@endsection
