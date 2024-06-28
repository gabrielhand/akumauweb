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
                <div class='mt-8'>
                                    <form action='" . route("method.detail.update", [$id]) . "' method='POST'
                                        enctype='multipart/form-data'>
                                        <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                        <div class='flex flex-col gap-y-4'>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='name' class='col-span-2'>Nama</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='name' id='name'
                                                        value='" . $data->name . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='code' class='col-span-2'>Kode</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='code' id='code'
                                                        value='" . $data->code . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='keterangan' class='col-span-2'>Keterangan</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='keterangan' id='keterangan'
                                                        value='" . $data->keterangan . "'
                                                        class='validate-input bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='tipe' class='col-span-2'>Tipe</label>
                                                <div class='col-span-8'>
                                                    <select class='bg-input-form-admin select select-bordered w-full'
                                                        id='tipe' name='tipe'>
                                                        <option value='e-walet'>E-Wallet</option>
                                                        <option value='tfbank'>Transfer Bank</option>
                                                        <option value='virtual-account'>Virtual Account</option>
                                                        <option value='convenience-store'>Convenience Store</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='images' class='col-span-2'>Thumbnail</label>
                                                <div class='col-span-8'>
                                                    <input type='file' name='images' id='images' accept='image/*'
                                                        value='" . $data->images . "'
                                                        class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='modal-action'>
                                            <button id='edit-button' type='submit'
                                                class='bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300 disabled:opacity-50'>Edit</button>
                                        </div>
                                    </form>
                                </div>
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
