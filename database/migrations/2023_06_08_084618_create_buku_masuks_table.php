<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku_masuks', function (Blueprint $table) {
            $table->id();
            $table->char('kode_buku', 10);
            $table->date('tanggal');
            $table->string('nama_buku', 50);
            $table->string('harga',50);
            $table->string('harga_satuan',50);
            $table->string('harga_grosir',50);
            $table->string('jumlah_masuk',50);
            $table->string('satuan', 10);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_masuks');
    }
};
