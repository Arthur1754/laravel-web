<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller {
    
    public function index() {

    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show(string $id) {
        // return "Data Mahasiswa: ".$id;

        if ($id == 'detail') {
            return view('halaman-mahasiswa-detail');
        } else if ($id == 'profil') {
            return view('halaman-mahasiswa-profil');
        }
    }

    public function edit(string $id) {

    }

    public function update(Request $request, string $id) {

    }

    public function destroy(string $id) {

    }
}
