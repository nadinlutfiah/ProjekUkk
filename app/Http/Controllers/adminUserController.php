<?php

namespace App\Http\Controllers;
use App\Models\AdminUser;
use Illuminate\Http\Request;

class adminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminusers = adminuser::all();
        return view('adminusers.index', compact('adminusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminusers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|email|unique:users',
            'level' => 'required|min:6',
        ]);

        adminuser::create([
            'name' => $request->name,
            'username' => $request->username,
            'level' => Hash::make($request->password),
        ]);
        return redirect()->route('adminusers.index')->with('success', 'User berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $adminuser = adminuser::findOrFail($id);
        return view('adminusers.show', compact('adminuser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $adminuser = adminuser::findOrFail($id);
        return view('adminusers.edit', compact('adminuser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $adminuser = adminuser::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|email|unique:users,email,' . $user->id,
            'level' => 'nullable|min:6',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->email,
            'level' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}
