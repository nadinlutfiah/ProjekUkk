<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    // Define fillable properties to allow mass assignment
    protected $fillable = [
        'tanggal',    // Add this line if 'tanggal' is used in the form
        'penjualan',
        'pembelian',
        'pendapatan',
    ];
}
