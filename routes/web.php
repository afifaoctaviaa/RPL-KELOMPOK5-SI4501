<?php

use App\Http\Controllers\Artikelcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\ArtikelControllerAdmin;
use App\Http\Controllers\ConfirmationController;


Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});

Route::get('/', function () {
    return view('landingpage');
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
Route::get('/riwayat-donasi-admin', [ConfirmationController::class, 'getdata'])->middleware('auth');
//Route::get('/riwayat-donasi-admin/approve/{id}', [ConfirmationController::class, 'update'])->middleware('auth');
//Route::get('/riwayat-donasi-admin/reject/{id}', [ConfirmationController::class, 'update'])->middleware('auth');
Route::get('/riwayat-donasi-admin/delete/{id}', [ConfirmationController::class, 'getdata'])->middleware('auth');
Route::resource('/riwayat-donasi-admin', KonfirmasiController::class)->middleware('auth');
Route::put('/riwayat-donasi-admin', [KonfirmasiController::class, 'getdata'])->middleware('auth');
//Route::get('/confirmation-update/{id}', [ConfirmationController::class, 'confirmation'])->middleware('auth');
//Route::get('/confirmation-update/{id}', [ConfirmationController::class, 'showdata'])->middleware('auth');
//Route::put('/confirmation-update/{id}', [ConfirmationController::class, 'showdata'])->middleware('auth');

//Artikel
Route::resource('/artikel-admin', ArtikelControllerAdmin::class)->middleware('auth');

Route::get('/artikel', [Artikelcontroller::class, 'index'])->middleware('auth');
Route::get('/artikel/tambah', [Artikelcontroller::class, 'create'])->middleware('auth');
Route::post('/artikel/tambah', [Artikelcontroller::class, 'store'])->middleware('auth');
Route::get('/artikel/edit/{slug}', [Artikelcontroller::class, 'edit'])->middleware('auth');
Route::patch('/artikel/edit/{slug}', [Artikelcontroller::class, 'update'])->middleware('auth');
Route::delete('/artikel/{id}', [Artikelcontroller::class, 'destroy'])->middleware('auth');

Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');



