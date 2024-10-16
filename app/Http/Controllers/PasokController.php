<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pasok;

class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $pasok = Pasok::all();
    return view('pasok.index', compact('pasok'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier' => 'required',
            'barang' => 'required',
            'jumlah' => 'required|integer',
            'tanggal' => 'required|date',
        ]);
    
        Pasok::create($request->all());
    
        return redirect()->route('pasok.index')->with('success', 'Data pasok berhasil ditambahkan.');
    }    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
}
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasok = Pasok::findOrFail($id); // Retrieve the Pasok instance by ID
        return view('pasok.edit', compact('pasok')); // Pass the instance to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'supplier' => 'required',
        'barang' => 'required',
        'jumlah' => 'required|integer',
        'tanggal' => 'required|date',
    ]);

    $pasok = Pasok::findOrFail($id);
    $pasok->update($request->all());

    return redirect()->route('pasok.index')->with('success', 'Data pasok berhasil diupdate.');
} 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
{
    $pasok = Pasok::findOrFail($id);
    $pasok->delete();

    return redirect()->route('pasok.index')->with('success', 'Data pasok berhasil dihapus.');
}
    }
}