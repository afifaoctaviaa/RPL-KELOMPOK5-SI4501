<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});

Route::post('/tambah-donasi', [DonasiController::class, 'store']);