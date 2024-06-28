<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Setting_Web;
use App\Models\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $data = SubCategories::join('kategoris', 'sub_categories.category_id', 'kategoris.id')
            ->select('kategoris.nama AS kategori', 'sub_categories.*')->get();
        return view('admin.page.sub-kategori', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'categories' => Kategoris::where('status', 'active')->get(), 'sub' => $data
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
            'code' => 'unique:sub_categories,code'
        ], [
            'nama.required' => 'Nama Wajib diisi',
            'code.required' => 'kode Wajib diisi',
            'kategori.required' => 'kategori Wajib diisi',
            'code.unique' => 'Kode Sudah dipakai'
        ]);

        $submodel = new SubCategories();
        $submodel->name = $request->nama;
        $submodel->code = $request->code;
        $submodel->category_id = $request->kategori;
        $submodel->active = 1;
        $submodel->save();

        return back()->with('success', 'Berhasil menambahkan sub kategori');
    }

    public function destroy($id)
    {
        $sub = SubCategories::where('id', $id)->first();

        $sub->delete();

        $service = Layanans::where('sub_category_id', $id)->update([
            'sub_category_id' => 0
        ]);

        return back()->with('success', 'Berhasil menghapus sub kategori');
    }
}
