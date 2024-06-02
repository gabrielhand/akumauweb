<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        $judulWeb = Setting_Web::select('judul_web')->first();
        $logoHeader = Setting_Web::select('logo_header')->first();

        return view('page.register', [
            'judul_web' => $judulWeb ? $judulWeb->judul_web : null,
            'logo_header' =>  $logoHeader ? $logoHeader->logo_header : null,
        ]);
    }
}
