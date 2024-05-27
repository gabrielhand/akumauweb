<?php

use App\Http\Controllers\CariController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/allgames', [HomeController::class, 'allgames'])->name('allgames');
Route::get('/order/{kategori:kode}', [OrderController::class, 'create']);
Route::get('/cari', [CariController::class, 'create'])->name('cari');
Route::post('/cari', [CariController::class, 'store'])->name('cari.post');
