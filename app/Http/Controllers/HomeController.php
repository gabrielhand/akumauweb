<?php

namespace App\Http\Controllers;


use App\Models\Beritas;
use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Setting_Web;
use App\Models\Tipes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $settings = Setting_Web::select('judul_web', 'logo_header', 'pattern', 'slogan_web','url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();
        $kategori = Kategoris::where('status', 'active')->with('tipe')->get();
        $tipes = Tipes::all()->pluck('name');

        $kategoriByTipe = [];
        foreach ($tipes as $tipe) {
            $kategoriByTipe[$tipe] = $kategori->filter(function ($kategori) use ($tipe) {
                return $kategori->tipe->name === $tipe;
            });
        }
        return view("page.home", [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'pattern' =>  $settings->pattern ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'tipes' => Tipes::all(),
            'kategori' => $kategori,
            'kategoriByTipe' => $kategoriByTipe,
            'banner' => Beritas::where('tipe', 'banner')->get(),
            'popup' => Beritas::where('tipe', 'popup')->latest()->first(),
            'flashsale' => Layanans::join('kategoris', 'kategoris.id', 'layanans.kategori_id')->select('kategoris.thumbnail AS gmr_thumb', 'kategoris.kode AS kode_game', 'layanans.*')->where('layanans.is_flash_sale', 1)->where('layanans.expired_flash_sale', '>=', date('Y-m-d'))->get(),

        ]);
    }
    public function allgames(){
        $settings = Setting_Web::select('judul_web', 'logo_header', 'slogan_web','url_ig', 'logo_footer', 'logo_sidebar_bawah', 'nomor_admin')->first();
        $kategori = Kategoris::where('status', 'active')->with('tipe')->get();
        $tipes = Tipes::all()->pluck('name');

        $kategoriByTipe = [];
        foreach ($tipes as $tipe) {
            $kategoriByTipe[$tipe] = $kategori->filter(function ($kategori) use ($tipe) {
                return $kategori->tipe->name === $tipe;
            });
        }

        return view("page.allgames", [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'slogan_web' =>  $settings->slogan_web ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'logo_footer' =>  $settings->logo_footer ?? null,
            'logo_sidebar_bawah' =>  $settings->logo_sidebar_bawah ?? null,
            'nomor_admin' =>  $settings->nomor_admin ?? null,
            'tipes' => Tipes::all(),
            'kategori' => $kategori,
            'kategoriByTipe' => $kategoriByTipe,

        ]);
    }
    
}
