<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\AdminKategori; // Import model AdminKategori

class AdminKategoriController extends Controller
{
    public function index()
    {
        $admin_kategoris = AdminKategori::all(); // Use the correct model name
        return view('admin_kategoris.index', compact('adminkategoris')); // Correct variable name and view
    }

    public function create()
    {
        return view('admin_kategoris.create'); // Use correct view name
    }

    public function store(Request $request)
{
    // Comment out or remove any debugging calls
    // dd($request); // This will dump and die, preventing further execution

    $request->validate([
        // 'id_kategori' => 'required|string|max:255',
        'nama_kategori' => 'required|string|max:255',
    ]);

    AdminKategori::create($request->all());

    return redirect()->route('admin_kategoris.index')->with('success', 'Kategori created successfully.');
   }
    
    public function edit(AdminKategori $admin_kategoris)
    {
        return view('admin_kategoris.edit', compact('adminkategoris')); // Use correct variable name
    }

    public function update(Request $request, AdminKategori $admin_kategoris)
    {
        $request->validate([
            // 'id kategori' => 'required|string|max:255',
            'nama_kategori' => 'required|string|max:255', // Update field names and validation
        ]);

        $admin_kategoris->update($request->all()); // Use correct instance

        return redirect()->route('admin_kategoris.index')->with('success', 'Kategori updated successfully.');
    }

    public function destroy(AdminKategori $admin_kategoris)
    {
        $admin_kategoris->delete(); // Use correct instance
        return redirect()->route('admin_kategoris.index')->with('success', 'Kategori deleted successfully.');
    }
}
