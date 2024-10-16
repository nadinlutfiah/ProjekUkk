<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelians = Pembelian::all();
        return view('pembelians.index', compact('pembelians'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembelians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_produk' => 'required|string',
        'harga_produk' => 'required|numeric',
        'tanggal_pembelian' => 'required|date',
        'jumlah_barang' => 'required|integer',
        'subtotal' => 'required|numeric',
    ]);

    Pembelian::create($request->all());

    return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(pembelian $pembelian)
    {
        return view('pembelians.show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pembelian.edit', compact('pembelian'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'tanggal_pembelian' => 'required|date',
            'jumlah_barang' => 'required|integer',
            'harga_total' => 'required|numeric',
        ]);

        $pembelian->update($request->all());

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil diupdate.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembelian->delete();

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil dihapus.');
    }
}
