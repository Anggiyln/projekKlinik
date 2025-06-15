<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanPasienController extends Controller
{
    public function create()
    {
        return view('laporan_pasien.create');
        if (request()->filled('q')){
            $data['daftar'] = \App\Models\Daftar::search(request('q'))->paginate(10);
        } else {
            $data['daftar'] = \App\Models\Daftar::latest()->paginate(10);
        }
        return view('daftar.index', $data);

    }
}
