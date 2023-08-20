<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BiodataUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BiodataUser::where('user_id', Auth::user()->id)->first();
        return view('user-profile',[
            'title' => 'My Profile',
            'data' => $data
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
        // dd($request->all());
        $path = 'Biodata/Profile'; 
        $file = $request->file('gambar');
        Storage::putFileAs($path, $file, $file->getClientOriginalName()); 

        BiodataUser::create([
            'user_id' => Auth::user()->id,
            'gambar' => $path . "/" . $file->getClientOriginalName(),
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_handphone' => $request->nomor_handphone,
            'email' => $request->email,
            'agama' => $request->agama,
            'alamat_tinggal' => $request->alamat,
        ]);

        User::where('id', Auth::user()->id)->update([
            'name' => $request->nama,
            'email' => $request->email
        ]);

        return redirect()->back();
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