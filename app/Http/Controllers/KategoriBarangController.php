<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBarang;

class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = KategoriBarang::all();
        return view('kategoribarang.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoribarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_kategori' => 'required|string',
        'descripsi' => 'nullable|string',  // Correct spelling
        'image' => 'nullable|image',
    ]);

    // Handle file upload if necessary
    $path = null;
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public');
    }

    // Save the new category
    KategoriBarang::create([
        'nama_kategori' => $request->input('nama_kategori'),
        'descripsi' => $request->input('descripsi',),  // Provide a default value if null
        'image' => $path,
    ]);

    return redirect()->route('kategoribarang.index')->with('success', 'Kategori berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategoriBarang = KategoriBarang::findOrFail($id);
        return view('kategoribarang.show', compact('kategoriBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoribarang = KategoriBarang::findOrFail($id);
        return view('kategoribarang.edit', compact('kategoribarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string',
            'descripsi' => 'nullable|string',
        ]);

        $kategoriBarang = KategoriBarang::findOrFail($id);
        $kategoriBarang->update($request->all());

        return redirect()->route('kategoribarang.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoriBarang = KategoriBarang::findOrFail($id);
        $kategoriBarang->delete();

        return redirect()->route('kategoribarang.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
