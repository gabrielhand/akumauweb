<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('page.login', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
        ]);
    }

    public function store(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Harap isi kolom username!',
            'password.required' => 'Harap isi kolom password!',
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'Admin') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->route('profile')->with('success', 'Berhasil login!');
            }
        }

        return back()->with('error', 'Mohon periksa kembali Username dan Password Anda. Kami tidak dapat menemukan akun Anda.')->withInput();
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
