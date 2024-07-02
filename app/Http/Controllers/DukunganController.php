<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DukunganController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'logo_footer', 'logo_sidebar_bawah', 'deskripsi_web', 'slogan_web', 'visi', 'misi', 'nomor_admin', 'url_ig')->first();

        $tipePelapor = [
            ['name' => 'Individu', 'value' => 'individu'],
            ['name' => 'Perusahaan', 'value' => 'perusahaan']
        ];

        $tipeLaporan = [
            ['name' => 'Masalah Akun', 'value' => 'masalah-akun'],
            ['name' => 'Masalah Transaksi', 'value' => 'masalah-transaksi'],
            ['name' => 'Klaim Voucher', 'value' => 'klaim-voucher'],
            ['name' => 'Daftar Reseller', 'value' => 'daftar-reseller'],
            ['name' => 'Pembuatan Website', 'value' => 'pembuatan-website'],
            ['name' => 'Penawaran Kerjasama', 'value' => 'penawaran-kerjasama'],
            ['name' => 'Daftar Affiliator', 'value' => 'daftar-affiliator']
        ];

        return view('page.dukungan', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'deskripsi_web' =>  $settings->deskripsi_web ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'visi' =>  $settings->visi ?? null,
            'misi' =>  $settings->misi ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'tipe_laporan' => $tipeLaporan,
            'tipe_pelapor' => $tipePelapor
        ]);
    }

    public function postMessage(Request $request)
    {

    if (empty($request->nama) && empty($request->nomorhp) && empty($request->deskripsi) && empty($request->tipe_pelapor) && empty($request->tipe_laporan)) {
        return back()->withErrors(['all' => 'Maaf, Anda tidak bisa mengirim laporan kosong.']);
    }

    $messages = [
        'nama.required' => 'Nama pelapor wajib diisi!',
        'nomorhp.required' => 'Nomor WhatsApp wajib diisi!',
        'deskripsi.required' => 'Deskripsi laporan wajib diisi!',
        'tipe_pelapor.required' => 'Mohon pilih tipe pelapor!',
        'tipe_laporan.required' => 'Mohon pilih tipe laporan!',
    ];

    $request->validate([
        'nama' => 'required',
        'nomorhp' => 'required',
        'deskripsi' => 'required',
        'tipe_pelapor' => 'required',
        'tipe_laporan' => 'required',
    ], $messages);

    $nama = $request->nama;
    $nomorhp = $request->nomorhp;
    $deskripsi = $request->deskripsi;
    $tipePelapor = $request->tipe_pelapor;
    $tipeLaporan = $request->tipe_laporan;

    $pesan = "NOTIFIKASI DUKUNGAN PELANGGAN

Pelapor:           $tipePelapor
Tipe Laporan:      $tipeLaporan
Nama Pelapor:      $nama
Nomer WhatsApp:    $nomorhp
Deskripsi Laporan: $deskripsi";

    $this->msg($pesan);

    return back()->with('success', 'Berhasil mengirim laporan!');
    }




    public function msg($pesan)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.wapanels.com/api/create-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'appkey' => '20f9b1a5-2f72-47aa-80a1-1eea4ad22421',
                'authkey' => 'fDg2kCWzeR3ql5wfuM90eW3fo0oUdj3eKJs0UV5paMoMGmwi2Z',
                'to' => '6285172351072',
                'message' => $pesan,
                'sandbox' => 'false'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    }
}
