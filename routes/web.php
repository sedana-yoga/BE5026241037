<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert1', function () {
    return view('pertemuan1-intro');
});

Route::get('pert2', function () {
    return view('pertemuan2-news');
});

Route::get('pert2-1', function () {
    return view('pertemuan2-news1');
});

Route::get('pert3', function () {
    return view('pertemuan3-responsive');
});

Route::get('tpert3', function () {
    return view('tugaspertemuan3');
});

Route::get('tpert4', function () {
    return view('tugaspertemuan4');
});

Route::get('pert5', function () {
    return view('pertemuan5-arsha');
});

Route::get('tlinktree', function () {
    return view('tugaslinktree');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::get('/formulir/proses', [PegawaiDBController::class, 'proses']);

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD Tugas Pra EAS
Route::get('/keyboard', [KeyboardController::class, 'index']);
Route::get('/keyboard/tambah', [KeyboardController::class, 'tambah']);
Route::post('/keyboard/store', [KeyboardController::class, 'store']);
Route::get('/keyboard/edit/{id}', [KeyboardController::class, 'edit']);
Route::post('/keyboard/update', [KeyboardController::class, 'update']);
Route::get('/keyboard/hapus/{id}', [KeyboardController::class, 'hapus']);
Route::get('/keyboard/cari', [KeyboardController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
