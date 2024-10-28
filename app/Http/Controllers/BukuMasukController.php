<?php

namespace App\Http\Controllers;


use App\Http\Requests\Storebuku_masukRequest;
use App\Http\Requests\Updatebuku_masukRequest;
use App\Models\buku_masuk;
use App\Models\data_buku;
use App\Models\buku_keluar;
use App\Models\Code;
use PDF;

class BukuMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$buku_masuk = buku_masuk::orderBy('kode_buku')->get();    
        // return view('layout.masuk', compact('buku_masuk'));
        
        $buku_masuk = buku_masuk::all();
        return view('layout.bukumasuk')->with('buku_masuk', $buku_masuk);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $code = code::all();
        return view('layout.masuktambah')->with('code,', $code);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storebuku_masukRequest $request)
    {
        buku_masuk::create($request->except(['_token']));
        data_buku::create($request->except(['_token']));

        return redirect()->route('bukumasuk.index')->with('success','Buku Masuk Berhasil Ditambah');
    }

    public function cetak_pdf(){
        $buku_masuk = buku_masuk::all();
 
    	$pdf = PDF::loadView('laporan.pdf', compact('buku_masuk'));
    	return $pdf->stream();
    }

    /**
     * Display the specified resource.
     */
    public function show(buku_masuk $buku_masuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku_masuk $buku_masuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatebuku_masukRequest $request, buku_masuk $buku_masuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku_masuk $buku_masuk)
    {
        
    }
}
