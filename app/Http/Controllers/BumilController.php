<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bumil;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BumilController extends Controller
{
    public function create_bumil()
    {
        return view('create_bumil');
    }

    public function store_bumil(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'usia_kandungan' => 'required',
            'gejala' => 'required',
            'alamat' => 'required',
        ]);

        Bumil::create([
            'nama'=> $request->nama,
            'umur'=> $request->umur,
            'usia_kandungan'=> $request->usia_kandungan,
            'gejala'=> $request->gejala,
            'alamat'=> $request->alamat,
        ]);
        Session::flash('success', 'Data berhasil disimpan.');
        return Redirect::route('program');
    }
}
