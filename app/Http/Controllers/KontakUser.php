<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakUser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kontak',[
            'title' => 'Kontak'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'judul' => $request->judul,
            'pesan' => $request->pesan
        ]);
        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
