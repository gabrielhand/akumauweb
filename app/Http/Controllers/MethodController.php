<?php

namespace App\Http\Controllers;

use App\Models\Methods;
use App\Models\Setting_Web;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('admin.page.payment', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'data' => Methods::orderBy('name', 'asc')->paginate(5)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'images' => 'required|file|mimes:jpg,png',
            'code' => 'required|unique:kategoris,kode',
            'keterangan' => 'required',
            'tipe' => 'required',
        ]);

        $file = $request->file('images');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());

        $method = new Methods();
        $method->name = $request->name;
        $method->code = $request->code;
        $method->images = "/" . $folder . "/" . $file->getClientOriginalName();
        $method->keterangan = $request->keterangan;
        $method->tipe = $request->tipe;
        $method->save();

        return back()->with('success', 'Berhasil menambahkan kategori');
    }

    public function delete($id)
    {
        try {
            $data = Methods::where('id', $id)->select('images')->first();
            unlink(public_path($data->images));
            Methods::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus payment!');
        } catch (\Exception $e) {
            Methods::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

    public function detail($id)
    {
        $data = Methods::where('id', $id)->first();

        $send = "
                <form action='" . route("method.detail.update", [$id]) . "' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->name . "' name='name'>
                        </div>
                    </div>    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Kode</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->code . "' name='code'>
                        </div>
                    </div>  
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Thumbnail</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' value='" . $data->images . "' name='images'>
                        </div>
                    </div>             
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' class='btn btn-primary'>Simpan</button>
                    </div>
                </form>
        ";

        return $send;
    }

    public function patch(Request $request, $id)
    {
        if ($request->file('images')) {
            $file = $request->file('images');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());
            Methods::where('id', $id)->update([
                'images' => "/" . $folder . "/" . $file->getClientOriginalName()
            ]);
        }

        $method = Methods::where('id', $id)->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return back()->with('success', 'Berhasil update kategori');
    }
}
