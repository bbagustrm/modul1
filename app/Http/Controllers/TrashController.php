<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class TrashController extends Controller
{
    public function index()
    {
        $datas = Admin::where('isTrash', true)->get();
        return view('trash.index', compact('datas'));
    }

    public function delete($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('trash.index')->with('success', 'Data Admin berhasil dihapus');
    }


    public function undo($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update(['isTrash' => false]);

        return redirect()->route('admin.index')->with('success', 'Data Admin berhasil dikembalikan');
    }

    public function undoall()
    {
        Admin::where('isTrash', true)->update(['isTrash' => false]);

        return redirect()->route('admin.index')->with('success', 'Semua data Admin berhasil dipulihkan');
    }


}
