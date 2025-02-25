<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier', // Tambahkan nama kolom yang sesuai
        'barang',
        'jumlah',
        'tanggal',
    ];
}
