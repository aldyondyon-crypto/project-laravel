<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// Halaman Publik Portal Sekolah
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/profil', [FrontendController::class, 'profile'])->name('profile');
Route::get('/fasilitas', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/galeri', [FrontendController::class, 'galleries'])->name('galleries');

// Ekstrakurikuler
Route::get('/ekstrakurikuler', [FrontendController::class, 'extracurriculars'])->name('extracurriculars');

// Kontak / Pesan
Route::get('/kontak', [FrontendController::class, 'contact'])->name('contact');
Route::post('/kontak', [FrontendController::class, 'storeContact'])->name('contact.store');