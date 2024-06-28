<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Pembayarans;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderManualController extends Controller
{
    public function orderManual()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $data = Pembelians::orderBy('pembelians.id', 'desc')->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
            ->select('pembelians.*', 'pembayarans.status AS status_pembayaran', 'metode')->where('metode', 'MANUAL')->get();

        $kategori = Kategoris::whereHas('tipe', function ($query) {
            $query->where('name', '!=', 'joki');
        })->get();
        return view('admin.page.order-manual', compact('settings', 'kategori', 'data'));
    }

    public function ajaxLayanan(Request $request)
    {
        $layanan = Layanans::where('kategori_id', $request->data)->get();
        $res = '';
        foreach ($layanan as $l) {
            $res .= '<option value="' . $l->id . '">' . $l->layanan . ' ( Rp ' . number_format($l->harga, 0, ',', '.') . ' )</option> ';
        }

        return $res;
    }

    public function order(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'kategori' => 'required|numeric',
            'layanan' => 'required|numeric'

        ]);

        $apicheck = new ApiCheckController();

        $dataKategori = Kategoris::where('id', $request->kategori)->select('kode')->first();

        $daftarGameValidasi = ['call-of-duty', 'free-fire', 'lords-mobile', 'marvel-super-war', 'mobile-legend', 'mobile-legends', 'point-blank', 'arena-of-valor', 'dragon-raja'];

        if (in_array($dataKategori->kode, $daftarGameValidasi)) {
            if ($dataKategori->kode == 'mobile-legends') {
                $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
            } else if ($dataKategori->kode == 'mobile-legend') {
                $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
            } else if ($dataKategori->kode == "free-fire") {
                $data = $apicheck->check($request->uid, null, 'Free Fire');
            } else if ($dataKategori->kode == "point-blank") {
                $data = $apicheck->check($request->uid, null, 'Point Blank');
            } else if ($dataKategori->kode == "arena-of-valor") {
                $data = $apicheck->check($request->uid, null, 'AOV');
            } else if ($dataKategori->kode == "lords-mobile") {
                $data = $apicheck->check($request->uid, null, 'Lords Mobile');
            } else if ($dataKategori->kode == "dragon-raja") {
                $data = $apicheck->check($request->uid, null, 'Dragon Raja');
            } else if ($dataKategori->kode == "marvel-super-war") {
                $data = $apicheck->check($request->uid, null, 'Marvel Super War');
            } elseif ($dataKategori->kode == "call-of-duty") {
                $data = $apicheck->check($request->uid, null, 'Call Of Duty');
            }


            if ($data['status']['code'] == 1) {

                return back()->with('error', isset($data['data']['msg']) ? $data['data']['msg'] : 'Username tidak ditemukan atau coba lagi nanti');
            }

            $username = $data['data']['userNameGame'];
        }

        $username = !empty($username) ? $username : '';

        $dataLayanan = Layanans::where('id', $request->layanan)->select('layanan', 'harga AS harga', 'kategori_id', 'provider_id', 'provider', 'profit')->first();



        $kategori = Kategoris::where('id', $dataLayanan->kategori_id)->select('kode')->first();

        $unik = date('Hs');
        $kode_unik = substr(str_shuffle(1234567890), 0, 3);
        $order_id = 'INV' . $unik . $kode_unik . 'M';

        $rand = rand(1, 1000);
        $no_pembayaran = '';
        $amount = $dataLayanan->harga;
        $reference = '';



        // $api = \DB::table('setting_webs')->where('id',1)->first();



        if ($dataLayanan->provider == "digiflazz") {
            $digi = new digiflazzController;
            $provider_order_id = rand(1, 100000);
            $order = $digi->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);

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
        } else if ($dataLayanan->provider == "apigames") {
            $provider_order_id = rand(1, 10000);
            $apigames = new ApiGamesController;
            $order = $apigames->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);

            if ($order['data']['status'] == "Sukses") {
                $order['transactionId'] = $provider_order_id;
                $order['status'] = true;
            } else {
                $order['status'] = false;
            }
        }



        if ($order['status']) {

            $pesanSukses =
                "*Pembelian Sukses*\n\n" .
                "No Invoice: *$order_id*\n" .
                "Layanan: *$dataLayanan->layanan*\n" .
                "ID : *$request->uid*\n" .
                "Server : *$request->zone*\n" .
                "Nickname : *$username*\n" .
                "Harga: *Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "*\n" .
                "Status Pembelian: *Sukses*\n" .
                "Metode Pembayaran: *MANUAL*\n\n" .
                "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                "INI ADALAH PESAN OTOMATIS";

            //   $pesanSuksesAdmin = 
            //     "*Pembelian Sukses*\n\n" .
            //     "No Invoice: *$order_id*\n" .
            //     "Layanan: *$dataLayanan->layanan*\n" .
            //     "ID : *$request->uid*\n" .
            //     "Server : *$request->zone*\n" .
            //     "Nickname : *$username*\n" .
            //     "Harga: *Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "*\n" .
            //     "Status Pembelian: *Sukses*\n" .
            //   "Metode Pembayaran: *MANUAL*\n\n" .

            //   "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
            //   "INI ADALAH PESAN OTOMATIS";

            $requestPesanSukses = $this->msg($request->nomor, $pesanSukses);
            // $requestPesanSuksesAdmin = $this->msg($api->nomor_admin, $pesanSuksesAdmin);


            $pembelian = new Pembelians();
            $pembelian->username = Auth::user()->username;
            $pembelian->order_id = $order_id;
            $pembelian->user_id = $request->uid;
            $pembelian->zone = $request->zone;
            $pembelian->nickname = $username;
            $pembelian->layanan = $dataLayanan->layanan;
            $pembelian->harga = $dataLayanan->harga;
            $pembelian->profit = 0;
            $pembelian->status = 'Sukses';
            $pembelian->provider_order_id = $provider_order_id ? $provider_order_id : "";
            $pembelian->log = json_encode($order);
            $pembelian->tipe_transaksi = 'game';
            $pembelian->save();

            $pembayaran = new Pembayarans();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $dataLayanan->harga;
            $pembayaran->no_pembayaran = "-";
            $pembayaran->no_pembeli = "-";
            $pembayaran->status = 'Lunas';
            $pembayaran->metode = "MANUAL";
            $pembayaran->reference = $reference;
            $pembayaran->save();

            return back()->with('success', 'Pesanan berhasil!');
        } else {
            return back()->with('error', 'Terjadi kesalahan');
        }
    }

    public function msg($nomor, $msg)
    {
        // $api = \DB::table('setting_webs')->where('id',1)->first();

        // $data = [
        //     'token' => $api->wa_key,
        //     'phone'  => "$nomor",
        //     'message' => "$msg"
        // ];

        // $curl = curl_init();
        //     curl_setopt_array($curl, array(
        //       CURLOPT_URL => 'https://app.ruangwa.id/api/send_message',
        //       CURLOPT_RETURNTRANSFER => true,
        //       CURLOPT_ENCODING => '',
        //       CURLOPT_MAXREDIRS => 10,
        //       CURLOPT_TIMEOUT => 0,
        //       CURLOPT_FOLLOWLOCATION => true,
        //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //       CURLOPT_CUSTOMREQUEST => 'POST',
        //       CURLOPT_POSTFIELDS => 'token='.$api->wa_key.'&number='."$nomor".'&message='.$msg,
        //     ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // return $response;
    }
}
