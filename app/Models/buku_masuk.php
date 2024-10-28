<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_masuk extends Model
{
    use HasFactory;

    protected $table = 'buku_masuks';
    protected $primaryKey = 'kode_buku';
    protected $fillable = ['tanggal',
                            'kode_buku',
                            'nama_buku', 
                            'harga', 
                            'harga_satuan', 
                            'harga_grosir', 
                            'jumlah_masuk', 
                            'satuan'];

    public $incrementing = false;
    public $timestamps = true;
}
