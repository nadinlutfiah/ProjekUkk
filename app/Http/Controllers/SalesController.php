<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Exception;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create'); // Menampilkan form untuk menambahkan data
    }

    public function store(Request $request)
    {
        //dd($request);
        try{
            $request->validate([
                'penjualan' => 'required',
                'total_harga' => 'required',
                'tanggal_penjualan' => 'required|date',
                'status_stock' => 'required',
                'pelanggan' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar jika ada
            ]);
    
            
            $sale = new Sale();
            $sale->penjualan = $request->penjualan;
            $sale->total_harga = $request->total_harga;
            $sale->tanggal_penjualan = $request->tanggal_penjualan;
            $sale->status_stock = $request->status_stock;
            $sale->pelanggan = $request->pelanggan;
    
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $sale->image = basename($imagePath);
            }        
    
            $sale->save();
            // dd($sale);
    
            return redirect()->route('sales.index')->with('success', 'Data berhasil disimpan.');
        }catch(Exception $e){
            dd($e->getMessage());
        }
        
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Sale::findOrFail($id); // Ambil data penjualan berdasarkan ID
        return view('sales.edit', compact('sale'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'penjualan' => 'required',
            'total_harga' => 'required',
            'tanggal_penjualan' => 'required|date',
            'status_stock' => 'required',
            'pelanggan' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar jika ada
        ]);

        $sale = Sale::findOrFail($id); // Ambil data penjualan berdasarkan ID
        $sale->penjualan = $request->penjualan;
        $sale->total_harga = $request->total_harga;
        $sale->tanggal_penjualan = $request->tanggal_penjualan;
        $sale->status_stock = $request->status_stock;
        $sale->pelanggan = $request->pelanggan;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $sale->image = basename($imagePath);
        }
        
        $sale->save();

        return redirect()->route('sales.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sale = Sale::findOrFail($id); // Ambil data penjualan berdasarkan ID
        $sale->delete(); // Hapus data penjualan

        return redirect()->route('sales.index')->with('success', 'Data berhasil dihapus.');
    }
}
