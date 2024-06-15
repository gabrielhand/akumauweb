<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('page.register', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|unique:users,username|max:255',
            'password' => 'required|min:6|max:255',
            'whatsapp' => 'required|numeric|unique:users,whatsapp',
        ], [
            'name.required' => 'Harap isi kolom nama!',
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maximal 255 huruf',
            'password.required' => 'Harap isi kolom password!',
            'password.min' => 'Panjang password minimal 6 huruf',
            'password.max' => 'Panjang password maximal 255 huruf',
            'whatsapp.required' => 'Harap isi kolom nomor whatsapp!',
            'whatsapp.regex' => 'Format nomor WhatsApp tidak valid',
            'whatsapp.unique' => 'Nomor WhatsApp telah digunakan',
        ]);
        
        
         $no = $request->whatsapp;
        
        if($no[0] == 0){
            
             $no = substr_replace($no, '62', 0, 1);
            
        }
        
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->balance = 0;
        $user->role = 'Member';
        $user->api_key = Str::random(25);
        $user->whatsapp = $no;
        $user->save();

        return redirect(route('login'))->with('success', 'Berhasil melakukan pendaftaran, silakan masuk menggunakan akun anda');
    }
}
