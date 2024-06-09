<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\faqController;
use App\Http\Controllers\DonasiController;

Route::get('/tambah-donasi', function () {
    return view('donasi.tambah-donasi');
});

Route::post('/tambah-donasi', [DonasiController::class, 'store']);
Route::get('/faq', [faqController::class, 'faqView'])->name('faq');

// manage faq
Route::get('/manageFaq', [faqController::class, 'manageFaq'])->name('manageFaq');
Route::get('/addFaqPage', [faqController::class, 'addFaqPage'])->name('addFaqPage');
Route::post('/addFaq', [faqController::class, 'addFaq'])->name('addFaq');
Route::get('/updateFaq/{id}', [faqController::class, 'updateFaq'])->name('updateFaq');
Route::post('/updateDataFaq/{id}', [faqController::class, 'update'])->name('updateDataFaq');
Route::get('/delete-faq/{id}', [faqController::class, 'delete'])->name("delete");
