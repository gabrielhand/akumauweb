<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('admin.page.slider-berita', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'berita' => Beritas::all()
        ]);
    }

    public function post(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpg,png,webp',
            'tipe' => 'required'
        ]);

        $file = $request->file('image');
        $folder = 'assets/banner';
        $file->move($folder, $file->getClientOriginalName());

        $berita = new Beritas();
        $berita->path = "/" . $folder . "/" . $file->getClientOriginalName();
        $berita->deskripsi = $request->deskripsi;
        $berita->tipe = $request->tipe;
        $berita->save();

        return back()->with('success', 'Berhasil upload!');
    }

    public function delete($id)
    {
        $data = Beritas::where('id', $id)->select('path')->first();
        Beritas::where('id', $id)->delete();

        return back()->with('success', 'Berhasil hapus!');
    }
}
