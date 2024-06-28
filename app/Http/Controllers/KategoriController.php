<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use App\Models\Setting_Web;
use App\Models\Tipes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $data = Kategoris::with('tipe')->paginate(5);
        $tipes = Tipes::all();

        return view('admin.page.kategori', compact('data', 'tipes', 'settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|file|mimes:jpg,png,webp',
            'bannerlayanan' => 'required|file|mimes:jpg,png,webp',
            'nama' => 'required',
            'sub_nama' => 'required',
            'brand' => 'required',
            // 'ket_layanan' => 'required',
            // 'ket_id' => 'required',
            'placeholder_1' => 'required',
            'placeholder_2' => 'required',
            'kode' => 'required|unique:kategoris,kode',
            'serverOption' => 'required',
            'tipe_id' => 'required',
            'populer' => 'required'
        ]);

        $file = $request->file('thumbnail');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());

        $img2 = $request->file('bannerlayanan');
        $filenamebn = Str::random('15') . '.' . $img2->extension();
        $img2->move('assets/bannerlayanan', $filenamebn);

        if ($request->file('petunjuk')) {
            $img = $request->file('petunjuk');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/petunjuk', $filename);
        }

        $kategori = new Kategoris();
        $kategori->nama = $request->nama;
        $kategori->sub_nama = $request->sub_nama;
        $kategori->brand = $request->brand;
        $kategori->kode = $request->kode;
        $kategori->ket_layanan = str_replace("\r\n", "<br>", $request->ket_layanan);
        $kategori->ket_id = str_replace("\r\n", "<br>", $request->ket_id);
        $kategori->placeholder_1 = $request->placeholder_1;
        $kategori->placeholder_2 = $request->placeholder_2;
        $kategori->server_id = $request->serverOption == 'ya' ? 1 : 0;
        $kategori->tipe_id = $request->tipe_id;
        $kategori->populer = $request->populer;
        $kategori->thumbnail = "/" . $folder . "/" . $file->getClientOriginalName();
        $kategori->bannerlayanan = '/assets/bannerlayanan/' . $filenamebn;
        $kategori->petunjuk = ($request->file('petunjuk') ? '/assets/petunjuk/' . $filename : '');
        $kategori->save();

        return back()->with('success', 'Berhasil menambahkan kategori');
    }

    public function delete($id)
    {
        try {
            $data = Kategoris::where('id', $id)->select('thumbnail')->first();
            unlink(public_path($data->thumbnail));
            unlink(public_path($data->bannerlayanan));
            unlink(public_path($data->petunjuk));
            Kategoris::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        } catch (\Exception $e) {
            Kategoris::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

    public function update($id, $status)
    {
        $data = Kategoris::where('id', $id)->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil update!');
    }

    public function detail($id)
    {
        $data = Kategoris::where('id', $id)->with('tipe')->first();
        $tipes = Tipes::all();

        $options = '';
        $populerOptions = [
            0 => 'Tidak',
            1 => 'Ya'
        ];

        foreach ($tipes as $tipe) {
            $selected = $data->tipe_id == $tipe->id ? 'selected' : '';
            $options .= "<option value='{$tipe->id}' {$selected}>{$tipe->name}</option>";
        }

        $populerSelect = '';
        foreach ($populerOptions as $value => $label) {
            $selected = $data->populer == $value ? 'selected' : '';
            $populerSelect .= "<option value='{$value}' {$selected}>{$label}</option>";
        }

        $send = "<div class='mt-8'>
                                        <form action='" . route("kategori.detail.update", [$id]) . "' method='POST'
                                            enctype='multipart/form-data'>
                                            <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                            <div class='flex flex-col gap-y-4'>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='nama' class='col-span-2'>Nama</label>
                                                    <div class='col-span-8'>
                                                        <input type='text' name='kategori' id='kategori'
                                                            value='" . $data->nama . "'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='nama' class='col-span-2'>Sub Nama</label>
                                                    <div class='col-span-8'>
                                                        <input type='text' name='sub_nama' id='sub_nama'
                                                            value='" . $data->sub_nama . "'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='nama' class='col-span-2'>Brand</label>
                                                    <div class='col-span-8'>
                                                        <input type='text' name='brand' id='brand'
                                                            value='" . $data->brand . "'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='tipe_id' class='col-span-2'>Tipe</label>
                                                    <div class='col-span-8'>
                                                        <select class='bg-input-form-admin select select-bordered w-full' id='tipe_id' name='tipe_id'>
                                                            {$options}
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='kode' class='col-span-2'>Kode</label>
                                                    <div class='col-span-8'>
                                                        <input type='text' name='kode' id='kode'
                                                            value='" . $data->kode . "'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='ket_layanan' class='col-span-2'>Deskripsi Game</label>
                                                    <div class='col-span-8'>
                                                        <textarea name='ket_layanan' id='ket_layanan'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin'>" . htmlspecialchars_decode($data->ket_layanan) . "</textarea>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='ket_id' class='col-span-2'>Deskripsi ID</label>
                                                    <div class='col-span-8'>
                                                        <textarea name='ket_id' id='ket_id'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin'>" . $data->ket_id . "</textarea>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='placeholder_1' class='col-span-2'>Placeholder 1</label>
                                                    <div class='col-span-8'>
                                                        <textarea name='placeholder_1' id='placeholder_1'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin'>" . $data->placeholder_1 . "</textarea>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='placeholder_2' class='col-span-2'>Placeholder 2</label>
                                                    <div class='col-span-8'>
                                                        <textarea name='placeholder_2' id='placeholder_2'
                                                            class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin'>" . $data->placeholder_2 . "</textarea>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1'>
                                                    <div class='col-span-2'>
                                                        <label class='mt-3' for='thumbnail'>Thumbnail</label>
                                                    </div>
                                                    <div class='col-span-8'>
                                                        <input type='file' name='thumbnail' id='thumbnail'
                                                            accept='image/*' value='" . $data->thumbnail . "'
                                                            class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                        <p class='text-error mt-2 text-sm'>Gunakan Ukuran 512 x 652 pixel
                                                            (Lebar x
                                                            Tinggi)
                                                            untuk
                                                            thumbnail</p>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1'>
                                                    <div class='col-span-2'>
                                                        <label class='mt-3' for='bannerlayanan'>Banner Layanan</label>
                                                    </div>
                                                    <div class='col-span-8'>
                                                        <input type='file' name='bannerlayanan' id='bannerlayanan'
                                                            accept='image/*' value='" . $data->bannerlayanan . "'
                                                            class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                        <p class='text-error mt-2 text-sm'>Disarankan Banner Layanan
                                                            menggunakan ukuran
                                                            1180 x
                                                            275
                                                            pixel (Lebar x Tinggi)</p>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1'>
                                                    <div class='col-span-2'>
                                                        <label class='mt-3' for='petunjuk'>Petunjuk</label>
                                                    </div>
                                                    <div class='col-span-8'>
                                                        <input type='file' name='petunjuk' id='petunjuk'
                                                            accept='image/*' value='" . $data->petunjuk . "'
                                                            class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='serverOption' class='col-span-2'>Tipe</label>
                                                    <div class='col-span-8'>
                                                        <select name='serverOption' id='serverOption'
                                                            class='bg-input-form-admin select select-bordered w-full'>
                                                            <option value='tidak'>1. Target ( User ID )</option>
                                                            <option value='ya'>2. Target ( User ID / Server ID )
                                                            </option>
                                                            <option value='tidak'>3. Target ( Custom via code )</option>
                                                        </select>
                                                        <small style='color:red;'>*Selalu Perhatikan! Jika Produk yang kamu
                                                            gunakan Menggunakan Server ID maka <strong>Harus</strong>
                                                            diganti</small>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='status' class='col-span-2'>Status</label>
                                                    <div class='col-span-8'>
                                                        <select name='status' id='status'
                                                            class='bg-input-form-admin select select-bordered w-full'>
                                                            <option value='active'>Active</option>
                                                            <option value='unactive'>Unactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                    <label for='populer' class='col-span-2'>Populer</label>
                                                    <div class='col-span-8'>
                                                        <select name='populer' id='populer'
                                                            class='bg-input-form-admin select select-bordered w-full'>
                                                            {$populerSelect}
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='modal-action'>
                                                <button type='submit' class='btn btn-info'>Edit</button>
                                            </div>
                                        </form>
                                    </div>
                ";

        return $send;
    }

    public function patch(Request $request, $id)
    {
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());
            Kategoris::where('id', $id)->update([
                'thumbnail' => "/" . $folder . "/" . $file->getClientOriginalName()
            ]);
        }

        if ($request->file('bannerlayanan')) {
            $img = $request->file('bannerlayanan');
            $filenamebn = Str::random('15') . '.' . $img->extension();
            $img->move('assets/bannerlayanan', $filenamebn);
        }

        if ($request->file('petunjuk')) {
            $img = $request->file('petunjuk');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/petunjuk', $filename);
        }

        $cek = Kategoris::where('id', $id)->first();

        $pembayaran = Kategoris::where('id', $id)->update([
            'nama' => $request->kategori,
            'brand' => $request->brand,
            'sub_nama' => $request->sub_nama,
            'placeholder_1' => $request->placeholder_1,
            'placeholder_2' => $request->placeholder_2,
            'kode' => $request->kode,
            'ket_layanan' => str_replace("\r\n", "<br>", $request->ket_layanan),
            'ket_id' => str_replace("\r\n", "<br>", $request->ket_id),
            'tipe_id' => $request->tipe_id,
            'populer' => $request->populer,
            'status' => $request->status,
            'server_id' => $request->serverOption == 'ya' ? 1 : 0,
            'bannerlayanan' => (!$request->file('bannerlayanan') ? $cek->bannerlayanan : '/assets/bannerlayanan/' . $filenamebn),
            'petunjuk' => (!$request->file('petunjuk') ? $cek->petunjuk : '/assets/petunjuk/' . $filename)
        ]);

        return back()->with('success', 'Berhasil update kategori');
    }
}
