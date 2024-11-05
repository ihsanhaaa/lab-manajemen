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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bentuk_kemasan_id')->nullable();
            $table->foreignId('bentuk_sediaan_id')->nullable();
            $table->foreignId('satuan_id')->nullable();
            $table->foreignId('stok_masuk_id')->nullable();
            $table->foreignId('stok_keluar_id')->nullable();

            $table->string('kode_obat')->nullable();
            $table->string('nama_obat')->nullable();
            $table->string('kekuatan_obat')->nullable();
            $table->string('exp_obat')->nullable();
            $table->string('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
