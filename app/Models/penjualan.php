<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    
    protected $table = 'penjualans';

    protected $fillable = [
        'nama_barang',
        'harga_jual',
        'harga_beli',
        'status_stock',
        'diskon',
        'image'
    ];
}