<?php

namespace App\Http\Controllers;

use App\Models\buku_keluar;
use App\Models\buku_masuk;
use App\Models\data_buku;
use App\Http\Requests\Storebuku_keluarRequest;
use App\Http\Requests\Updatebuku_keluarRequest;

class BukuKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku_keluar = buku_keluar::all();
        
        return view('layout.keluar')->with('buku_keluar', $buku_keluar);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku_masuk = buku_masuk::all();

        return view('layout.keluartambah', compact('buku_masuk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebuku_keluarRequest $request)
    {
        
        // $buku_keluar = new buku_keluar;
        // $buku_keluar->kode_buku = $request->kode_buku;
        // $buku_keluar->tanggal = $request->tanggal;
        // $buku_keluar->nama_buku = $request->nama_buku;
        // $buku_keluar->jumlah_keluar = $request->jumlah_keluar;
        // $buku_keluar->satuan = $request->satuan;
        
        // $buku_keluar->save();
        buku_keluar::create($request->except(['_token']));
        return redirect()->route('bukukeluar.index')->with('success','Buku Keluar berhasil ditambah');
    }
    public function kode()
    {
        $data_buku = data_buku::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(buku_keluar $buku_keluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku_keluar $buku_keluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebuku_keluarRequest $request, buku_keluar $buku_keluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku_keluar $buku_keluar)
    {
        //
    }
}
