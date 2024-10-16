<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
    $laporan = Laporan::all(); // assuming Laporan is your model
    return view('laporan.index', compact('laporan')); // note that 'laporan.index' is the Blade view
}

    public function create()
    {
        return view('laporan.create'); // Use correct view name
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|string|max:255',
            'penjualan' => 'required|integer',
            'pembelian' => 'required|numeric',
            'pendapatan' => 'required|integer',
        ]);
        
        Laporan::create($request->all());

        return redirect()->route('laporan.index')->with('success', 'Laporan created successfully.');
    }

    public function edit(Laporan $laporan)
    {
        return view('laporan.edit', compact('laporan')); // Use correct variable name
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'tanggal' => 'required|string|max:255',
            'penjualan' => 'required|integer',
            'pembelian' => 'required|numeric',
            'pengeluaran' => 'required|integer',
            'pendapatan' => 'required|integer',
        ]);
        
        Laporan::create($request->all());
        
        $laporan->update($request->all()); // Use Laporan instance

        return redirect()->route('laporan.index')->with('success', 'Laporan updated successfully.');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete(); // Use Laporan instance
        return redirect()->route('laporan.index')->with('success', 'Laporan deleted successfully.');
    }

    public function exportPDF()
    {
        $laporans = Laporan::all(); // Use the correct model
        $pdf = PDF::loadView('laporan.pdf', compact('laporans'));
    
        return $pdf->download('laporan-list.pdf');
    }
}    