<?php

use App\Http\Controllers\Artikelcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelControllerAdmin;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\MitraApprovalController;
use App\Http\Controllers\MitraController;

Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});

Route::get('/', function () {
    return view('landingpage');
});



Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});



Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});
//Rute Registrasi
Route::get('/registrasi', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);
//Rute Login & Logout
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//Rute Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboardadmin', [DashboardController::class, 'admin'])->middleware('auth');
//Rute Donasi User
Route::post('/tambah-donasi', [DonasiController::class, 'store'])->middleware('auth');
Route::get('/riwayat-donasi', [DonasiController::class, 'showdonasi'])->middleware('auth');
Route::get('/riwayat-donasi/delete/{id}', [DonasiController::class, 'deletedonasi'])->middleware('auth');
//Route Donasi Admin

Route::get('/verifikasi', [ConfirmationController::class, 'getdata'])->middleware('auth');
Route::get('/verifikasi-update/{id}', [ConfirmationController::class, 'showdata'])->middleware('auth');
Route::put('/verifikasi-update/{id}', [ConfirmationController::class, 'update'])->middleware('auth');


//Artikel

Route::get('/artikel', [Artikelcontroller::class, 'index'])->middleware('auth');
Route::get('/artikel/tambah', [Artikelcontroller::class, 'create'])->middleware('auth');
Route::post('/artikel/tambah', [Artikelcontroller::class, 'store'])->middleware('auth');
Route::get('/artikel/edit/{slug}', [Artikelcontroller::class, 'edit'])->middleware('auth');
Route::patch('/artikel/edit/{slug}', [Artikelcontroller::class, 'update'])->middleware('auth');
Route::delete('/artikel/{id}', [Artikelcontroller::class, 'destroy'])->middleware('auth');
// Notifikasi
Route::get('/notifikasi', [NotificationController::class, 'index']);

//User Baca Artikel
Route::get('/show-artikel', [Artikelcontroller::class, 'showArtikel']);
Route::get('/show-artikel/{id}', [Artikelcontroller::class, 'detailArtikel']);

//Manage User
Route::resource('manageuser', ManageUserController::class);

//Approval Mitra
Route::resource('mitra', MitraApprovalController::class);


// Menampilkan daftar pengajuan mitra
Route::get('pengajuanmitra', [MitraController::class, 'index'])->name('pengajuanmitra.index');
Route::get('pengajuanmitra/create', [MitraController::class, 'create'])->name('pengajuanmitra.create');
Route::post('pengajuanmitra', [MitraController::class, 'store'])->name('pengajuanmitra.store');
Route::get('pengajuanmitra/{id}', [MitraController::class, 'show'])->name('pengajuanmitra.show');
Route::get('pengajuanmitra/{id}/edit', [MitraController::class, 'edit'])->name('pengajuanmitra.edit');
Route::put('pengajuanmitra/{id}', [MitraController::class, 'update'])->name('pengajuanmitra.update');
Route::delete('pengajuanmitra/{id}', [MitraController::class, 'destroy'])->name('pengajuanmitra.destroy');


