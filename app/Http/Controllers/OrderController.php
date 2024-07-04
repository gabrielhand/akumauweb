<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Methods;
use App\Models\Pembayarans;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use App\Models\SubCategories;
use App\Models\User;
use App\Models\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Kategoris $kategori)
    {
        $settings = Setting_Web::select('logo_header', 'slogan_web', 'url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();

        $data = Kategoris::where('kode', $kategori->kode)->select('nama', 'sub_nama', 'server_id', 'thumbnail', 'id', 'kode', 'tipe_id', 'petunjuk', 'bannerlayanan', 'ket_layanan', 'ket_id', 'placeholder_1', 'placeholder_2')->with('tipe')->first();

        $getSubCategory = SubCategories::where('category_id', $data->id)->where('active', 1)->get();

        $normalSubCategory['id'] = 0;
        $normalSubCategory['category_id'] = $data->id;
        $normalSubCategory['code'] = "normal";
        $normalSubCategory['name'] = "Topup";
        $normalSubCategory['active'] = 1;

        $arraySubCategory = collect($getSubCategory)->toArray();

        array_push($arraySubCategory, $normalSubCategory);

        if ($data == null)
            return back();

        if (Auth::check()) {
            if (Auth::user()->role == "Member") {
                $layanan = Layanans::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'sub_category_id', 'layanan', 'product_logo', 'harga_member AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->orderBy('harga', 'asc')->get();
            } else if (Auth::user()->role == "Reseller" || "Admin") {
                $layanan = Layanans::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'sub_category_id', 'layanan', 'product_logo', 'harga_reseller AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->orderBy('harga', 'asc')->get();
            }
        } else {
            $layanan = Layanans::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'sub_category_id', 'layanan', 'product_logo', 'harga_member AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->orderBy('harga', 'asc')->get();
        }

        return view('page.order', [
            'judul_web' => $data->nama ?? '',
            'sub' => $arraySubCategory,
            'jumlah' => Pembelians::where('status', 'Success')
                ->whereHas('layanan.kategori', function ($query) use ($data) {
                    $query->where('nama', $data->nama);
                })
                ->count(),
            'kategori' => $data,
            'nominal' => $layanan,
            'harga' => $layanan,
            'logo_header' =>  $settings->logo_header ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'pay_method' => Methods::all(),
            'kategori_all' => Kategoris::where('status', 'active')->with('tipe')->get()
        ]);
    }

    public function price(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->role == "Member") {
                $data = Layanans::where('id', $request->nominal)->select('harga_member AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
            } else if (Auth::user()->role == "Reseller" || Auth::user()->role == "Admin") {
                $data = Layanans::where('id', $request->nominal)->select('harga_reseller AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
            }
        } else {
            $data = Layanans::where('id', $request->nominal)->select('harga_member AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
        }

        if ($data->is_flash_sale == 1 && $data->expired_flash_sale >= date('Y-m-d')) {

            $data->harga = $data->harga_flash_sale;

        }

        if (isset($request->voucher)) {
            $voucher = Vouchers::where('kode', $request->voucher)->first();

            if (!$voucher) {
                $data->harga = $data->harga;
            } else {
                if ($voucher->stock == 0) {
                    $data->harga = $data->harga;
                } else {
                    $potongan = $data->harga * ($voucher->promo / 100);
                    if ($potongan > $voucher->max_potongan) {
                        $potongan = $voucher->max_potongan;
                    }

                    $data->harga = $data->harga - $potongan;
                }
            }

        }

        return response()->json([
            'status' => true,
            'harga' => "Rp. " . number_format($data->harga, 0, '.', ',')
        ]);
    }

    public function confirm(Request $request)
    {
        if ($request->ktg_tipe == 'joki') {

            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);

        } else if ($request->ktg_tipe == 'dm_vilog') {

            $request->validate([
                'email_vilog' => 'required',
                'password_vilog' => 'required',
                'loginvia_vilog' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);


        } else {

            $request->validate([
                'uid' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);

        }

        $item = Layanans::where('id', $request->service)->first();

        $produk = Kategoris::where('id', $item->kategori_id)->first();

        $apicheck = new ApiCheckController();

        if (Auth::user()) {
            $dataLayanan = Layanans::where('id', $request->service)->select('harga_member AS harga', 'kategori_id', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
            $dataLayanan = Layanans::where('id', $request->service)->select('harga_reseller AS harga', 'kategori_id', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
            // $dataLayanan = Layanan::where('id', $request->service)->select('harga_gold AS harga', 'kategori_id', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
        } else {
            $dataLayanan = Layanans::where('id', $request->service)->select('harga', 'kategori_id', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale')->first();
        }

        if ($dataLayanan->is_flash_sale == 1 && $dataLayanan->expired_flash_sale >= date('Y-m-d')) {

            $dataLayanan->harga = $dataLayanan->harga_flash_sale;

        }

        if (isset($request->voucher)) {
            $voucher = Vouchers::where('kode', $request->voucher)->first();

            if (!$voucher) {
                $dataLayanan->harga = $dataLayanan->harga;
            } else {
                if ($voucher->stock == 0) {
                    $dataLayanan->harga = $dataLayanan->harga;
                } else {
                    $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                    if ($potongan > $voucher->max_potongan) {
                        $potongan = $voucher->max_potongan;
                    }

                    $dataLayanan->harga = $dataLayanan->harga - $potongan;
                }
            }

        }

        $dataKategori = Kategoris::where('id', $dataLayanan->kategori_id)->select('kode', 'tipe_id')->with('tipe')->first();

        $daftarGameValidasi = ['gift-skin-ml', '8-ball-pool', 'arena-of-valor', 'apex-legends', 'call-of-duty', 'dragon-city', 'free-fire', 'higgs-domino', 'honkai-impact', 'lords-mobile', 'marvel-super-war', 'mobile-legend', 'mobile-legends', 'mobile-legends-adventure', 'point-blank', 'ragnarok-m', 'tom-and-jerry', 'top-eleven', 'valorant'];

        info($dataKategori->kode);

        if (in_array($dataKategori->kode, $daftarGameValidasi)) {
            if ($dataKategori->kode == '8-ball-pool') {
                $data = $apicheck->check($request->uid, null, '8 Ball Pool');
            } else if ($dataKategori->kode == "arena-of-valor") {
                $data = $apicheck->check($request->uid, null, 'AOV');
            } else if ($dataKategori->kode == 'apex-legends') {
                $data = $apicheck->check($request->uid, null, 'Apex Legends');
            } else if ($dataKategori->kode == 'call-of-duty') {
                $data = $apicheck->check($request->uid, null, 'Call Of Duty');
            } else if ($dataKategori->kode == 'dragon-city') {
                $data = $apicheck->check($request->uid, null, 'Dragon City');
            } else if ($dataKategori->kode == "dragon-raja") {
                $data = $apicheck->check($request->uid, null, 'Dragon Raja');
            } else if ($dataKategori->kode == "free-fire") {
                $data = $apicheck->check($request->uid, null, 'Free Fire');
            } else if ($dataKategori->kode == "higgs-domino") {
                $data = $apicheck->check($request->uid, null, 'Higgs Domino');
            } else if ($dataKategori->kode == "honkai-impact") {
                $data = $apicheck->check($request->uid, null, 'Honkai Impact');
            } else if ($dataKategori->kode == "lords-mobile") {
                $data = $apicheck->check($request->uid, null, 'Lords Mobile');
            } else if ($dataKategori->kode == "marvel-super-war") {
                $data = $apicheck->check($request->uid, null, 'Marvel Super War');
            } else if ($dataKategori->kode == 'mobile-legends' || $dataKategori->kode == 'gift-skin-ml') {
                $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
            } else if ($dataKategori->kode == 'mobile-legend') {
                $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
            } else if ($dataKategori->kode == 'mobile-legends-adventure') {
                $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends Adventure');
            } else if ($dataKategori->kode == "point-blank") {
                $data = $apicheck->check($request->uid, null, 'Point Blank');
            } else if ($dataKategori->kode == "ragnarok-m") {
                $data = $apicheck->check($request->uid, $request->zone, 'Ragnarok M');
            } else if ($dataKategori->kode == "tom-and-jerry") {
                $data = $apicheck->check($request->uid, null, 'Tom Jerry Chase');
            } else if ($dataKategori->kode == "top-eleven") {
                $data = $apicheck->check($request->uid, null, 'Top Eleven');
            } elseif ($dataKategori->kode == "valorant") {
                $data = $apicheck->check($request->uid, null, 'Valorant');
            }
            if ($data['status']['code'] == 1) {
                return response()->json([
                    'status' => false,
                    'data' => isset($data['data']['msg']) ? $data['data']['msg'] : 'Username tidak ditemukan atau coba lagi nanti'
                ]);
            }
            $username = $data['data']['userNameGame'];

            $sendData = "
                <div class='flex flex-col items-center pt-10 gap-3'>
                    <h3 class='font-bold text-sm md:text-lg text-white'>Konfirmasi Pesanan Anda</h3>
                    <p class='text-xs md:text-sm text-center text-white'>Pastikan data pemesanan telah
                        sesuai,
                        Lalu kamu bisa klik <strong>Lanjutkan Pembayaran</strong></p>
                    <div class='flex justify-start w-full items-center gap-3'>
                        <figure class='bg-slate-200 rounded-lg' style='width: 64px;'>
                            <img alt='product-img' loading='lazy' width='64' height='64' decoding='async'
                                data-nimg='1' class='rounded-lg' sizes='(max-width: 768px) 100vw, 100px'
                                src='https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=3840&amp;q=75'
                                style='color: transparent;'>
                        </figure>
                        <div class='gap-3 text-xs md:text-sm  text-white'>
                            <p class='desc' id='product'>" . $item->layanan . "</p>
                        </div>
                    </div>
                    <div class='rounded-lg border shadow-sm bg-white w-full text-black p-3 space-y-2.5'>
                        <p class='font-semibold text-xs md:text-sm'>Detail Data User</p>
                        <div class='flex flex-col gap-1.5'>
                            <div class='flex justify-between w-full text-sm'>
                                <p>User ID</p>
                                <p class='desc' id='id_player'>$request->uid</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Server</p>
                                <p>$request->zone</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Data</p>
                                <p>$request->uid|$request->zone</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Nickname</p>
                                <p class='desc' id='nickname'>" . urldecode($username) . "</p>
                            </div>
                        </div>
                    </div>
                    <div class='rounded-lg border shadow-sm bg-white w-full text-black p-3 space-y-2.5'>
                        <p class='font-semibold text-xs md:text-sm'>Detail Pembayaran</p>
                        <div class='flex flex-col gap-1.5'>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Pembayaran</p>
                                <p class='desc leading-none' id='metode_bayar'>" . strtoupper($request->payment_method) . "</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Harga</p>
                                <p class='desc' id='price'>Rp " . number_format($dataLayanan->harga, 0, '.', ',') . "</p>
                            </div>
                            {{-- <div class='flex justify-between w-full text-sm'>
                                <p>Potongan Harga</p>
                                <p>Rp 0,-</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Kontak</p>
                                <p>085172351072</p>
                            </div>
                            <div class='flex justify-between w-full text-sm'>
                                <p>Total Bayar</p>
                                <p class='desc txt-primary' id='total_bayar'>Rp 1.438,-</p>
                            </div> --}}
                            <p class='text-xs mt-2 text-gray-400'>*Harga di Atas Belum Termasuk Biaya Admin</p>
                        </div>
                    </div>
                    <div class='rounded-lg border shadow-sm bg-white w-full text-black p-3 space-y-2.5'>
                        <div class='flex flex-col gap-3 md:flex-row justify-between items-center'>
                            <div class='space-y-2'>
                                <figure class='w-full'><img alt='payment-method' loading='lazy' width='64'
                                        height='64' decoding='async' data-nimg='1' class=''
                                        sizes='(max-width: 768px) 100vw, 100px'
                                        src='https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75'
                                        style='color: transparent;'></figure>
                                <p class='font-bold'>Rp 1.438,-</p>
                            </div>
                            <div class='space-y-1'><button
                                    class='inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-purple-500 text-white hover:bg-purple-500/80 h-11 rounded-md px-8'>Lanjutkan
                                    Pembayaran</button>
                                <div class='flex items-center gap-1.5 text-right justify-end'><svg
                                        xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                                        aria-hidden='true' data-slot='icon' class='w-5 h-5 text-purple-500'>
                                        <path fill-rule='evenodd'
                                            d='M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z'
                                            clip-rule='evenodd'></path>
                                    </svg>
                                    <p class='text-xs text-right'>Pembayaran anda terjamin aman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
";



            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);
        } else if ($dataKategori->tipe == 'dm_vilog') {

            $sendData = "
                <p class='text-sm'>Jika Data Pesanan Kamu Sudah Benar Klik <strong>Beli Sekarang</strong></p>
            </div>
            <div class='mt-6 space-y-2'>
                <div class='flex items-center gap-2'>
                    <div class='w-4 border-t-2' style='border-color: var(--warna_5);'></div>
                    <h4 class='shrink-0 pr-4 text-sm font-semibold'>Data Player</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>EMAIL</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $request->email_vilog . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm uppercase'>PASSWORD</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $request->password_vilog . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm uppercase'>LOGIN</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>Via " . $request->loginvia_vilog . "</h4>
                </div>
            </div>
            <div class='mt-6 space-y-2'>
                <div class='flex items-center gap-2'>
                    <div class='w-4 border-t-2' style='border-color: var(--warna_5);'></div>
                    <h4 class='shrink-0 pr-4 text-sm font-semibold'>Ringkasan Pembelian</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Item</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $item->layanan . "</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Produk</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $produk->nama . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Sistem Pembayaran</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . strtoupper($request->payment_method) . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Harga</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-extrabold'>Rp " . number_format($dataLayanan->harga, 0, '.', ',') . "</h4>
                </div>
                <p class='text-sm' style='color: var(--warna_5);'><strong>Note: Harga di Atas Belum Termasuk Biaya Admin</strong></p>
            </div>
        </div>
";

            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);

        } else if ($dataKategori->tipe == 'joki') {

            $sendData = "
                <p class='text-sm'>Jika Data Pesanan Kamu Sudah Benar Klik <strong>Beli Sekarang</strong></p>
            </div>
            <div class='mt-6 space-y-2'>
                <div class='flex items-center'>
                    <h2 class='shrink-0 pr-4 text-sm font-semibold' style='font-weight: bold;'>Data Player</h2>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>EMAIL</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $request->email_joki . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm uppercase'>PASSWORD</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $request->password_joki . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm uppercase'>LOGIN</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>Via " . $request->loginvia_joki . "</h4>
                </div>
            </div>
            <div class='mt-6 space-y-2'>
                <div class='flex items-center gap-2'>
                    <div class='w-4 border-t-2' style='border-color: var(--warna_5);'></div>
                    <h4 class='shrink-0 pr-4 text-sm font-semibold'>Ringkasan Pembelian</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Item</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $item->layanan . "</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Produk</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $produk->nama . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Sistem Pembayaran</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . strtoupper($request->payment_method) . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Harga</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-extrabold'>Rp " . number_format($dataLayanan->harga, 0, '.', ',') . "</h4>
                </div>
                <p class='text-sm' style='color: var(--warna_5);'><strong>Note: Harga di Atas Belum Termasuk Biaya Admin</strong></p>
            </div>
        </div>";

            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);

        } else {
            $sendData = "
                <p class='text-sm ' >Jika Data Pesanan Kamu Sudah Benar Klik <strong>Beli Sekarang</strong></p>
            </div>
            <div class='mt-6 space-y-2' style='margin-top:20px;'>
                <div class='flex items-center gap-2'>
                    <div class='w-4 border-t-2' style='border-color: var(--warna_5);'></div>
                    <h4 class='shrink-0 pr-4 text-sm font-semibold'>Data Player</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>ID PENGGUNA</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>$request->uid</h4>
                </div>
            </div>
            <div class='mt-6 space-y-2'>
                <div class='flex items-center gap-2'>
                    <div class='w-4 border-t-2' style='border-color: var(--warna_5);'></div>
                    <h4 class='shrink-0 pr-4 text-sm font-semibold'>Ringkasan Pembelian</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Item</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $item->layanan . "</h4>
                </div>
				<div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Produk</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . $produk->nama . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Sistem Pembayaran</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-bold'>" . strtoupper($request->payment_method) . "</h4>
                </div>
                <div class='flex justify-between'>
                    <h4 class='shrink-0 pr-4 text-sm'>Harga</h4>
                    <h4 class='shrink-0 pr-4 text-sm font-extrabold'>Rp " . number_format($dataLayanan->harga, 0, '.', ',') . "</h4>
                </div>
                <p class='text-sm' style='color: var(--warna_5);'><strong>Note: Harga di Atas Belum Termasuk Biaya Admin</strong></p>
            </div>
        </div>";

            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);
        }

    }

    public function store(Request $request)
    {
        info($request);
        if ($request->ktg_tipe == 'joki') {

            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);

        } else if ($request->ktg_tipe == 'dm_vilog') {

            $request->validate([
                'email_vilog' => 'required',
                'password_vilog' => 'required',
                'loginvia_vilog' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);


        } else {

            $request->validate([
                'uid' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',

            ]);

        }


        if (Auth::user()) {
            $dataLayanan = Layanans::where('id', $request->service)->select('layanan', 'harga_reseller AS harga', 'kategori_id', 'provider_id', 'provider', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale', 'profit_reseller AS profit')->first();
            $dataLayanan = Layanans::where('id', $request->service)->select('layanan', 'harga_platinum AS harga', 'kategori_id', 'provider_id', 'provider', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale', 'profit_platinum AS profit')->first();
            $dataLayanan = Layanans::where('id', $request->service)->select('layanan', 'harga_gold AS harga', 'kategori_id', 'provider_id', 'provider', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale', 'profit_gold AS profit')->first();
        } else {
            $dataLayanan = Layanans::where('id', $request->service)->select('layanan', 'harga', 'kategori_id', 'provider_id', 'provider', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_sale', 'profit')->first();
        }

        if ($dataLayanan->is_flash_sale == 1 && $dataLayanan->expired_flash_sale >= date('Y-m-d')) {

            $dataLayanan->harga = $dataLayanan->harga_flash_sale;

        }

        if (isset($request->voucher)) {
            $voucher = Vouchers::where('kode', $request->voucher)->first();

            if (!$voucher) {
                $dataLayanan->harga = $dataLayanan->harga;
            } else {
                if ($voucher->stock == 0) {
                    $dataLayanan->harga = $dataLayanan->harga;
                } else {
                    $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                    if ($potongan > $voucher->max_potongan) {
                        $potongan = $voucher->max_potongan;
                    }

                    $dataLayanan->harga = $dataLayanan->harga - $potongan;
                    $voucher->decrement('stock');
                }
            }
        }

        $kategori = Kategoris::where('id', $dataLayanan->kategori_id)->select('kode')->first();

        $unik = date('Hs');
        $kode_unik = substr(str_shuffle(1234567890), 0, 3);
        $order_id = 'TOZ' . $unik . $kode_unik . 'ID';
        $tripay = new TriPayController();


        $rand = rand(1, 1000);
        $no_pembayaran = '';
        $amount = '';
        $reference = '';

        if ($request->payment_method == "SALDO") {
            $amount = $dataLayanan->harga;
        } else if ($request->payment_method == "shopeepay" || $request->payment_method == "dana" || $request->payment_method == "ovo" || $request->payment_method == "BCATF" || $request->payment_method == "MANDIRITF") {

            $amount = $dataLayanan->harga + $rand;
            $reference = '';
            if ($request->payment_method == "shopeepay") {
                $no_pembayaran = ENV("SHOPEEPAY_ADMIN");
            } else if ($request->payment_method == "dana") {
                $no_pembayaran = ENV("DANA_ADMIN");
            } else if ($request->payment_method == "ovo") {
                $no_pembayaran = ENV("OVO_ADMIN");
            } else if ($request->payment_method == "BCATF") {
                $no_pembayaran = ENV("BCA_ADMIN");
            } else if ($request->payment_method == "MANDIRITF") {
                $no_pembayaran = ENV("MANDIRI_ADMIN");
                if ($amount < 1000) {
                    return response()->json(['status' => false, 'data' => 'Minimum jumlah pembayaran untuk metode pembayaran ini adalah Rp 1.000']);
                }
            }
        } else {

            $duitku = new DuitkuController;
            $asd = $dataLayanan->harga * 1.09;
            info($asd);
            $tripayres = $duitku->request($asd, $request->payment_method, $order_id, $request->nomor, $order_id . '@gmail.com');
            // $tripayres = $tripay->request($order_id, $dataLayanan->harga, $request->payment_method, $order_id.'@email.com', $request->nomor);

            if (!$tripayres['success'])
                return response()->json(['status' => false, 'data' => $tripayres['message']]);

            $no_pembayaran = $tripayres['no_pembayaran'];
            $reference = $tripayres['reference'];
            $amount = $tripayres['amount'];

        }

        info($dataLayanan);


        if ($request->payment_method == "shopeepay" || $request->payment_method == "dana" || $request->payment_method == "ovo" || $request->payment_method == "BCATF" || $request->payment_method == "MANDIRITF") {
            $pesan =
                "*Nomor Pesanan: $order_id*\n\n" .
                "Pembelian *$dataLayanan->layanan* telah berhasil dipesan, saat ini kami sedang menunggu pembayaran anda melalui *$request->payment_method* dengan\n
            Jumlah = *Rp. " . number_format($amount, 0, '.', ',') . "*\n\n" .
                "Ke Nomor : *" . $no_pembayaran . "* (Tanpa dikurangi/Ditambah)\n\n" .
                "Harap melakukan pembayaran sebelum 1x24 jam setelah orderan anda dibuat.\n\n" .
                "Cek invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                "INI ADALAH PESAN OTOMATIS\n" .
                "TERIMA KASIH";
        } else if ($request->payment_method == "SALDO") {
            $pesan =
                "*Pembayaran Berhasil*\n\n" .
                "No Invoice: *$order_id*\n" .
                "Layanan: *$dataLayanan->layanan*\n" .
                "ID : *$request->uid*\n" .
                "Server : *$request->zone*\n" .
                "Nickname : *$request->nickname*\n" .
                "Harga: *Rp. " . number_format($amount, 0, '.', ',') . "*\n" .
                "Status Pembayaran: *Dibayar*\n" .
                "Metode Pembayaran: *$request->payment_method*\n\n" .
                "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                "INI ADALAH PESAN OTOMATIS";
        } else {
            $pesan =
                "*Menunggu Pembayaran*\n\n" .
                "No Invoice: *$order_id*\n" .
                "Layanan: *$dataLayanan->layanan*\n" .
                "ID : *$request->uid*\n" .
                "Server : *$request->zone*\n" .
                "Nickname : *$request->nickname*\n" .
                "Harga: *Rp. " . number_format($amount, 0, '.', ',') . "*\n" .
                "Status: *Menunggu Pembayaran*\n" .
                "Metode Pembayaran: *$request->payment_method*\n" .
                "Kode Bayar / Nomor VA : *" . $no_pembayaran . "*\n\n" .

                "*Harap Dibayar Sebelum 3 Jam!* Segera lakukan pembayaran sesuai dengan kode bayar / nomor VA yang tercantum. Pastikan nominal pembayaran juga sesuai dengan total bayar.\n\n" .
                "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                "INI ADALAH PESAN OTOMATIS\n\n" .
                "Terimakasih";
        }

        $tipe = '';

        if ($request->ktg_tipe == 'joki') {
            $tipe = 'joki';
        } else if ($request->ktg_tipe == 'dm_vilog') {
            $tipe = 'dm_vilog';
        } else if ($request->ktg_tipe == 'gift_skin') {
            $tipe = 'gift_skin';
        } else {
            $tipe = 'game';
        }


        if ($request->payment_method != "SALDO") {
            // $requestPesan = $this->msg($request->nomor,$pesan);

            $pembelian = new Pembelians();
            $pembelian->order_id = $order_id;
            $pembelian->user_id = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->uid : '-';
            $pembelian->zone = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->zone : '-';
            $pembelian->nickname = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->nickname : '-';
            $pembelian->layanan = $dataLayanan->layanan;
            $pembelian->harga = $amount;
            $pembelian->profit = $amount * ENV("MARGIN_PROFIT");
            $pembelian->status = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' || $request->ktg_tipe !== 'gift_skin' ? 'Pending' : '-';
            $pembelian->tipe_transaksi = $request->ktg_tipe !== 'joki' ? 'game' : 'joki';

            if ($tipe == 'dm_vilog') {
                $pembelian->email_vilog = $request->email_vilog;
                $pembelian->password_vilog = $request->password_vilog;
                $pembelian->loginvia_vilog = $request->loginvia_vilog;
            }

            $pembelian->save();

            $pembayaran = new Pembayarans();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $amount;
            $pembayaran->no_pembayaran = $no_pembayaran;
            $pembayaran->no_pembeli = $request->nomor;
            $pembayaran->status = 'Belum Lunas';
            $pembayaran->metode = $request->payment_method;
            $pembayaran->reference = $reference;
            $pembayaran->save();

            if ($request->ktg_tipe == 'joki') {


                $jokian = DB::table('data_joki')->insert([
                    'order_id' => $order_id,
                    'email_joki' => $request->email_joki,
                    'password_joki' => $request->password_joki,
                    'loginvia_joki' => $request->loginvia_joki,
                    'nickname_joki' => $request->nickname_joki,
                    'request_joki' => $request->request_joki,
                    'catatan_joki' => $request->catatan_joki,
                    'status_joki' => 'Proses',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

            }

        } else if ($request->payment_method == "SALDO") {
            $user = User::where('username', Auth::user()->username)->first();
            info($user);
            if ($dataLayanan->harga > $user->balance)
                return response()->json(['status' => false, 'data' => 'Saldo anda tidak cukup']);


            if ($dataLayanan->provider == "digiflazz") {
                $digi = new digiFlazzController;
                $provider_order_id = rand(1, 100000);
                $order = $digi->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);

                info($order);
                if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Sukses") {
                    $order['status'] = true;
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "vip") {
                $vip = new VipResellerController;
                $order = $vip->order($request->uid, $request->zone, $dataLayanan->provider_id);

                if ($order['result']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['trxid'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "bangjeff") {
                $bj = new bangjeffController;
                $order = $bj->buyv2($order_id, $request->uid, $request->zone, $dataLayanan->provider_id, $kategori->tipe);
                if (!$order['error']) {
                    $provider_order_id = $order['data']['invoiceNumber'];
                    $order['status'] = true;
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "apigames") {
                $provider_order_id = rand(1, 10000);
                $apigames = new ApiGamesController;
                $order = $apigames->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);
                info($order);
                if ($order['data']['status'] == "Sukses") {
                    $order['transactionId'] = $provider_order_id;
                    $order['status'] = true;
                } else {
                    $order['status'] = false;
                }
                
            } else if ($dataLayanan->provider == "gamepoint") {
                $gp = new GamePointController();
                $order = $gp->order($order_id, $dataLayanan->provider_id, $request->uid, $request->zone);

                if ($order['status']) {
                    $provider_order_id = $order['transactionId'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "meng") {
                $meng = new MengtopupController();
                $order = $meng->order($request->uid, $request->zone, $dataLayanan->provider_id);

                if ($order['status']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['id'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "mobapay") {
                $mobapay = new MobapayController();
                $order = $mobapay->order($request->uid, $request->zone, $dataLayanan->provider_id);

                if ($order['status']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['id'];
                } else {
                    $order['status'] = false;
                }
            }else if ($dataLayanan->provider == "bxystore") {
                $bxy = new BxystoreController();
                $order = $bxy->order($request->uid, $request->zone, $dataLayanan->provider_id);
                info($order);
                if ($order['status']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['id'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "evilbee") {
                $evil = new EvillController();

                $order = $evil->order($request->uid, $request->zone, $dataLayanan->provider_id);

                if ($order['status']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['id'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "alpha") {
                $alpha = new AlpharamzController();
                $order = $alpha->order($request->uid, $request->zone, $dataLayanan->provider_id);

                if ($order['status']) {
                    $order['status'] = true;
                    $provider_order_id = $order['data']['id'];
                } else {
                    $order['status'] = false;
                }
            } else if ($dataLayanan->provider == "joki") {
                $provider_order_id = '';
                $order['status'] = true;
            } else if ($dataLayanan->provider == "manual") {
                $provider_order_id = '';
                $order['status'] = true;
            } else if ($dataLayanan->provider == "dm_vilog") {
                $provider_order_id = '';
                $order['status'] = true;
            } else if ($dataLayanan->provider == "gift_skin") {
                $provider_order_id = '';
                $order['status'] = true;
            }


            if ($order['status']) {

                $pesan = "Pembayaran dengan order id : $order_id *TELAH LUNAS*\n\n" .
                    "LAYANAN : $dataLayanan->layanan\n" .
                    "ID : $request->uid($request->zone)\n" .
                    "NICKNAME : $request->nickname\n" .
                    "METODE PEMBAYARAN : $request->payment_method\n" .
                    "HARGA : Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "\n\n" .
                    "*Kontak Pembeli*\n" .
                    "No HP : $request->nomor\n" .
                    "Invoice : " . env("APP_URL") . "/pembelian/invoice/$order_id";


                // $requestPesan = $this->msg($request->nomor, $pesan);
                // $requestPesanAdmin = $this->msg(ENV("NOMOR_ADMIN"), $pesan);

                $user->update([
                    'balance' => $user->balance - $dataLayanan->harga
                ]);

                $pembelian = new Pembelians();
                $pembelian->username = Auth::user()->username;
                $pembelian->order_id = $order_id;
                $pembelian->user_id = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->uid : '-';
                $pembelian->zone = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->zone : '-';
                $pembelian->nickname = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' ? $request->nickname : '-';
                $pembelian->layanan = $dataLayanan->layanan;
                $pembelian->harga = $dataLayanan->harga;
                $pembelian->profit = $dataLayanan->harga * $dataLayanan->profit / 100;
                $pembelian->status = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' || $request->ktg_tipe !== 'gift_skin' ? 'Pending' : '-';
                $pembelian->provider_order_id = $provider_order_id ? $provider_order_id : "";
                $pembelian->log = $request->ktg_tipe !== 'joki' || $request->ktg_tipe !== 'dm_vilog' || $request->ktg_tipe !== 'gift_skin' ? json_encode($order) : '';
                $pembelian->tipe_transaksi = $tipe;


                if ($tipe == 'dm_vilog') {
                    $pembelian->email_vilog = $request->email_vilog;
                    $pembelian->password_vilog = $request->password_vilog;
                    $pembelian->loginvia_vilog = $request->loginvia_vilog;
                }

                $pembelian->save();

                $pembayaran = new Pembayarans();
                $pembayaran->order_id = $order_id;
                $pembayaran->harga = $dataLayanan->harga;
                $pembayaran->no_pembayaran = "SALDO";
                $pembayaran->no_pembeli = $request->nomor;
                $pembayaran->status = 'Lunas';
                $pembayaran->metode = $request->payment_method;
                $pembayaran->reference = $reference;
                $pembayaran->save();

                if ($request->ktg_tipe == 'joki') {


                    $jokian = DB::table('data_joki')->insert([
                        'order_id' => $order_id,
                        'email_joki' => $request->email_joki,
                        'password_joki' => $request->password_joki,
                        'loginvia_joki' => $request->loginvia_joki,
                        'nickname_joki' => $request->nickname_joki,
                        'request_joki' => $request->request_joki,
                        'catatan_joki' => $request->catatan_joki,
                        'status_joki' => 'Proses',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);

                }



            } else {
                // return response()->json([
                //     'status' => false,
                //     'data' => 'Server Error'
                // ]);
            }
        }

        return response()->json([
            'status' => true,
            'order_id' => $order_id
        ]);
    }
}
