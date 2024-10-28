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
        Schema::create('buku_keluars', function (Blueprint $table) {
            $table->id();
            $table->char('kode_buku', 10);
            $table->date('tanggal');
            $table->string('nama_buku', 50);
            $table->string('jumlah_keluar',50);
            $table->string('satuan', 10);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_keluars');
    }
};
