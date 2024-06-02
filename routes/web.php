<?php

use App\Http\Controllers\CariController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/allgames', [HomeController::class, 'allgames'])->name('allgames');
Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/order/{kategori:kode}', [OrderController::class, 'create']);
Route::post('/order/harga', [OrderController::class, 'price'])->name('ajax.price');
Route::get('/cari', [CariController::class, 'create'])->name('cari');
Route::post('/cari', [CariController::class, 'store'])->name('cari.post');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('post.login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('post.register');
});
