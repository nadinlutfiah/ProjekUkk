<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk', 
        'harga_produk',
        'tanggal_pembelian', 
        'jumlah_barang', 
        'subtotal',
    ];
}
