<?php

namespace App\Http\Controllers;

use App\Models\data_buku;
use App\Models\buku_masuk;
use App\Models\buku_keluar;
use App\Http\Requests\Storedata_bukuRequest;
use App\Http\Requests\Updatedata_bukuRequest;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku_keluar= buku_keluar::all();
        $data_buku = data_buku::all();
        return view('layout.stok', compact('data_buku', 'buku_keluar'));
        // return view('layout.stok')->with('data_buku','buku_keluar', $data_buku,$buku_keluar);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.usertambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storedata_bukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(data_buku $data_buku,$kode_buku)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_buku $data_buku,$kode_buku)
    {
        $buku_keluar= buku_keluar::all();
        $data_buku = data_buku::findOrFail($kode_buku);
 
        return view('layout.stokedit', compact('data_buku','buku_keluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedata_bukuRequest $request, data_buku $data_buku,$kode_buku)
    {
        $data_buku = data_buku::findOrFail($kode_buku);
 
        $data_buku->update($request->all());
 
        return redirect()->route('databuku.index')->with('success', 'Stok Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_buku $data_buku,$kode_buku)
    {
        $data_buku = data_buku::find($kode_buku);
 
        $data_buku->delete();
 
        return redirect()->route('databuku.index')->with('success', 'Stok Berhasil Dihapus');
    }
    
}
