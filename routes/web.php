<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

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
