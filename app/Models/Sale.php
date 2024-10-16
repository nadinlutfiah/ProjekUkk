<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'penjualan',
        'total_harga',
        'tanggal_penjualan',
        'status_stock',
        'image',
    ];
}
