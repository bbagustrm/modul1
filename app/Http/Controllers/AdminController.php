<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{


    public function index()
    {
        $datas = Admin::all(); // Mengambil semua data dari tabel admins
        return view('admin.index', compact('datas'));
    }




    public function create()
    {
        return view('admin.add');
    }




    public function store(Request $request)
    {
        $request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        Admin::create([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $request->password
        ]);

        return redirect()->route('admin.index')->with('success', 'Data Admin berhasil disimpan');
    }






    public function edit($id)
    {
        $data = Admin::findOrFail($id);
        return view('admin.edit', compact('data'));
    }







    public function update(Request $request, $id)
    {
        $request->validate([
            'id_admin' => 'required',
            'nama_admin' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update([
            'id_admin' => $request->id_admin,
            'nama_admin' => $request->nama_admin,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index')->with('success', 'Data Admin berhasil diubah');
    }





    public function delete($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Data Admin berhasil dihapus');
    }


}
