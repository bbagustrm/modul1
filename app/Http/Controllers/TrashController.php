<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class TrashController extends Controller
{
    public function index()
    {
        $datas = Admin::all(); // Mengambil semua data dari tabel admins
        return view('trash.index', compact('datas'));
    }


}
