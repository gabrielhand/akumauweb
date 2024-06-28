<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create() {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'slogan_web','logo_footer', 'logo_sidebar_bawah', 'sejarah', 'sejarah_1', 'logo_ceo', 'nama_ceo', 'deskripsi_ceo', 'nama_bagan', 'alamat', 'telp', 'visi', 'misi', 'nomor_admin', 'url_ig')->first();

        return view('page.about', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'sejarah' =>  $settings->sejarah ?? null,
            'sejarah_1' =>  $settings->sejarah_1 ?? null,
            'nama_ceo' =>  $settings->nama_ceo ?? null,
            'deskripsi_ceo' =>  $settings->deskripsi_ceo ?? null,
            'nama_bagan' =>  $settings->nama_bagan ?? null,
            'alamat' =>  $settings->alamat ?? null,
            'telp' =>  $settings->telp ?? null,
            'logo_ceo' =>  $settings->logo_ceo ?? null,
            'visi' =>  $settings->visi ?? null,
            'misi' =>  $settings->misi ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
        ]);
    }
}
