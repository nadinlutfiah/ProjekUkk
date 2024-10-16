<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use Exception;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
{
    try {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'total' => 'required|numeric',
            'image' => 'nullable|image', // Validasi gambar jika diunggah
        ]);

        // Handle file upload jika ada
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

        // Menyimpan transaksi
        $transaksi = Transaksi::create([
            'barang' => $request->input('nama_barang'),
            'jumlah' => $request->input('jumlah'),
            'harga' => $request->input('harga'),
            'total' => $request->input('total'),
            'image' => $path,
        ]);
        
        dd($transaksi); 

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');

    } catch (Exception $e) {
        // Menampilkan pesan error jika ada masalah
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}