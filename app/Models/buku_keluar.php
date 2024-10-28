<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_keluar extends Model
{
    use HasFactory;
    protected $table = 'buku_keluars';
    protected $primaryKey = 'id';
    protected $fillable = ['tanggal',
                            'kode_buku',
                            'nama_buku', 
                            
                            'jumlah_keluar', 
                            'satuan'];

    public $incrementing = false;
    public $timestamps = true;
}
