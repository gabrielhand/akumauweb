<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Methods;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Kategoris $kategori)
    {
        $logoHeader = Setting_Web::select('logo_header')->first();
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
            'logo_header' =>  $logoHeader ? $logoHeader->logo_header : null,
            'pay_method' => Methods::all()
        ]);
    }
}
