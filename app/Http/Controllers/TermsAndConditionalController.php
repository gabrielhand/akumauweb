<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class TermsAndConditionalController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'slogan_web','url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();

        return view('page.terms-conditional', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'banner' => Beritas::where('tipe', 'banner')->get(),
            'logoheader' => Beritas::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Beritas::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Beritas::where('tipe', 'popup')->latest()->first()
        ]);
    }
}
