<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;

class UserController extends Controller
{
      /**
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = user::all();
        return view('user.index', compact('user'));
    }

    public function tambah(Request $request)
    {
        // Logika untuk menambah buku
    }

    public function edit($id)
    {
        $book = Buku::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate buku
    }

    public function destroy($id)
    {
        // Logika untuk menghapus buku
    }
}
