<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Methods;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use App\Models\SubCategories;
use App\Models\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Kategoris $kategori)
    {
        $settings = Setting_Web::select('logo_header', 'url_ig', 'logo_footer')->first();
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
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'pay_method' => Methods::all()
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
}
