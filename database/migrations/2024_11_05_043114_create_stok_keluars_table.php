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
        Schema::create('stok_keluars', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'kode_barang')->nullable();
            $table->string(column: 'stok_keluar')->nullable();
            $table->string(column: 'jumlah_stok_keluar')->nullable();
            $table->string(column: 'tanggal_stok_keluar')->nullable();
            $table->string(column: 'harga_satuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_keluars');
    }
};
