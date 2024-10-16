<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Exception;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   

            
     public function store(Request $request)
     {
            // Debug to see if 'nama_barang' is received
            //  dd($request->all());
            try {
                \Log::info('Received request data:', $request->all());
                $request->validate([
                    'barcode' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'kode_barang' => 'required|string',
                    'nama_barang' => 'required|string',
                    'kategori' => 'required|string',
                    'jumlah' => 'required|string',
                    'harga' => 'required|string',
                    
                    // Other validation rules
                ]);
        
                //  dd($request);
            
                $barang = new Barang();
                $barang->kode_barang = $request->kode_barang;
                $barang->nama_barang = $request->nama_barang;
                $barang->kategori = $request->kategori;
                $barang->jumlah = $request->jumlah;
                $barang->harga = $request->harga;
        
                if ($request->hasFile('barcode')) {
                    $imagePath = $request->file('barcode')->store('images', 'public');
                    $barang->image = basename($imagePath);
                }

        
                $barang->save();
            
                return redirect()->route('barangs.index')->with('success', 'Data berhasil disimpan.');
            } catch(\exception $e){
                \Log::error('Error saving penjualan: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
    
            }
        
        
     }
     
           
    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
