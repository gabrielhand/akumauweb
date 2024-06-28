<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Kategoris;
use App\Models\Layanans;
use App\Models\Pembayarans;
use App\Models\Pembelians;
use App\Models\Setting_Web;
use App\Models\SubCategories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $datas = Layanans::join('kategoris', 'layanans.kategori_id', 'kategoris.id')->orderByDesc('created_at')
            ->select('layanans.*', 'kategoris.nama AS nama_kategori')->paginate(5);

        $kategori = Kategoris::get();

        return view('admin.page.layanan', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'datas' => $datas, 
            'kategoris' => $kategori
        ]);
    }

    public function modal(Request $request)
    {
        $date = Carbon::parse(now());

        if (isset($request->month)) {
            if ($request->month == "0") {
                $start = 1;
                $end = 12;
            }
            isset($start) ? $start : $start = $request->month;
            isset($end) ? $end : $end = $request->month;

            $pembelian = Pembelians::whereBetween('created_at', ["$date->year-$start-01", "$date->year-$end-31"])->where('status', 'Success')->get();
            $pembayaran = Pembayarans::whereBetween('created_at', ["$date->year-$start-01", "$date->year-$end-31"])->where('status', 'Lunas')->get();
            $deposit = Deposits::whereBetween('created_at', ["$date->year-$start-01", "$date->year-$end-31"])->where('status', 'Success')->get();
        } else {
            $pembelian = Pembelians::whereBetween('created_at', ["$date->year-$date->month-01", "$date->year-$date->month-31"])->where('status', 'Success')->get();
            $pembayaran = Pembayarans::whereBetween('created_at', ["$date->year-$date->month-01", "$date->year-$date->month-31"])->where('status', 'Lunas')->get();
            $deposit = Deposits::whereBetween('created_at', ["$date->year-$date->month-01", "$date->year-$date->month-31"])->where('status', 'Success')->get();
        }

        $months = array('All Month', 'January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December');

        return view('components.admin.dashboard', [
            'month' => $date->month,
            'months' => $months,
            'pesanan_banyak' => Pembelians::whereDay('created_at', date('d'))->whereIn('status', ['Pending', 'Success'])->count(),
            'pembayaran_banyak' => Pembayarans::whereDay('created_at', date('d'))->whereIn('status', ['Lunas'])->count(),
            'deposit_banyak' => Deposits::whereDay('created_at', date('d'))->whereIn('status', ['Success'])->count(),
            'total_pesanan' => $pembelian->sum('harga'),
            'total_pembayaran' => $pembayaran->sum('harga'),
            'total_profit' => Pembelians::whereDay('created_at', date('d'))->sum('profit'),
            'menunggu' => Pembayarans::where('status', ['Belum Lunas'])->count(),
            'pending' => Pembelians::where('status', 'Pending')->count(),
            'cancel' => Pembelians::where('status', 'Batal')->count(),
            'success' => Pembelians::where('status', 'Success')->count(),
        ]);
    }
    public function getSubCategories(Request $request)
    {
        $category = $request->category;

        $subCategory = SubCategories::where('category_id', $category)->get();

        if (!$subCategory) {
            return response()->json(['status' => true, 'sub' => ['Normal']]);
        }

        return response()->json([
            'status' => true,
            'sub' => $subCategory
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga_member' => 'required|numeric',
            'harga_reseller' => 'required|numeric',
            'profit_member' => 'required|numeric',
            'profit_reseller' => 'required|numeric',
            'modal' => 'required|numeric',
            'sub' => 'required',
            'provider_id' => 'required|unique:layanans,provider_id',
            'provider' => 'required',
        ]);
        if ($request->file('product_logo')) {
            $img = $request->file('product_logo');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/product_logo', $filename);
        }

        if ($request->file('banner_flash_sale')) {
            $imgfs = $request->file('banner_flash_sale');
            $filenamefs = Str::random('15') . '.' . $imgfs->extension();
            $imgfs->move('assets/banner_flash_sale', $filenamefs);
        }

        $layanan = new Layanans();
        $layanan->kategori_id = $request->kategori;
        $layanan->layanan = $request->nama;
        $layanan->provider_id = $request->provider_id;
        $layanan->harga_member = $request->harga_member + ($request->harga_member * $request->profit_member / 100);
        $layanan->harga_reseller = $request->harga_reseller + ($request->harga_reseller * $request->profit_reseller / 100);
        $layanan->profit_member = $request->profit_member;
        $layanan->profit_reseller = $request->profit_reseller;
        $layanan->modal = $request->modal;
        $layanan->provider = $request->provider;
        $layanan->catatan = '';
        $layanan->sub_category_id = $request->sub;
        $layanan->status = 'available';
        $layanan->product_logo = ($request->file('product_logo') ? '/assets/product_logo/' . $filename : '');
        $layanan->harga_flash_sale = $request->harga_flash_sale;
        $layanan->is_flash_sale = $request->flash_sale;
        $layanan->judul_flash_sale = $request->judul_flash_sale;
        $layanan->banner_flash_sale = ($request->file('banner_flash_sale') ? '/assets/banner_flash_sale/' . $filenamefs : '');
        $layanan->expired_flash_sale = date('Y-m-d', strtotime($request->expired_flash_sale));
        $layanan->save();

        return back()->with('success', 'Berhasil menginput layanan');
    }

    public function delete($id)
    {
        Layanans::where('id', $id)->delete();
        return back()->with('success', 'Berhasil menghapus layanan');
    }

    public function update($id, $status)
    {
        Layanans::where('id', $id)->update([
            'status' => $status
        ]);
        return back()->with('success', 'Berhasil mengupdate layanan');
    }

    public function detail($id)
    {
        $data = Layanans::where('id', $id)->first();

        $send = "
                <div class='mt-8'>
                                    <form action='" . route("layanan.detail.update", [$id]) . "' method='POST'
                                        enctype='multipart/form-data'>
                                        <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                        <div class='flex flex-col gap-y-4'>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='layanan' class='col-span-2'>Layanan</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='layanan' id='layanan'
                                                        value='" . $data->layanan . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1'>
                                                <label for='provider' class='col-span-2 mt-3'>Provider</label>
                                                <div class='col-span-8'>
                                                    <select class='bg-input-form-admin select select-bordered w-full'
                                                        id='provider' name='provider'>
                                                        <option value='mobapay'>Mobapay</option>
                                                        <option value='moogold'>MooGold</option>
                                                        <option value='digiflazz'>Digiflazz</option>
                                                        <option value='vip'>Vip Reseller</option>
                                                        <option value='apigames'>API Games V1</option>
                                                        <option value='gamepoint'>Gamepointclub</option>
                                                        <option value='bxystore'>BXYSTORE</option>
                                                        <option value='meng'>Mengtopup</option>
                                                        <option value='alpha'>Alpharamz</option>
                                                        <option value='gift_skin'>Gift Skin</option>
                                                        <option value='dm_vilog'>DM Vilog</option>
                                                        <option value='joki'>Joki</option>
                                                        <option value='manual'>Manual</option>
                                                    </select>
                                                    <p class='text-red-500 text-sm'>*Selalu Perhatikan! Jika Provider yang
                                                        kamu gunakan bukan Digiflazz maka <strong>Harus</strong> diganti</p>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='provider_id' class='col-span-2'>Provider ID</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='provider_id' id='provider_id'
                                                        value='" . $data->provider_id . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='harga_member' class='col-span-2'>Harga Member</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='harga_member' id='harga_member'
                                                        value='" . $data->harga_member . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='harga_reseller' class='col-span-2'>Harga Reseller</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='harga_reseller' id='harga_reseller'
                                                        value='" . $data->harga_reseller . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='profit_member' class='col-span-2'>Profit</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='profit_member' id='profit_member'
                                                        value='" . $data->profit_member . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='profit_reseller' class='col-span-2'>Profit Reseller</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='profit_reseller' id='profit_reseller'
                                                        value='" . $data->profit_reseller . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='modal' class='col-span-2'>Modal</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='modal' id='modal'
                                                        value='" . $data->modal . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='status' class='col-span-2'>Status</label>
                                                <div class='col-span-8'>
                                                    <select class='bg-input-form-admin select select-bordered w-full'
                                                        id='status' name='status'>
                                                        <option value='available'>Available</option>
                                                        <option value='unavailable'>Unavailable</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1'>
                                                <label for='flash_sale' class='col-span-2 mt-3'>Flash Sale?</label>
                                                <div class='col-span-8'>
                                                    <select class='bg-input-form-admin select select-bordered w-full'
                                                        id='flash_sale' name='flash_sale'>
                                                        <option value='0'>No</option>
                                                        <option value='1'>Yes</option>
                                                    </select>
                                                    <p class='text-red-500 text-sm'>*AKTIFKAN JIKA KAMU SEDANG MENGADAKAN
                                                        FLASHSALE</p>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='judul_flash_sale' class='col-span-2'>Judul Flash Sale</label>
                                                <div class='col-span-8'>
                                                    <input type='text' name='judul_flash_sale' id='judul_flash_sale'
                                                        value='" . $data->judul_flash_sale . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='harga_flash_sale' class='col-span-2'>Harga Flash Sale</label>
                                                <div class='col-span-8'>
                                                    <input type='number' name='harga_flash_sale' id='harga_flash_sale'
                                                        value='" . $data->harga_flash_sale . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='expired_flash_sale' class='col-span-2'>Expired Flash
                                                    Sale</label>
                                                <div class='col-span-8'>
                                                    <input type='date' name='expired_flash_sale'
                                                        id='expired_flash_sale' value='" . $data->expired_flash_sale . "'
                                                        class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='banner_flash_sale' class='col-span-2'>Banner Flash
                                                    Sale</label>
                                                <div class='col-span-8'>
                                                    <input type='file' name='banner_flash_sale' id='banner_flash_sale'
                                                        accept='image/*'
                                                        class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                </div>
                                            </div>
                                            <div class='grid lg:grid-cols-10 lg:grid-rows-1 items-center'>
                                                <label for='product_logo' class='col-span-2'>Product Logo</label>
                                                <div class='col-span-8'>
                                                    <input type='file' name='product_logo' id='product_logo'
                                                        accept='image/*'
                                                        class='bg-input-form-admin file-input file-input-bordered w-full light-dark-text'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='modal-action'>
                                            <button id='edit-button' type='submit' class='bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300 disabled:opacity-50'>Edit</button>
                                        </div>
                                    </form>
                                </div>
        ";

        return $send;
    }


    public function patch(Request $request, $id)
    {

        if ($request->file('banner_flash_sale')) {
            $imgfs = $request->file('banner_flash_sale');
            $filenamefs = Str::random('15') . '.' . $imgfs->extension();
            $imgfs->move('assets/banner_flash_sale', $filenamefs);
        }

        if ($request->file('product_logo')) {
            $img = $request->file('product_logo');
            $filename = Str::random('15') . '.' . $img->extension();
            $img->move('assets/product_logo', $filename);
        }

        $cek = Layanans::where('id', $id)->first();

        $layanan = Layanans::where('id', $id)->update([
            'layanan' => $request->layanan,
            'provider' => $request->provider,
            'provider_id' => $request->provider_id,
            'harga_member' => $request->harga_member + ($request->harga_member * $request->profit_member / 100),
            'harga_reseller' => $request->harga_reseller + ($request->harga_reseller * $request->profit_reseller / 100),
            // 'harga_platinum' => $request->harga_platinum + ($request->harga_platinum * $request->profit_platinum / 100),
            // 'harga_gold' => $request->harga_gold + ($request->harga_gold * $request->profit_gold / 100),
            'profit_member' => $request->profit_member,
            'profit_reseller' => $request->profit_reseller,
            'modal' => $request->modal,
            // 'profit_platinum' => $request->profit_platinum,
            // 'profit_gold' => $request->profit_gold,
            'status' => $request->status,
            'harga_flash_sale' => $request->harga_flash_sale,
            'is_flash_sale' => $request->flash_sale,
            'judul_flash_sale' => $request->judul_flash_sale,
            'expired_flash_sale' => date('Y-m-d', strtotime($request->expired_flash_sale)),
            'banner_flash_sale' => (!$request->file('banner_flash_sale') ? $cek->banner_flash_sale : '/assets/banner_flash_sale/' . $filenamefs),
            'product_logo' => (!$request->file('product_logo') ? $cek->product_logo : '/assets/product_logo/' . $filename)
        ]);


        return back()->with('success', 'Berhasil update layanan');
    }
}
