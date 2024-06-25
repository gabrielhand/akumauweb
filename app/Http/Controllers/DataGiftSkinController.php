<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class DataGiftSkinController extends Controller
{
    public function dataGiftSkin()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header')->first();

        $data = Pembelians::where('tipe_transaksi', 'gift_skin')->paginate(5);

        return view('admin.page.data-giftskin', compact('data', 'settings'));
    }


    public function statusGiftSkin(Request $request, $order_id, $status)
    {
        Pembelians::where('order_id', $order_id)->update(['status' => $status]);

        return back();
    }

    public function hapusGiftSkin(Request $request, $id)
    {
        Pembelians::where('id', $id)->delete();

        return back();
    }
}
