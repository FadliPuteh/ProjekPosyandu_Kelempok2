<?php

namespace App\Http\Controllers;
use App\Models\Balita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BalitaController extends Controller
{
    public function create_balita()
    {
        return view('create_balita');
    }

    public function store_balita(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur_balita' => 'required',
            'jenis_imunisasi' => 'required',
            'nama_ortu' => 'required',
            'alamat' => 'required'
        ]);

        Balita::create([
            'nama'=> $request->nama,
            'umur_balita'=> $request->umur_balita,
            'jenis_imunisasi'=> $request->jenis_imunisasi,
            'nama_ortu'=> $request->nama_ortu,
            'alamat'=> $request->alamat
        ]);
        Session::flash('success', 'Data berhasil disimpan.');
        return Redirect::route('program');
    }
}
