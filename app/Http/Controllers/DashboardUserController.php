<?php

namespace App\Http\Controllers;

use App\Models\Pembelians;
use App\Models\Setting_Web;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    public function profile()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $pembelian = DB::table('pembelians')
            ->join('layanans', 'pembelians.layanan', '=', 'layanans.layanan')
            ->join('kategoris', 'layanans.kategori_id', '=', 'kategoris.id')
            ->select('pembelians.*', 'layanans.kategori_id', 'kategoris.nama as nama_kategori', 'kategoris.thumbnail')
            ->where('pembelians.username', auth()->user()->username)
            ->orderByDesc('pembelians.created_at')
            ->limit(5)
            ->get();

        return view('page.me', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'data' => $pembelian,

        ]);
    }

    public function riwayat()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('page.riwayat-transaksi', [
            'data' => Pembelians::where('username', Auth::user()->username)->get(),
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
        ]);
    }

    public function editProfileImage(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,gif',
        ], [
            'image.required' => 'Harap unggah gambar!',
            'image.mimes' => 'Format gambar harus berupa png, jpg, jpeg, atau gif!',
        ]);

        if ($request->hasFile('image')) {
            if (auth()->user()->image) {
                Storage::disk('public')->delete(auth()->user()->image);
            }

            $imagePath = $request->file('image')->store('assets/profile', 'public');
            User::where('id', auth()->user()->id)->update(['image' => $imagePath]);

            return response()->json([
                'success' => 'Berhasil mengedit foto profil!',
                'image_path' => asset('storage/' . $imagePath),
            ]);
        }

        return response()->json([
            'error' => 'Gagal mengedit foto profil. Harap unggah file gambar!',
        ], 422);
    }


    public function editProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:255|unique:users,username,' . auth()->user()->id,
        ], [
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maksimal 255 huruf',
        ]);

        $username = $request->username;

        $id = auth()->user()->id;

        User::where('id', $id)->update(['username' => $username]);

        $updatedUser = User::find($id);

        return response()->json([
            'success' => "Berhasil mengedit username!",
            'username' => $updatedUser->username,
        ]);
    }

    public function editPassword(Request $request)
    {
        $request->validate([
            'passwordlama' => 'required|min:6|max:255',
            'passwordbaru' => 'required|min:6|max:255|confirmed',
        ], [
            'passwordlama.required' => 'Harap isi kolom password lama!',
            'passwordlama.min' => 'Panjang password minimal 6 huruf',
            'passwordlama.max' => 'Panjang password maximal 255 huruf',
            'passwordbaru.required' => 'Harap isi kolom password baru!',
            'passwordbaru.min' => 'Panjang password minimal 6 huruf',
            'passwordbaru.max' => 'Panjang password maximal 255 huruf',
            'passwordbaru.confirmed' => 'Konfirmasi password baru tidak cocok!',
        ]);

        if (!Hash::check($request->passwordlama, auth()->user()->password)) {
            return response()->json([
                'errors' => ['passwordlama' => ["Password lama tidak sesuai!"]],
            ], 422);
        }

        if (!empty($request->passwordbaru)) {
            User::where('id', auth()->user()->id)->update(['password' => Hash::make($request->passwordbaru)]);
            return response()->json([
                'success' => "Berhasil mengedit password!",
            ]);
        }

        return response()->json([
            'success' => "Tidak ada pengeditan password!",
        ]);
    }
}
