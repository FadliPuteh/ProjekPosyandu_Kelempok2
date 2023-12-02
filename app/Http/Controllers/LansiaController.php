<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lansia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LansiaController extends Controller
{
    public function create_lansia()
    {
        return view('create_lansia');
    }

    public function store_lansia(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'gejala' => 'required',
            'alamat' => 'required',
        ]);
        lansia::create([
            'nama'=> $request->nama,
            'umur'=> $request->umur,
            'gejala'=> $request->gejala,
            'alamat'=> $request->alamat,
        ]);
        Session::flash('success', 'Data berhasil disimpan.');

        return Redirect::route('program');
    }
}
