<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Function untuk menampilkan data matakuliah
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    // Function untuk menampilkan matakuliah berdasarkan kode
    public function show($param1 = null)
    {
        if ($param1 == 'ST445') {
            return view('halaman-matakuliah');
        }else{
             return view ('halaman-show');
        }
    }
}
