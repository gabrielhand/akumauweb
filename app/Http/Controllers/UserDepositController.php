<?php

namespace App\Http\Controllers;

use App\Models\Deposits;
use App\Models\Setting_Web;
use App\Models\User;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{
    public function create()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        return view('admin.page.member-deposit', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'data' => Deposits::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function patch($id, $status)
    {
        $deposit = Deposits::where('id', $id)->first();

        $user = User::where('username', $deposit->username)->first();

        $user->update([
            'balance' => $deposit->jumlah + $user->balance
        ]);

        $deposit->update([
            'status' => $status
        ]);

        return back()->with('success', 'Berhasil konfirmasi deposit');
    }
}
