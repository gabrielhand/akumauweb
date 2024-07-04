<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DataDMVilogController;
use App\Http\Controllers\DataGiftSkinController;
use App\Http\Controllers\DataJokiController;
use App\Http\Controllers\DukunganController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderManualController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingWebController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\TermsAndConditionalController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\UserDepositController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/allgames', [HomeController::class, 'allgames'])->name('allgames');
Route::get('/services', [ServicesController::class, 'services'])->name('services');
Route::get('/order/{kategori:kode}', [OrderController::class, 'create']);
Route::post('/order/harga', [OrderController::class, 'price'])->name('ajax.price');
Route::post('/order/konfirmasi-data', [OrderController::class, 'confirm'])->name('ajax.confirm-data');
Route::post('/order/pembelian', [OrderController::class, 'store'])->name('order');
Route::get('/cari', [CariController::class, 'create'])->name('cari');
Route::post('/cari', [CariController::class, 'store'])->name('cari.post');
Route::get('/pembelian/invoice/{order}', [InvoiceController::class, 'index'])->name('pembelian');
Route::get('/FAQ', [FaqController::class, 'create'])->name('faq');
Route::get('/dukungan', [DukunganController::class, 'create'])->name('dukungan');
Route::post('/dukungan', [DukunganController::class, 'postMessage'])->name('dukungan.post');
Route::get('/dukungan/message', [DukunganController::class, 'msg']);
Route::get('/about', [AboutController::class, 'create'])->name('about');
Route::get('/termandconditional', [TermsAndConditionalController::class, 'create'])->name('terms-and-conditions');
Route::get('/privacy', [PrivacyController::class, 'create'])->name('privacy');


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
    Route::get('/membership', [DashboardUserController::class, 'membership'])->name('membership');
    Route::post('/me/edit/image', [DashboardUserController::class, 'editProfileImage'])->name('editProfileImage');
    Route::post('/me/edit/profile', [DashboardUserController::class, 'editProfile'])->name('editProfile');
    Route::post('/me/edit/password', [DashboardUserController::class, 'editPassword'])->name('editPassword');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'create'])->name('dashboard');

    Route::get('/pesanan', [AdminOrderController::class, 'create'])->name('pesanan');
    Route::get('/order-status/{order_id}/{status}', [AdminOrderController::class, 'update']);

    Route::get('/data/joki', [DataJokiController::class, 'dataJoki'])->name('data.joki');
    Route::get('/joki-status/{order_id}/{status}', [DataJokiController::class, 'statusJoki']);
    Route::get('/joki/hapus/{id}', [DataJokiController::class, 'hapusJoki']);

    Route::get('/data/giftskin', [DataGiftSkinController::class, 'dataGiftSkin'])->name('data.giftskin');
    Route::get('/giftskin-status/{order_id}/{status}', [DataGiftSkinController::class, 'statusGiftSkin']);
    Route::get('/giftskin/hapus/{id}', [DataGiftSkinController::class, 'hapusGiftSkin']);

    Route::get('/data/dmvilog', [DataDMVilogController::class, 'dataDMVilog'])->name('data.dmvilog');
    Route::get('/dmvilog-status/{order_id}/{status}', [DataDMVilogController::class, 'statusDMVilog']);
    Route::get('/dmvilog/hapus/{id}', [DataDMVilogController::class, 'hapusDMVilog']);

    Route::get('/member', [MemberController::class, 'create'])->name('kmember');
    Route::get('/member/{id}/delete', [MemberController::class, 'delete'])->name('member.delete');
    Route::post('/member', [MemberController::class, 'store'])->name('member.post');
    Route::post('/send-balance', [MemberController::class, 'send'])->name('saldo.post');
    Route::get('/member/{id}/detail', [MemberController::class, 'show'])->name('member.detail');
    Route::post('/member/update', [MemberController::class, 'patch'])->name('member.detail.update');

    Route::get('/user-deposit', [UserDepositController::class, 'create'])->name('user.deposit');
    Route::get('/user-deposit/{id}/{status}', [UserDepositController::class, 'patch'])->name('confirm.deposit');

    Route::get('/berita', [BeritaController::class, 'create'])->name('berita');
    Route::post('/berita', [BeritaController::class, 'post'])->name('berita.post');
    Route::get('/berita/hapus/{id}', [BeritaController::class, 'delete'])->name('berita.delete');

    //Payment
    Route::get('/method', [MethodController::class, 'create'])->name('method');
    Route::post('/method', [MethodController::class, 'store'])->name('method.post');
    Route::get('/method/hapus/{id}', [MethodController::class, 'delete'])->name('method.delete');
    Route::post('/method/update', [MethodController::class, 'patch'])->name('method.detail.update');

    Route::get('/method/{id}/detail', [MethodController::class, 'detail'])->name('method.detail');
    Route::post('/method/{id}/detail', [MethodController::class, 'patch'])->name('method.detail.update');

    Route::get('/setting/web', [SettingWebController::class, 'settingWeb'])->name('setting-web.index');
    Route::post('/setting/web', [SettingWebController::class, 'saveSettingWeb'])->name('setting-web.post');
    Route::post('/setting/snk', [SettingWebController::class, 'saveSyaratKetentuan']);
    Route::post('/setting/warnaweb', [SettingWebController::class, 'saveSettingWarna'])->name('warna-web.post');
    Route::post('/setting/hargamembership', [SettingWebController::class, 'saveHargaMembership'])->name('harga-mbr.post');
    Route::post('/setting/tripay', [SettingWebController::class, 'saveSettingTripay'])->name('tripay.post');
    Route::post('/setting/digiflazz', [SettingWebController::class, 'saveSettingDigiflazz'])->name('digiflazz.post');
    Route::post('/setting/apigames', [SettingWebController::class, 'saveSettingApigames'])->name('apigames.post');
    Route::post('/setting/vip', [SettingWebController::class, 'saveSettingVip'])->name('vip-reseller.post');
    Route::post('/setting/wagateway', [SettingWebController::class, 'saveSettingWagateway'])->name('wagateway.post');
    Route::post('/setting/mutasi', [SettingWebController::class, 'saveSettingMutasi'])->name('mutasi-ewallet.post');
    Route::post('/setting/sloganweb', [SettingWebController::class, 'saveSlogan'])->name('slogan-web.post');
    Route::post('/setting/tentang-kami', [SettingWebController::class, 'saveAbout'])->name('tentang-kami.post');

    Route::get('/kategori', [KategoriController::class, 'create'])->name('kategori');
    Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.post');
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::get('/kategori-status/{id}/{status}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/kategori/{id}/detail', [KategoriController::class, 'detail'])->name('kategori.detail');
    Route::post('/kategori/{id}/detail', [KategoriController::class, 'patch'])->name('kategori.detail.update');

    Route::get('/subkategori', [SubCategoriesController::class, 'create'])->name('subkategori');
    Route::post('/subkategori', [SubCategoriesController::class, 'store'])->name('subkategori.post');
    Route::get('/subkategori/hapus/{id}', [SubCategoriesController::class, 'destroy'])->name('subkategori.delete');

    Route::resource('tipes', TipeController::class);

    Route::get('/layanan', [LayananController::class, 'create'])->name('layanan');
    Route::get('/ajax/getsubkat', [LayananController::class, 'getSubCategories'])->name('ajax.getsub');
    Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.post');
    Route::get('/layanan/hapus/{id}', [LayananController::class, 'delete'])->name('layanan.delete');
    Route::get('/layanan-status/{id}/{status}', [LayananController::class, 'update'])->name('layanan.update');

    Route::get('/layanan/{id}/detail', [LayananController::class, 'detail'])->name('layanan.detail');
    Route::post('/layanan/{id}/detail', [LayananController::class, 'patch'])->name('layanan.detail.update');

    Route::get('/voucher', [VoucherController::class, 'create'])->name('voucher');
    Route::post('/voucher', [VoucherController::class, 'store'])->name('voucher.post');
    Route::get('/voucher/{id}/delete', [VoucherController::class, 'destroy'])->name('voucher.delete');
    Route::get('/voucher/{id}/detail', [VoucherController::class, 'show'])->name('voucher.detail');
    Route::post('/voucher/{id}/update', [VoucherController::class, 'patch'])->name('voucher.detail.update');

    Route::get('/pesanan/manual', [OrderManualController::class, 'orderManual'])->name('orderManual');
    Route::post('/pesanan/manual/ajax/layanan', [OrderManualController::class, 'ajaxLayanan']);
    Route::post('/pesanan/manual', [OrderManualController::class, 'order'])->name('order-manual.post');
});
