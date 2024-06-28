<?php

namespace App\Http\Controllers;

use App\Models\Layanans;
use App\Models\Setting_Web;
use App\Models\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('admin.page.voucher', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'vouchers' => Vouchers::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:vouchers,kode',
            'promo' => 'required|numeric|min:0|max:100',
            'stock' => 'required|numeric|min:0',
            'max_potongan' => 'required|numeric|min:0'
        ]);

        $voucher = new Vouchers();
        $voucher->kode = $request->kode;
        $voucher->promo = $request->promo;
        $voucher->stock = $request->stock;
        $voucher->max_potongan = $request->max_potongan;
        $voucher->save();

        return back()->with('success', 'Berhasil menambahkan voucher');
    }

    public function destroy($id)
    {
        Vouchers::where('id', $id)->delete();

        return back()->with('success', 'Berhasil menghapus voucher');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'voucher' => 'required'
        ]);

        $voucher = Vouchers::where('kode', $request->voucher)->first();

        if (!$voucher) return response()->json(['status' => false, 'message' => 'Voucher tidak ditemukan'], 404);
        if ($voucher->stock == 0) return response()->json(['status' => false, 'message' => 'Voucher sudah tidak valid'], 404);

        if (isset($request->service)) {
            if (Auth::check()) {
                if (Auth::user()->role == "Reseller" || Auth::user()->role == "Admin") {
                    $service = Layanans::where('id', $request->service)->select('harga_reseller AS harga')->first();
                } else {
                    $service = Layanans::where('id', $request->service)->select('harga')->first();
                }
            } else {
                $service = Layanans::where('id', $request->service)->select('harga')->first();
            }

            $potongan = $service->harga * ($voucher->promo / 100);

            if ($potongan > $voucher->max_potongan) {
                $potongan = $voucher->max_potongan;
            }

            $service->harga = $service->harga - $potongan;

            return response()->json([
                'status' => true,
                'message' => 'Voucher ditemukan',
                'harga' => 'Rp ' . number_format($service->harga, 0, '.', ',')
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Voucher ditemukan'
        ]);
    }

    public function show($id)
    {
        $data = Vouchers::where('id', $id)->first();

        $send = "
                <div class='mt-8'>
                                    <form action='" . route("voucher.detail.update", [$id]) . "' method='POST'>
                                        <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                        <div class='flex flex-col gap-y-4'>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='kode' class='col-span-2'>Kode</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='kode' id='kode'
                                                        value='" . $data->kode . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='promo' class='col-span-2'>Promo</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='promo' id='promo'
                                                        value='" . $data->promo . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='stock' class='col-span-2'>Stock</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='stock' id='stock'
                                                        value='" . $data->stock . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='max_potongan' class='col-span-2'>Max Potongan</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='max_potongan' id='max_potongan'
                                                        value='" . $data->max_potongan . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='modal-action'>
                                            <button id='edit-button' type='submit' class='bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300 disabled:opacity-50'>Edit</button>
                                        </div>
                                    </form>
                                </div>
        ";

        return $send;
    }

    public function patch(Request $request, $id)
    {
        $request->validate([
            'kode'  => 'required',
            'promo' => 'required|numeric|min:0|max:100',
            'stock' => 'required|numeric|min:0',
            'max_potongan' => 'required|numeric|min:0'
        ]);

        Vouchers::where('id', $id)->update([
            'kode' => $request->kode,
            'promo' => $request->promo,
            'stock' => $request->stock,
            'max_potongan' => $request->max_potongan
        ]);

        return back()->with('success', 'Berhasil update kode promo');
    }
}
