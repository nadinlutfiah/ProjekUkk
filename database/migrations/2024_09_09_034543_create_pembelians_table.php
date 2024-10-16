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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->decimal('harga_produk', 15, 2); // max 13 digits + 2 decimal places
            $table->date('tanggal_pembelian');
            $table->integer('jumlah_barang')->unsigned(); // assuming positive numbers
            $table->decimal('subtotal', 15, 2); // harga_produk * jumlah_barang
            $table->timestamps(); // automatic created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
