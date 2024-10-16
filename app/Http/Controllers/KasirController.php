<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kasir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:kasirs,email',
            'password' => 'required|min:6',
        ]);

        Kasir::create([
            'nama' => $request->nama,
            'email' => $request->email, // Change username to email for consistency
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kasir $kasir)
    {
        // return view('kasir.show', compact('kasir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kasir $kasir)
    {
        return view('kasir.edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kasir $kasir)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:kasirs,email,' . $kasir->id,
            'password' => 'nullable|min:6',
        ]);

        $kasir->nama = $request->nama;
        $kasir->email = $request->email; // Change username to email for consistency
        if ($request->filled('password')) {
            $kasir->password = Hash::make($request->password);
        }
        $kasir->save();

        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kasir $kasir)
    {
        $kasir->delete();
        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil dihapus');
    }
}
