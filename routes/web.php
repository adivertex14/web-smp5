<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;

Route::get('/', [AppController::class, 'index']);

// ✅ Login routes → hanya untuk tamu (belum login)
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// ✅ Public Pages
Route::view('/berita', 'berita.berita');
Route::view('/detail-berita', 'berita.detail-berita');
Route::view('/galeri', 'foto.galeri');
Route::view('/profil', 'profil');
Route::view('/prestasi', 'prestasi');
Route::view('/hubungi', 'hubungi');

// ✅ Routes untuk user login (admin, guru, siswa)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ✅ Dashboard berdasarkan role
    Route::middleware('auth')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
        Route::get('/guru/dashboard', [DashboardController::class, 'guru'])->name('guru.dashboard');
        Route::get('/siswa/dashboard', [DashboardController::class, 'siswa'])->name('siswa.dashboard');
    });


    // Blog fitur hanya untuk user login
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

Route::resource('/siswa', SiswaController::class)->middleware('auth');
Route::resource('/guru', GuruController::class)->middleware('auth');
// Route::resource('/nilai', NilaiController::class)->middleware('auth');


Route::middleware(['auth'])->group(function () {
    Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
    Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
    Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
});

Route::get('/get-siswa-by-kelas/{kelas_id}', function ($kelas_id) {
    $siswas = \App\Models\Siswa::where('kelas_id', $kelas_id)->get(['id', 'nama']);
    return response()->json($siswas);
});

Route::get('/siswa-by-kelas/{kelasId}', function ($kelasId) {
    $siswas = Siswa::where('kelas_id', $kelasId)->get(['id', 'nama']);
    return response()->json($siswas);
});


// Route::middleware(['auth', 'role:guru'])->group(function () {
//     Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
//     Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
//     Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
// });

// Route::middleware(['auth', 'role:siswa'])->group(function () {
//     Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
// });
