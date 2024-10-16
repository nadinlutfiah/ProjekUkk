<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $fillable = [
        'barang',
        'jumlah',
        'harga',
        'total',
        'image',
    ];
}
