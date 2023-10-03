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
        Schema::create('produks1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('code_produk');
            $table->string('barcode_produk');
            $table->string('jenis_produk');
            $table->string('hargajual_produk');
            $table->string('hargabeli_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks1');
    }
};
