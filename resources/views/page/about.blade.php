@extends('layout.main')

@section('content')
    <section id="content-tnc" class="md:px-6 px-4 pt-8 light-dark-text">
        <h1 class="text-center font-bold text-lg">Tentang</h1>
        <div class="rounded-xl shadow-sm lg:p-6 md:p-6 p-4 mt-3 bg-sidebar-menu">
            <article class="prose dark:prose-invert">
                <div>
                    <h4 class="text-lg font-semibold text-purple-500 mb-2">{{ $sejarah }}</h4>
                    <p>{{ $sejarah_1 }}</p>
                </div>
                <br> <br>
                <div class="flex justify-between gap-x-6">
                    <div>
                        <h4 class="text-lg font-semibold text-purple-500 mb-2">Visi</h4>
                        <p><span class="font-semibold">{{ $sejarah }}</span> mempunyai Visi yaitu {{ $visi }}
                        </p>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-purple-500 mb-2">Misi</h4>
                        <p><span class="font-semibold">{{ $sejarah }}</span> juga mempunyai Misi yaitu
                            {{ $misi }}</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="mt-6 grid grid-cols-6 grid-rows-2 gap-6">
            <div class="col-span-2 row-span-2 w-full rounded-xl shadow-sm lg:p-6 md:p-6 p-4 bg-sidebar-menu">
                <div>
                    <h4 class="text-lg font-semibold text-purple-500 mb-2">Owner</h4>
                    <figure class="lg:p-4 md:p-4 p-2">
                        <img src="{{ $logo_ceo }}" class="">
                    </figure>
                </div>
            </div>
            <div class="col-span-4 rounded-xl shadow-sm lg:p-6 md:p-6 p-4 bg-sidebar-menu">
                <article class="prose dark:prose-invert">
                    <div class="">
                        <h4 class="text-lg font-semibold text-purple-500 mb-2">{{ $nama_ceo }}</h4>
                        <p>OWNER {{ ENV('APP_NAME') }}</p><br>
                        <p>{{ $deskripsi_ceo }}</p>
                    </div>
                </article>
            </div>
            <div class="col-span-4 rounded-xl shadow-sm lg:p-6 md:p-6 p-4 bg-sidebar-menu">
                <article class="prose dark:prose-invert">
                    <div class="">
                        <h4 class="text-lg font-semibold text-purple-500 mb-2">Alamat</h4>
                        <p>{{ $nama_bagan }} <br>
                            {{ $alamat }}
                        </p> <br>
                        <p>
                            Telephone : <span class="text-purple-500">{{ $telp }}</span>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
