<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategoris;
use App\Models\Setting_Web;
use App\Models\Tipes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();
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
            'url_ig' =>  $settings->url_ig ?? null,
            'tipes' => Tipes::all(),
            'kategori' => $kategori,
            'kategoriByTipe' => $kategoriByTipe,

        ]);
    }
    public function allgames(){
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();
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
            'url_ig' =>  $settings->url_ig ?? null,
            'tipes' => Tipes::all(),
            'kategori' => $kategori,
            'kategoriByTipe' => $kategoriByTipe,

        ]);
    }
    
}
