<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("admin.pengguna.index", compact("users"));
    }

    public function create()
    {
        return view("admin.pengguna.tambah");
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8',
           
        ]);

        // Tetapkan nilai 'isAdmin' berdasarkan input, atau default ke false jika tidak disertakan
     
        // Simpan data pengguna ke database
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
          
        ]);

        // Redirect ke halaman lain atau berikan respons sesuai kebutuhan
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil disimpan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pengguna.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|min:6', // Password menjadi opsional
          
        ]);
    
        // Tetapkan nilai 'isAdmin' berdasarkan input, atau default ke false jika tidak disertakan
      
        // Temukan data pengguna berdasarkan ID
        $user = User::findOrFail($id);
    
        // Update data pengguna
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
           
        ]);
    
        // Periksa apakah password diisi sebelum mengupdate
        if ($request->filled('password')) {
            // Update password jika diisi
            $user->update(['password' => bcrypt($request->input('password'))]);
        }
    
        // Redirect ke halaman lain atau berikan respons sesuai kebutuhan
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('danger','Data User Berhasil Di hapus');
    }
    
}
