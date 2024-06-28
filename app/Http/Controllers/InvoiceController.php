<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class InvoiceController extends Controller
{
    public function index($order)
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'banner_cari_single', 'slogan_web', 'url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();

        $data = Pembelians::where('pembelians.order_id', $order)
            ->join('pembayarans', 'pembelians.order_id', '=', 'pembayarans.order_id')
            ->leftJoin('data_joki', 'pembelians.order_id', '=', 'data_joki.order_id')
            ->leftJoin('layanans', 'pembelians.layanan', '=', 'layanans.layanan')
            ->leftJoin('kategoris', 'layanans.kategori_id', '=', 'kategoris.id')
            ->select(
                'data_joki.*',
                'pembayarans.status AS status_pembayaran',
                'pembayarans.metode AS metode_pembayaran',
                'pembayarans.no_pembayaran',
                'pembayarans.reference',
                'pembelians.order_id AS id_pembelian',
                'user_id',
                'zone',
                'nickname',
                'pembelians.layanan',
                'pembayarans.harga AS harga_pembayaran',
                'pembelians.created_at AS created_at',
                'pembelians.status AS status_pembelian',
                'pembelians.tipe_transaksi AS tipe_transaksi',
                'pembelians.email_vilog AS email_vilog',
                'pembelians.password_vilog AS password_vilog',
                'pembelians.loginvia_vilog AS loginvia_vilog',
                'kategoris.nama AS nama_kategori',
                'kategoris.thumbnail'
            )
            ->first();


        $expired = Carbon::create($data->created_at)->addDay();

        return view('page.carisingle', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'banner_cari_single' =>  $settings->banner_cari_single ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'data' => $data,
            'expired' => $expired,
        ]);
    }
}
