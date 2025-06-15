<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index()
    {
    $polis = Poli::orderBy('created_at', 'desc')->paginate(10);
    return view('Poli.index', compact('polis'));
}


    public function create()
    {
        return view('Poli.create');
    }

    public function store(Request $request)
    {
       $requestData = $request->validate([

              'nama' => 'required|unique:poli,nama',
            'biaya' => 'required|numeric',
            'keterangan' => 'nullable'
        ]);

       $polis = new \App\Models\Poli;
        $polis->fill($requestData);
        $polis->save();

        flash('Data Poli berhasil disimpan')->success();

          if (session('redirect_after_poli_create') === 'daftar') {
        session()->forget('redirect_after_poli_create'); // bersihkan session
        return redirect()->route('poli.create');
    }

        return back();
    }

    public function edit(Poli $poli)
    {
        return view('poli.edit', compact('poli'));
    }

    public function update(Request $request, Poli $poli)
    {
      $request->validate([
        'nama' => 'required|unique:poli,nama',
        'biaya' => 'required|numeric|min:0',
        'keterangan' => 'nullable|string',
    ]);

        $poli->update($request->all());

        return redirect('/poli')->with('success', 'Data Poli berhasil diperbarui!');
    }

    public function destroy(Poli $poli)
    {
        $poli->delete();

        return redirect('/poli')->with('success', 'Data Poli berhasil dihapus!');
    }
}
