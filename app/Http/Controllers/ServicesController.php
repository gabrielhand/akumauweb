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
        $judulWeb = Setting_Web::select('judul_web')->first();
        $logoHeader = Setting_Web::select('logo_header')->first();
        $kategori = Kategoris::where('status', 'active')->with('tipe', 'layanans')->get();
        $tipes = Tipes::all()->pluck('name');

        // Gabungkan semua kategori dan layanan terkait dalam satu array
        $allKategori = collect();

        foreach ($tipes as $tipe) {
            $filteredKategori = $kategori->filter(function ($kategori) use ($tipe) {
                return $kategori->tipe->name === $tipe;
            });
            foreach ($filteredKategori as $kat) {
                $kat->layanan = $kat->layanans;  // Pastikan setiap kategori memiliki layanan terkait
                $allKategori->push($kat);
            }
        }

        return view("page.services", [
            'judul_web' => $judulWeb ? $judulWeb->judul_web : null,
            'logo_header' =>  $logoHeader ? $logoHeader->logo_header : null,
            'tipes' => Tipes::all(),
            'allKategori' => $allKategori,  // Pass the combined category and service data
        ]);
    }
}
