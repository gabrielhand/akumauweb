@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('berita') }}'"
                    class="{{ request()->is('setting/web') ? 'text-purple-400 cursor-pointer' : '' }}">Konfigurasi</li>
                <li>Payment</li>
            </ul>
        </div>
        <div>
            <div class="">
                <div class="flex justify-start gap-x-2 mb-10">
                    <button id="btn-tab-1" type="button"
                        class="px-3 py-2.5 text-sm bg-purple-500 rounded-lg text-purple-500 duration-300">
                        Konfigurasi Website
                    </button>
                    <button id="btn-tab-2" type="button"
                        class="px-3 py-2.5 text-sm rounded-lg text-purple-500 duration-300">
                        Konfigurasi Tentang Kami
                    </button>
                    <button id="btn-tab-3" type="button"
                        class="px-3 py-2.5 text-sm rounded-lg text-purple-500 duration-300">
                        Konfigurasi API
                    </button>
                </div>
                <div id="tab-content-1" class="tab-content-custom">
                    <!-- Konfigurasi Website Content -->
                    <div class="flex flex-col gap-y-8">
                        <div id="form-konfigurasi-website"
                            class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                            <p class="lg:text-2xl text-xl font-medium">Konfigurasi Website</p>
                            <div class="mt-12">
                                <form action="{{ route('setting-web.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-col gap-y-4">
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="judul_web" class="col-span-2">Judul Website</label>
                                            <div class="col-span-8">
                                                <input type="text" name="judul_web" id="judul_web"
                                                    value="{{ $web->judul_web }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                            <label for="deskripsi_web" class="col-span-2 mt-3">Deskripsi Website</label>
                                            <div class="col-span-8">
                                                <textarea name="deskripsi_web" id="deskripsi_web"
                                                    class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-40 lg:text-base textarea-form-admin">{{ $web->deskripsi_web }}</textarea>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                            <label for="keyword" class="col-span-2 mt-3">Keyword</label>
                                            <div class="col-span-8">
                                                <textarea name="keyword" id="keyword"
                                                    class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-40 lg:text-base textarea-form-admin">{{ $web->keyword }}</textarea>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 mt-3">
                                            <div class="col-span-2">
                                                <div class="w-36">
                                                    <label for="og_image">Header Image Website</label>
                                                </div>
                                            </div>
                                            <div class="col-span-8">
                                                <div>
                                                    <img width="100" class="mb-3" src="{{ asset($web->og_image) }}"
                                                        alt="kbrstore">
                                                    <input type="file" name="og_image" id="og_image" accept="image/*"
                                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 mt-3">
                                            <div class="col-span-2">
                                                <label for="logo_header">Logo Header</label>
                                            </div>
                                            <div class="col-span-8">
                                                <div>
                                                    <img width="100" class="mb-3" src="{{ asset($web->logo_header) }}"
                                                        alt="kbrstore">
                                                    <input type="file" name="logo_header" id="logo_header"
                                                        accept="image/*"
                                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 mt-3">
                                            <div class="col-span-2">
                                                <label for="logo_footer">Logo Footer</label>
                                            </div>
                                            <div class="col-span-8">
                                                <div>
                                                    <img width="100" class="mb-3" src="{{ asset($web->logo_footer) }}"
                                                        alt="kbrstore">
                                                    <input type="file" name="logo_footer" id="logo_footer"
                                                        accept="image/*"
                                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 mt-3">
                                            <div class="col-span-2">
                                                <label for="logo_favicon">Logo Favicon</label>
                                            </div>
                                            <div class="col-span-8">
                                                <div>
                                                    <img width="100" class="mb-3"
                                                        src="{{ asset($web->logo_favicon) }}" alt="kbrstore">
                                                    <input type="file" name="logo_favicon" id="logo_favicon"
                                                        accept="image/*"
                                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="url_wa" class="col-span-2">URL WA</label>
                                            <div class="col-span-8">
                                                <input type="text" name="url_wa" id="url_wa"
                                                    value="{{ $web->url_wa }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="url_ig" class="col-span-2">URL IG</label>
                                            <div class="col-span-8">
                                                <input type="text" name="url_ig" id="url_ig"
                                                    value="{{ $web->url_ig }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="url_tiktok" class="col-span-2">URL TikTok</label>
                                            <div class="col-span-8">
                                                <input type="text" name="url_tiktok" id="url_tiktok"
                                                    value="{{ $web->url_tiktok }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="url_youtube" class="col-span-2">URL Youtube</label>
                                            <div class="col-span-8">
                                                <input type="text" name="url_youtube" id="url_youtube"
                                                    value="{{ $web->url_youtube }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                            <label for="url_fb" class="col-span-2">URL Facebook</label>
                                            <div class="col-span-8">
                                                <input type="text" name="url_fb" id="url_fb"
                                                    value="{{ $web->url_fb }}"
                                                    class="px-3 py-2.5 rounded-lg border w-full">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end mt-6 gap-x-2">
                                        <button type="submit"
                                            class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                            Simpan
                                        </button>
                                        <button type="button"
                                            class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                            Maintenance
                                        </button>
                                        <button type="button"
                                            class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                            Up
                                        </button>
                                        <button id="btn-reset-tmember" type="button"
                                            class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                            Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="form-slogan-web">
                            <div class="bg-sidebar-admin p-6 light-dark-text rounded-xl shadow-sm">
                                <div>
                                    <p class="lg:text-2xl text-xl font-medium">Slogan Web</p>
                                    <div class="mt-4">
                                        <form action="{{ route('slogan-web.post') }}" method="POST">
                                            @csrf
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="slogan_web" class="col-span-2 mt-3">Slogan Website</label>
                                                <div class="col-span-8">
                                                    <textarea name="slogan_web" id="slogan_web" class="px-3 py-2.5 rounded-lg border w-full textarea-form-admin">{{ $web->slogan_web }}</textarea>
                                                </div>
                                            </div>
                                            <div class="flex justify-end mt-6 gap-x-2">
                                                <button type="submit"
                                                    class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                    Simpan
                                                </button>
                                                <button id="btn-reset-tmember" type="button"
                                                    class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                    Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-warna-website-form-konfigurasi-harga-membership">
                            <div class="flex gap-x-6">
                                <div id="form-konfigurasi-warna-website"
                                    class="bg-sidebar-admin p-6 light-dark-text rounded-xl shadow-sm flex-1">
                                    <div>
                                        <p class="lg:text-2xl text-xl font-medium">Konfigurasi Warna Website</p>
                                        <div class="mt-10">
                                            <form action="{{ route('warna-web.post') }}" method="POST">
                                                @csrf
                                                <div class="flex flex-col gap-y-4">
                                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                                        <label for="warna1" class="col-span-2">WARNA 1</label>
                                                        <div class="col-span-6">
                                                            <input type="text" name="warna1" id="warna1"
                                                                value="{{ $web->warna1 }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                                        <label for="warna2" class="col-span-2">WARNA 2</label>
                                                        <div class="col-span-6">
                                                            <input type="text" name="warna2" id="warna2"
                                                                value="{{ $web->warna2 }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                                        <label for="warna3" class="col-span-2">WARNA 3</label>
                                                        <div class="col-span-6">
                                                            <input type="text" name="warna3" id="warna3"
                                                                value="{{ $web->warna3 }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                                        <label for="warna4" class="col-span-2">WARNA 4</label>
                                                        <div class="col-span-6">
                                                            <input type="text" name="warna4" id="warna4"
                                                                value="{{ $web->warna4 }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                                        <label for="warna5" class="col-span-2">WARNA 5</label>
                                                        <div class="col-span-6">
                                                            <input type="text" name="warna5" id="warna5"
                                                                value="{{ $web->warna5 }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-end mt-6 gap-x-2">
                                                        <button type="submit"
                                                            class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                            Kirim
                                                        </button>
                                                        <button id="btn-reset-tmember" type="reset"
                                                            class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="form-konfigurasi-harga-membership" class="flex-1">
                                    <div class="bg-sidebar-admin p-6 light-dark-text rounded-xl shadow-sm">
                                        <p class="lg:text-2xl text-xl font-medium">Konfigurasi Harga Membership</p>
                                        <div class="mt-10">
                                            <form action="{{ route('harga-mbr.post') }}" method="POST">
                                                @csrf
                                                <div class="flex flex-col gap-y-4">
                                                    <div class="grid lg:grid-cols-5 lg:grid-rows-1 items-center">
                                                        <label for="harga_gold" class="col-span-2">HARGA GOLD</label>
                                                        <div class="col-span-3">
                                                            <input type="text" name="harga_gold" id="harga_gold"
                                                                value="{{ $web->harga_gold }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                    <div class="grid lg:grid-cols-5 lg:grid-rows-1 items-center">
                                                        <label for="harga_platinum" class="col-span-2">HARGA
                                                            PLATINUM</label>
                                                        <div class="col-span-3">
                                                            <input type="text" name="harga_platinum"
                                                                id="harga_platinum" value="{{ $web->harga_platinum }}"
                                                                class="px-3 py-2.5 rounded-lg border w-full">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex justify-end mt-6 gap-x-2">
                                                    <button type="submit"
                                                        class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                        Kirim
                                                    </button>
                                                    <button id="btn-reset-tmember" type="reset"
                                                        class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                        Reset
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-mutasi-e-wallet-bank">
                            <div class="bg-sidebar-admin p-6 light-dark-text rounded-xl shadow-sm">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi mutasi E-wallet/Bank</p>
                                <div class="mt-10">
                                    <form action="{{ route('mutasi-ewallet.post') }}" method="POST">
                                        @csrf
                                        <div class="flex justify-between">
                                            <div class="flex flex-col gap-y-4">
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="ovo_admin" class="col-span-4">OVO ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="ovo_admin" id="ovo_admin"
                                                            value="{{ $web->ovo_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="ovo1_admin" class="col-span-4">OVO1 ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="ovo1_admin" id="ovo1_admin"
                                                            value="{{ $web->ovo1_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="gopay_admin" class="col-span-4">GOPAY ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="gopay_admin" id="gopay_admin"
                                                            value="{{ $web->gopay_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="gopay1_admin" class="col-span-4">GOPAY1 ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="gopay1_admin" id="gopay1_admin"
                                                            value="{{ $web->gopay1_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-y-4">
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="dana_admin" class="col-span-4">DANA ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="dana_admin" id="dana_admin"
                                                            value="{{ $web->dana_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="shopeepay_admin" class="col-span-4">SHOOPEPAY
                                                        ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="shopeepay_admin" id="shopeepay_admin"
                                                            value="{{ $web->shopeepay_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                                <div class="grid lg:grid-cols-9 lg:grid-rows-1 items-center">
                                                    <label for="bca_admin" class="col-span-4">BCA ADMIN</label>
                                                    <div class="col-span-5">
                                                        <input type="text" name="bca_admin" id="bca_admin"
                                                            value="{{ $web->bca_admin }}"
                                                            class="px-3 py-2.5 rounded-lg border w-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Kirim
                                            </button>
                                            <button id="btn-reset-mutasi-ewallet-bank" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-content-2" class="tab-content-custom hidden">
                    <div class="flex flex-col gap-y-8">
                        <!-- Konfigurasi Tentang Kami Content -->
                        <div id="form-konfigurasi-tentang-kami">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi Tentang Kami</p>
                                <p class="font-medium mt-4">HALAMAN TENTANG KAMI YANG MANA? <span
                                        onclick="window.location.href='{{ route('about') }}'"
                                        class="cursor-pointer text-warning">KLIK DISINI</span></p>
                                <div class="mt-8">
                                    <form action="{{ route('tentang-kami.post') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="sejarah" class="col-span-2 mt-3">SEJARAH STORE 1</label>
                                                <div class="col-span-8">
                                                    <textarea name="sejarah" id="sejarah"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->sejarah }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="sejarah_1" class="col-span-2 mt-3">SEJARAH STORE 2</label>
                                                <div class="col-span-8">
                                                    <textarea name="sejarah_1" id="sejarah_1"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-40 lg:text-base textarea-form-admin">{{ $web->sejarah_1 }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="visi" class="col-span-2 mt-3">VISI STORE</label>
                                                <div class="col-span-8">
                                                    <textarea name="visi" id="visi"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->visi }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="misi" class="col-span-2 mt-3">MISI STORE</label>
                                                <div class="col-span-8">
                                                    <textarea name="misi" id="misi"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->misi }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="nama_ceo" class="col-span-2">NAMA CEO</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="nama_ceo" id="nama_ceo"
                                                        value="{{ $web->nama_ceo }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <div class="col-span-2">
                                                    <div class="w-36 mt-3">
                                                        <label for="logo_ceo">LOGO CEO</label>
                                                    </div>
                                                </div>
                                                <div class="col-span-8">
                                                    <div>
                                                        <img id="img-logo_ceo" width="100" class="mb-3"
                                                            src="{{ asset($web->logo_ceo) }}" alt="kbrstore">
                                                        <input type="file" name="logo_ceo" id="logo_ceo"
                                                            accept="image/*"
                                                            class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="deskripsi_ceo" class="col-span-2 mt-3">DESKRIPSI CEO</label>
                                                <div class="col-span-8">
                                                    <textarea name="deskripsi_ceo" id="deskripsi_ceo"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->deskripsi_ceo }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="nama_bagan" class="col-span-2">NAMA BAGAN / STORE</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="nama_bagan" id="nama_bagan"
                                                        value="{{ $web->nama_bagan }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="alamat" class="col-span-2 mt-3">ALAMAT BISNIS</label>
                                                <div class="col-span-8">
                                                    <textarea name="alamat" id="alamat"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->alamat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                                <label for="email" class="col-span-2 mt-3">EMAIL BISNIS</label>
                                                <div class="col-span-8">
                                                    <textarea name="email" id="email"
                                                        class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full lg:h-16 lg:text-base textarea-form-admin">{{ $web->email }}</textarea>
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="telp" class="col-span-2">NOMOR BISNIS</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="telp" id="telp"
                                                        value="{{ $web->telp }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="flex justify-end mt-6 gap-x-2">
                                                <button type="submit"
                                                    class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                    Kirim
                                                </button>
                                                <button id="btn-reset-konfigurasi-tentang-kami" type="reset"
                                                    class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                    Reset
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-content-3" class="tab-content-custom hidden">
                    <div class="flex flex-col gap-y-8">
                        <!-- Konfigurasi API Content -->
                        <div id="form-konfigurasi-tripay">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi Tripay</p>
                                <p class="mt-4 text-error">URL CALLBACK : {{ ENV('APP_URL') }}/callback</p>
                                <div class="mt-8">
                                    <form action="{{ route('tripay.post') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="tripay_api" class="col-span-2">TRIPAY API</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="tripay_api" id="tripay_api"
                                                        value="{{ $web->tripay_api }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="tripay_merchant_code" class="col-span-2">TRIPAY MERCHANT
                                                    CODE</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="tripay_merchant_code"
                                                        id="tripay_merchant_code"
                                                        value="{{ $web->tripay_merchant_code }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="tripay_private_key" class="col-span-2">TRIPAY PRIVATE
                                                    KEY</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="tripay_private_key"
                                                        id="tripay_private_key" value="{{ $web->tripay_private_key }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Simpan
                                            </button>
                                            <button id="btn-reset-tripay" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-digiflazz">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi Digiflazz</p>
                                <div class="mt-8">
                                    <form action="{{ route('digiflazz.post') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="username_digi" class="col-span-2">USERNAME DIGI</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="username_digi" id="username_digi"
                                                        value="{{ $web->username_digi }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="api_key_digi" class="col-span-2">API KEY DIGI</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="api_key_digi" id="api_key_digi"
                                                        value="{{ $web->api_key_digi }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Simpan
                                            </button>
                                            <button onclick="" type="type"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Get Layanan
                                            </button>
                                            <button id="btn-reset-digiflazz" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-apigames">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi ApiGames</p>
                                <div class="mt-8">
                                    <form action="{{ route('apigames.post') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="apigames_secret" class="col-span-2">APIGAMES SECRET</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="apigames_secret" id="apigames_secret"
                                                        value="{{ $web->apigames_secret }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="apigames_merchant" class="col-span-2">APIGAMES
                                                    MERCHANT</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="apigames_merchant" id="apigames_merchant"
                                                        value="{{ $web->apigames_merchant }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Simpan
                                            </button>
                                            <button id="btn-reset-apigames" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-vip-reseller">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi VIP Reseller</p>
                                <div class="mt-8">
                                    <form action="{{ route('vip-reseller.post') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="vip_apiid" class="col-span-2">VIP API ID</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="vip_apiid" id="vip_apiid"
                                                        value="{{ $web->vip_apiid }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="vip_apikey" class="col-span-2">VIP APIKEY</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="vip_apikey" id="vip_apikey"
                                                        value="{{ $web->vip_apikey }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Simpan
                                            </button>
                                            <button id="btn-reset-vip-reseller" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="form-konfigurasi-wa-gateway">
                            <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                                <p class="lg:text-2xl text-xl font-medium">Konfigurasi WA Gateway</p>
                                <p onclick="window.location.href='https://wa.me/62895346404969'"
                                    class="mt-4 text-error cursor-pointer">Klik Disini Untuk Hubungi Developer</p>
                                <div class="mt-8">
                                    <form action="{{ route('wagateway.post') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-col gap-y-4">
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="nomor_admin" class="col-span-2">NOMOR ADMIN</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="nomor_admin" id="nomor_admin"
                                                        value="{{ $web->nomor_admin }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="wa_key" class="col-span-2">WA KEY</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="wa_key" id="wa_key"
                                                        value="{{ $web->wa_key }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                                <label for="wa_number" class="col-span-2">WA NUMBER</label>
                                                <div class="col-span-8">
                                                    <input type="text" name="wa_number" id="wa_number"
                                                        value="{{ $web->wa_number }}"
                                                        class="px-3 py-2.5 rounded-lg border w-full">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-6 gap-x-2">
                                            <button type="submit"
                                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                                Simpan
                                            </button>
                                            <button id="btn-reset-wa-gateway" type="reset"
                                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('tab-content-1').classList.remove('hidden');
            document.getElementById('btn-tab-1').classList.add('text-white', 'shadow-md', 'shadow-purple-400');

            document.getElementById('btn-tab-1').addEventListener('click', function() {
                showTabContent('tab-content-1', 'btn-tab-1');
            });
            document.getElementById('btn-tab-2').addEventListener('click', function() {
                showTabContent('tab-content-2', 'btn-tab-2');
            });
            document.getElementById('btn-tab-3').addEventListener('click', function() {
                showTabContent('tab-content-3', 'btn-tab-3');
            });

            function showTabContent(tabId, btnId) {
                document.querySelectorAll('.tab-content-custom').forEach(tab => tab.classList.add('hidden'));
                document.getElementById(tabId).classList.remove('hidden');

                document.querySelectorAll('button[id^="btn-tab-"]').forEach(btn => btn.classList.remove(
                    'bg-purple-500', 'shadow-md', 'shadow-purple-400', 'text-white'));
                document.getElementById(btnId).classList.add('bg-purple-500', 'shadow-md', 'shadow-purple-400',
                    'text-white');
            }
        });
        // 
    </script>
@endsection
