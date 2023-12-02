<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Bumil;
use App\Models\Lansia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data(){
    $balitas = Balita::all();
    $bumils = Bumil::all();
    $lansias = Lansia::all();
    return view('data', compact('balitas', 'bumils', 'lansias'));
    }
    public function hapus_balita(Balita $balitas){
        $balitas->delete();
        return redirect()->route('data')->with('success', 'Balita data deleted successfully.');
    }
    public function hapus_lansia(Lansia $lansias){
        $lansias->delete();
        return redirect()->route('data')->with('success', 'Balita data deleted successfully.');
    }
    public function hapus_bumil(Bumil $bumils){
        $bumils->delete();
        return redirect()->route('data')->with('success', 'Balita data deleted successfully.');
    }
}
