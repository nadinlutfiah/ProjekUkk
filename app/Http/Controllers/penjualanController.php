<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use PDF;

class PenjualanController extends Controller
{
    public function index()
    {
        // Corrected the class name from Penjualans to Penjualan
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        try {
            \Log::info('Received request data:', $request->all());

            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'penjualan' => 'required|string|max:255',
                'harga_jual' => 'required|numeric',
                'harga_beli' => 'required|numeric',
                'status_stock' => 'required|string',
                'diskon' => 'required|string|max:255',
            ]);

            $penjualan = new Penjualan();
            $penjualan->nama_barang = $request->penjualan;
            $penjualan->harga_beli = $request->harga_beli;
            $penjualan->harga_jual = $request->harga_jual;
            $penjualan->status_stock = $request->status_stock;
            $penjualan->diskon = $request->diskon;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $penjualan->image = basename($imagePath);
            }

            $penjualan->save();
            \Log::info('Penjualan saved successfully:', $penjualan->toArray());

            return redirect()->route('penjualan.index')->with('success', 'Data berhasil disimpan.');
        } catch (\Exception $e) {
            \Log::error('Error saving penjualan: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'penjualan' => 'required|string|max:255',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'status_stock' => 'required|string',
            'diskon' => 'required|string|max:255',
        ]);

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->nama_barang = $request->penjualan;
        $penjualan->harga_beli = $request->harga_beli;
        $penjualan->harga_jual = $request->harga_jual;
        $penjualan->status_stock = $request->status_stock;
        $penjualan->diskon = $request->diskon;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $penjualan->image = basename($imagePath);
        }

        $penjualan->save();

        return redirect()->route('penjualan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('success', 'Data berhasil dihapus.');
    }
    public function exportPDF()
    {
        $penjualan = penjualan::all(); // Use the correct model
        $pdf = PDF::loadView('penjualan.pdf', compact('penjualan'));
    
        return $pdf->download('penjualan-list.pdf');
    }
}    
