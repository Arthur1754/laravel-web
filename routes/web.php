<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\QuestionController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\PelangganController;

use App\Http\Controllers\DashboardController;




//Mahasiswa 📖🎓
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Hello Mahasiswa';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama Saya: '.$param1;
});


Route::get('/nim/{param1}', function ($param1) {
    return 'Nim Saya: '.$param1;
});

route::get('/mahasiswa/{param1}', [MahasiswaController::class,'show']);

Route::get('/about', function () {
    return view ('halaman-about');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']);


//Home🏠
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/question/store', [QuestionController::class, 'store'])
        ->name('question.store');

Route::get('/auth', [AuthController::class, 'index']);

Route::get('/auth/login', [AuthController::class, 'login']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
