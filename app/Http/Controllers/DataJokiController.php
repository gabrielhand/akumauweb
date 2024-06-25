<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataJokiController extends Controller
{
    public function dataJoki()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header')->first();

        $data = DB::table('data_joki')->join('pembayarans', 'data_joki.order_id', 'pembayarans.order_id')->join('pembelians', 'data_joki.order_id', 'pembelians.order_id')
            ->select(
                'data_joki.order_id AS order_id',
                'data_joki.email_joki AS email',
                'data_joki.password_joki AS password',
                'data_joki.loginvia_joki AS loginvia',
                'data_joki.nickname_joki AS nickname',
                'data_joki.request_joki AS request',
                'data_joki.catatan_joki AS catatan',
                'data_joki.status_joki AS status_joki',
                'pembayarans.status AS status_pembayaran',
                'pembelians.layanan AS layanan',
                'data_joki.id AS id',
                'pembayarans.no_pembeli AS nomor'
            )
            ->paginate(5);

        return view('admin.page.data-joki', compact('data', 'settings'));
    }


    public function statusJoki(Request $request, $order_id, $status)
    {
        DB::table('data_joki')->where('order_id', $order_id)->update(['status_joki' => $status]);

        return back();
    }

    public function hapusJoki(Request $request, $id)
    {
        DB::table('data_joki')->where('id', $id)->delete();

        return back();
    }
}
