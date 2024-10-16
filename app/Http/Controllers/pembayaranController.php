<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class pembayaranController extends Controller
{
    public function index()
{
    $pembayarans = Pembayaran::all();
    return view('pembayaran.index', compact('pembayarans'));
}
    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_faktur' => 'required|unique:pembayarans',
            'tanggal' => 'required|date',
            'total' => 'required|numeric|min:0',
        ]);
        
        $validatedData['status_pembayaran'] = 'belum_bayar';

        $pembayaran = Pembayaran::create($validatedData);

        return redirect()->route('pembayaran.show', $pembayaran->id)->with('success', 'Pembayaran berhasil dibuat');
    }
    public function show(Pembayaran $pembayaran)
    {
        return view('pembayaran.show', compact('pembayaran'));
    }
    public function edit($id)
{
    $pembayaran = Pembayaran::findOrFail($id);
    return view('pembayaran.edit', compact('pembayaran'));
}


    public function bayar(Pembayaran $pembayaran)
    {
        $pembayaran->update(['status_pembayaran' => 'lunas']);

        return redirect()->route('pembayaran.show', $pembayaran->id)->with('success', 'Pembayaran berhasil');
    }
}


