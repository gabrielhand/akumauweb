<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $data = Pembelians::orderBy('pembelians.id', 'desc')->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
            ->select('pembelians.*', 'pembayarans.status AS status_pembayaran', 'metode')->paginate(5);

        return view('admin.page.semua-pesanan', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'data' => $data
        ]);
    }

    public function update($order_id, $status)
    {
        Pembelians::where('order_id', $order_id)->update([
            'status' => $status,
            'updated_at' => now()
        ]);
        return back()->with('success', 'Berhasil memperbarui status ID #' . $order_id);
    }
}
