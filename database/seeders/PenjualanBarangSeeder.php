<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualan = new penjualanbarang();
        $penjualan->fill([
            'nama'=>'sabun',
            'harga'=>'10.000'
        ]);
        $penjualan = new penjualanbarang();
        $penjualan->fill([
            'nama'=>'pasta gigi',
            'harga'=>'20.000'
        ]);
        $penjualan = new penjualanbarang();
        $penjualan->fill([
            'nama'=>'snack',
            'harga'=>'30.000'
        ]);
    }
}
