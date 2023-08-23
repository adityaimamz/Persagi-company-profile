<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function index() {
        if (Auth::guest()) {
            return redirect()->route('login')->with('login', 'Sebelum mengakses, silakan login terlebih dahulu');
        }
        return view('konsultasi', [
            'title' => 'Konsultasi',
        ]);
    }

    public function store(Request $request) {
        // return $request->all();
        Konsultasi::create([
            'id_user' => $request->user_id,
            'pasien' => $request->pasien,
            'no_telepon' => $request->no_telepon,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jadwal_konsultasi' => $request->jadwal_konsultasi,
            'keluhan' => $request->keluhan,
        ]);
        return "berhasil";
    }
}