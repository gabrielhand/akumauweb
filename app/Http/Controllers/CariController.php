<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class CariController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'banner_cek_transaksi', 'slogan_web', 'url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();
        $pembelians = Pembelians::join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
            ->leftJoin('data_joki', 'pembelians.order_id', 'data_joki.order_id')
            ->select('data_joki.status_joki AS status_joki', 'pembelians.*', 'pembayarans.status AS status_pembayaran', 'metode')
            ->orderByDesc('pembayarans.id')
            ->limit(10)
            ->get();

        return view('page.cari', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'banner_cek_transaksi' =>  $settings->banner_cek_transaksi ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'pembelians' => $pembelians,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $pembelian = Pembelians::where('order_id', $request->id)->first();
        if($pembelian){
            return redirect(route('pembelian', ['order' => $request->id]));
        }

        return back()->with('error', 'Pesanan tidak ditemukan');
    }
    
}
