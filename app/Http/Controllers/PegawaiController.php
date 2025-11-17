<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $name = "Aflah Fadlurrahman";
        $tanggal_lahir = Carbon::create(2006, 5, 24);
        $tgl_harus_wisuda = Carbon::create(2026, 7, 30);
        $current_semester = 3;
        $future_goal = "Menjadi Software Engineer
                        di perusahaan teknologi besar";

        // Hitung umur dari tanggal lahir (dibulatkan jadi integer)
        $my_age = intval($tanggal_lahir->diffInYears
                        (Carbon::now()));

        // Daftar hobi minimal 5
        $hobbies = ["Coding", "Bermain Game", "Desain UI", "Membaca Buku", "Fotografi"];

        // Hitung sisa hari menuju wisuda (dibulatkan jadi integer)
        $time_to_study_left = intval(Carbon::now()->diffInDays
                                    ($tgl_harus_wisuda, false));

        // Tentukan berdasarkan semester
        $motivasi = $current_semester < 3
            ? "Masih Awal, Kejar TAK!"
            : "Jangan main-main, kurangi main game!";

        return view('pegawai', [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toFormattedDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'motivasi' => $motivasi,
            'future_goal' => $future_goal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
