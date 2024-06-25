<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create() {
        
        $settings = Setting_Web::select('judul_web', 'logo_header', 'logo_footer' , 'deskripsi_web', 'visi', 'misi', 'nomor_admin', 'url_ig')->first();

        return view('page.faq', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'deskripsi_web' =>  $settings->deskripsi_web ?? null,
            'visi' =>  $settings->visi ?? null,
            'misi' =>  $settings->misi ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,

        ]);
    }
}
