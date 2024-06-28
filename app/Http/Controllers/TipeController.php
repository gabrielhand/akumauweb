<?php

namespace App\Http\Controllers;

use App\Models\Setting_Web;
use App\Models\Tipes;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting_Web::select('judul_web', 'logo_header', 'url_ig')->first();

        $tipes = Tipes::all();

        return view('admin.page.tipe', [
            'judul_web' => $settings->judul_web ?? null,
            'logo_header' =>  $settings->logo_header ?? null,
            'url_ig' =>  $settings->url_ig ?? null,
            'tipes' => $tipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $tipes = new Tipes();
        $tipes->name = $request->name;

        if ($tipes->save()) {
            return back()->with('success', 'Berhasil menambahkan tipe');
        } else {
            return back()->with('error', 'Gagal menambahkan tipe');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipe = Tipes::find($id);

        $send = "           <div>
                                <form action='" . route("tipes.update",  [$id]) . "' method='post'>
                                    <input type='hidden' name='_token' value='" . csrf_token() . "'>
                                    <input type='hidden' name='_method' value='PUT'>
                                    <div class='grid lg:grid-cols-8 lg:grid-rows-1 items-center'>
                                        <label for='name' class='col-span-2'>Nama Tipe</label>
                                        <div class='col-span-6'>
                                            <input type='text' name='name' id='input-edit-name'
                                                value='" . $tipe->name . "'
                                                class='bg-input-form-admin px-3 py-2.5 rounded-lg border w-full'>
                                        </div>
                                    </div>
                                    <div class='flex justify-end mt-12'>
                                        <button type='submit' id='edit-button'
                                            class='bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300 disabled:opacity-50'
                                            >
                                            Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
        
        ";

        return $send;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipes = Tipes::where('id', $id);
        $tipes->update([
            'name' => $request->name,
        ]);

        if ($tipes) {
            return back()->with('success', 'Berhasil mengedit tipe!');
        } else {
            return back()->with('error', 'Gagal mengedit tipe!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipes = Tipes::find($id);

        if ($tipes->delete()) {
            return back()->with('success', 'Berhasil menghapus tipe');
        } else {
            return back()->with('error', 'Gagal menghapus tipe');
        }
    }
}
