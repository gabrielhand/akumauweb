<?php

use App\Http\Controllers\CariController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DukunganController;
use App\Http\Controllers\FaqController;
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
Route::get('/FAQ', [FaqController::class, 'create'])->name('faq');
Route::get('/dukungan', [DukunganController::class, 'create'])->name('dukungan');


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('post.login');
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('post.register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/me', [DashboardUserController::class, 'profile'])->name('profile');
    Route::get('/riwayat', [DashboardUserController::class, 'riwayat'])->name('riwayat');
    Route::post('/me/edit/image', [DashboardUserController::class, 'editProfileImage'])->name('editProfileImage');
    Route::post('/me/edit/profile', [DashboardUserController::class, 'editProfile'])->name('editProfile');
    Route::post('/me/edit/password', [DashboardUserController::class, 'editPassword'])->name('editPassword');
});
