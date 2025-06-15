<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class PasienController extends Controller
{
    public function index()
    {
        $data['pasien'] = \App\Models\Pasien::latest()->paginate(10);
        return view('pasien.index', $data);
    }

    public function create(Request $request)
    {
         if ($request->has('redirect')) {
        session(['redirect_after_pasien_create' => $request->redirect]);
    }
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama'           => 'required|min:3',
            'no_pasien'      => 'required',
            'umur'           => 'required|min:1',
            'jenis_kelamin'  => 'required',
            'alamat'         => 'nullable'
        ]);

        $pasien = new \App\Models\Pasien;
        $pasien->fill($requestData);
        $pasien->save();

        flash('Data berhasil disimpan')->success();

          if (session('redirect_after_pasien_create') === 'daftar') {
        session()->forget('redirect_after_pasien_create'); // bersihkan session
        return redirect()->route('daftar.create');
    }

        return back();
    }

   public function edit(string $id)
{
    $data['pasien'] = \App\Models\Pasien::findOrFail($id);
    return view('pasien.edit', $data);
}


    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nama'           => 'required|min:3',
            'no_pasien'      => 'required',
            'umur'           => 'required|min:1',
            'jenis_kelamin'  => 'required',
            'alamat'         => 'nullable'
        ]);

        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien->fill($requestData);
        $pasien->save();

        flash('Data berhasil diperbarui')->success();
        return back();
    }

    public function destroy(string $id)
    {
        $pasien = \App\Models\Pasien::findOrFail($id);

        if ($pasien->daftar->count()>=1){
            flash('Data tidak bisa dihapus karena terkait dengan data pendaftaran')->error();
            return back();
        }

        $pasien->delete();

        flash('Data berhasil dihapus')->success();
        return redirect()->route('pasien.index');
    }
}

