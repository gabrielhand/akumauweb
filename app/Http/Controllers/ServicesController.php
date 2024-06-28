<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Setting_Web;
use App\Models\Tipes;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'banner_services', 'slogan_web', 'url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();
        $kategori = Kategoris::where('status', 'active')->with('tipe', 'layanans')->get();
        $tipes = Tipes::all()->pluck('name');
        $kategoriName = Kategoris::where('status', 'active')->pluck('nama');

        $allKategori = collect();

        foreach ($tipes as $tipe) {
            $filteredKategori = $kategori->filter(function ($kategori) use ($tipe) {
                return $kategori->tipe->name === $tipe;
            });
            foreach ($filteredKategori as $kat) {
                $kat->layanan = $kat->layanans;
                $allKategori->push($kat);
            }
        }

        return view("page.services", [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'banner_services' =>  $settings->banner_services ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'tipes' => Tipes::all(),
            'allKategori' => $allKategori, 
            'kategoriNames' => $kategoriName,
        ]);
    }
}
