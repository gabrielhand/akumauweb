<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('admin.page.kelola-member', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'users' => User::orderBy('created_at', 'desc')->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return back()->with('success', 'Berhasil menghapus pengguna');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|min:3|unique:users,username|max:255',
            'password' => 'required|min:6|max:255',
            'role' => 'required'
        ], [
            'name.required' => 'Harap isi kolom nama!',
            'username.required' => 'Harap isi kolom username!',
            'username.min' => 'Panjang username minimal 3 huruf',
            'username.unique' => 'Username telah digunakan',
            'username.max' => 'Panjang username maximal 255 huruf',
            'password' => 'Harap isi kolom password',
            'password.min' => 'Panjang password minimal 6 huruf',
            'passowrd.max' => 'Panjang password maximal 255 huruf'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'balance' => 0,
            'role' => $request->role,
        ]);

        return back()->with('success', 'Berhasil menambah pengguna');
    }

    public function send(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'balance' => 'required|numeric|min:1'
        ], [
            'balance.min' => 'Balance minimal 1'
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) return back()->with('error', 'Username tidak ditemukan');

        $user->update([
            'balance'  => $user->balance + $request->balance
        ]);

        return back()->with('success', 'Berhasil menambahkan saldo');
    }

    public function show($id)
    {
        $data = User::where('id', $id)->first();

        $send = "
                <form action='" . route("member.detail.update", [$id]) . "' method='POST'>
                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Username</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='" . $data->username . "' name='username' readonly>
                        </div>
                    </div>                     
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Balance</label>
                        <div class='col-lg-10'>
                            <input type='number' class='form-control' value='" . $data->balance . "' name='balance'>
                        </div>
                    </div>    
                  <div class='mb-3 row'>
                     <label class='col-lg-2 col-form-label' for='example-fileinput'>Role</label>
                   <div class='col-lg-10'>
                       <select class='form-control @error('role') is-invalid @enderror' name='role'>
                          <option value='Member' {{ $data->role == 'Member' ? 'selected' : '' }}>Member</option>
                          <option value='Reseller' {{ $data->role == 'Reseller' ? 'selected' : '' }}>Reseller</option>
                          <option value='Admin' {{ $data->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                     </select>
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

    public function patch(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'balance' => 'required|numeric|min:0',
            'role' => 'required|in:Member,Reseller,Admin'
        ]);

        User::where('username', $request->username)->update([
            'balance' => $request->balance,
            'role' => $request->role
        ]);

        return back()->with('success', 'Berhasil update user');
    }
}
