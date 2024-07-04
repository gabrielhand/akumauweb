@extends('layout.main')

@section('content')
    <section id="hero" class="pb-6 bg-[#21222e] relative">
        <div class="w-full h-48 md:h-[24rem] relative ">
            <figure><img alt="{{ $kategori->nama }}" fetchpriority="high" decoding="async" data-nimg="fill" class="object-cover"
                    sizes="(max-width: 768px) 100vw, 100px" src="{{ $kategori->bannerlayanan }}"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
            <div class="absolute inset-0 bg-gradient-to-b from-[#16172100] to-[#2F3038] mix-blend-multiply"></div>
        </div>
        <div
            class="-mt-[3.5rem] md:-mt-[7.2rem] md:px-6 px-4 flex flex-col items-center md:flex-row md:items-start z-20 relative gap-3 md:gap-8">
            <div
                class="h-32 w-32 md:h-48 md:w-48 lg:h-52 lg:w-52 relative shrink-0 p-1.5 md:p-2.5 rounded-xl md:rounded-2xl backdrop-blur-lg bg-white/20">
                <figure class="h-full w-full">
                    <img alt="{{ $kategori->nama }}" fetchpriority="high" width="400" height="400" decoding="async"
                        data-nimg="1" class="object-cover rounded-lg md:rounded-xl h-full w-full"
                        sizes="(max-width: 768px) 100vw, 100px" src="{{ $kategori->thumbnail }}"
                        style="color: transparent;">
                </figure>
            </div>
            <div class="text-center md:text-left mt-0 md:mt-7">
                <div class="space-y-2">
                    <h1 class="text-lg md:text-xl lg:text-2xl font-semibold text-white">{{ $kategori->nama }}</h1>
                    <h2 class="text-sm md:text-lg lg:text-xl text-white">{{ $kategori->sub_nama }}</h2>
                </div>
                <div class="h-4 md:h-8"></div>
                <div class="space-y-5">
                    <div class="flex gap-3 flex-wrap md:justify-start justify-center">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-purple-500 duration-300/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="like" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class="" src="https://mobafams.com/svgs/like.svg"
                                    style="color: transparent;"></figure> Layanan Terbaik
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-purple-500 duration-300/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="card" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class="" src="https://mobafams.com/svgs/card.svg"
                                    style="color: transparent;"></figure> Pembayaran yang Aman
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-purple-500 duration-300/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="time24hours" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class=""
                                    src="https://mobafams.com/svgs/time24hours.svg" style="color: transparent;"></figure>
                            Layanan Pelanggan 24/7
                        </div>
                    </div>
                    <div class="prose dark:prose-invert prose-invert">
                        <div class="text-xs md:text-sm overflow-hidden text-white" style="max-height: 2.8em;">
                            <p>{!! $kategori->ket_layanan !!}</p>
                        </div>
                        <button type="button" class="text-blue-500 mt-2 text-xs">Show
                            more
                        </button>
                    </div>
                    <button onclick="my_modal_1.showModal()"
                        class="inline-flex items-center justify-center rounded-md font-normal ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap hover:bg-gray-300 hover:text-black hover:font-normal gap-3 text-white px-2 py-1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-help-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg> Lihat Cara Pembelian
                    </button>
                    <dialog id="my_modal_1" class="modal">
                        <div class="modal-box light-dark-text">
                            <h3 class="font-semibold text-lg">Cara Pembelian {{ $kategori->nama }}</h3>
                            <p class="py-4 ms-5">{!! $kategori->ket_layanan !!}</p>
                            <div class="modal-action justify-start">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    <button class="btn bg-purple-600 text-white">Kembali</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
        <div
            class="absolute hidden md:block right-0 bottom-0 md:h-6 lg:h-8 xl:h-10 w-[30%] rounded-tl-[100px] bg-gradient-to-r from-purple-700 via-purple-800 to-gray-900">
        </div>
    </section>
    <section id="content" class="md:px-6 px-4">
        <form autocomplete="off" autosave="off">
            <div class="grid grid-cols-12 lg:gap-0 relative space-x-0 lg:space-x-6">
                <div class="col-span-12 lg:col-span-7 md:col-span-12">
                    <div class="flex flex-row gap-2 mb-4">
                        <div class="inline-flex"><button
                                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap hover:bg-purple-500/80 h-10 py-2 px-4 text-white bg-purple-500"
                                type="button">
                                <span class="font-medium line-clamp-1">Produk
                                </span>
                            </button>
                        </div>
                        <div class="inline-flex">
                            <button
                                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap hover:bg-purple-500/80 h-10 py-2 px-4 bg-slate-200 text-black"
                                type="button">
                                <span class="font-medium line-clamp-1">Ulasan
                                    Produk
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-6 mb-4">
                        <div
                            class="shadow-sm bg-sidebar-menu light-dark-text text-productDetail-card-fg rounded-xl p-4 space-y-3">
                            <h3 class="text-lg font-medium">Deskripsi {{ $kategori->nama }}</h3>
                            <div class="prose dark:prose-invert">
                                <div class="text-sm md:text-sm overflow-hidden" style="max-height: 3.8rem;">
                                    <p>{!! $kategori->ket_layanan !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chooseLayanan" class="space-y-4">
                        <h3 class="text-sm md:text-lg font-medium light-dark-text">Pilih Nominal</h3>
                        <div class="space-y-1">
                            <div class="mb-4">
                                @if ($nominal->isEmpty())
                                    <section id="content" class="md:px-6 px-4">
                                        <div class="flex flex-col w-full justify-center items-center">
                                            <figure style="width: 300px;">
                                                <img alt="empty-box" loading="lazy" width="300" height="300"
                                                    decoding="async" data-nimg="1" class=""
                                                    src="https://mobafams.com/gifs/produk_empty.gif"
                                                    style="color: transparent;">
                                            </figure>
                                            <div class="space-y-3 flex flex-col items-center">
                                                <p class="text-lg">Produk belum tersedia...</p>
                                                <button
                                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-purple-500 duration-300/80 h-10 px-4 py-2">
                                                    Cari Produk Lainnya
                                                </button>
                                            </div>
                                        </div>
                                    </section>
                                @else
                                    @php
                                        $subReversed = array_reverse($sub);
                                    @endphp
                                    <div class="w-full overflow-hidden">
                                        <div class="flex justify-start hover:overflow-x-auto pb-2 gap-x-4 w-full">
                                            @foreach ($subReversed as $index => $subkat)
                                                <button id="{{ $subkat['name'] }}" type="button"
                                                    onclick="filterNominals('{{ $subkat['name'] }}')"
                                                    class="subkat-button inline-flex px-6 h-24 flex-col justify-evenly gap-1 py-2 items-center rounded-xl cursor-pointer relative hover:bg-purple-500 hover:bg-opacity-20 bg-sidebar-menu light-dark-text duration-300">
                                                    @if (isset($subkat['sub_logo']))
                                                        <div class="relative h-10 w-10 py-1">
                                                            <figure style="width: 35px;">
                                                                <img alt="{{ $subkat['name'] }} logo" loading="lazy"
                                                                    width="35" height="35" decoding="async"
                                                                    data-nimg="1" class="object-cover object-center py-1"
                                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                                    src="{{ $subkat['sub_logo'] }}"
                                                                    style="color: transparent;">
                                                            </figure>
                                                        </div>
                                                    @endif
                                                    <div class="flex items-center h-full gap-8 text-sm">
                                                        {{ $subkat['name'] }}
                                                    </div>
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2"
                                tabindex="0" style="outline: none;">
                                <div class="flex flex-col mb-4">
                                    <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-2 gap-4">
                                        @foreach ($sub as $index => $subkat)
                                            @foreach ($nominal as $nom)
                                                @if ($nom->sub_category_id == $subkat['id'])
                                                    <div class="nominal-item" data-subkat="{{ $subkat['name'] }}">
                                                        {{-- <button type="button" role="radio" aria-checked="false"
                                                        data-state="unchecked" value="[object Object]"
                                                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                        id="" tabindex="-1">
                                                    </button> --}}
                                                        <input type="radio" name="nominal"
                                                            id="nominal-{{ $nom->id }}" value="{{ $nom->id }}"
                                                            data-type="diamond" class="nom-radio"
                                                            onchange="select_product('{{ $nom->id }}', '{{ $nom->layanan }}', '{{ $nom->harga }}');"
                                                            style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                            {{ Request::get('fs') == $nom->id ? 'checked' : '' }} />
                                                        <label for="nominal-{{ $nom->id }}" class="">
                                                            <div id="content-nominal-{{ $nom->id }}"
                                                                class="content-layanan px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer relative hover:bg-purple-500 hover:bg-opacity-20 bg-sidebar-menu light-dark-text h-full transition-colors duration-200">
                                                                <div id="select-product-checklist-{{ $nom->id }}"
                                                                    class="select-product-checklist hidden absolute right-0 top-0 bg-purple-500 text-white rounded-bl-lg rounded-tr-lg p-0.5">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-check">
                                                                        <path d="M20 6 9 17l-5-5"></path>
                                                                    </svg>
                                                                </div>
                                                                <div class="flex w-full items-center gap-4 text-sm">
                                                                    <div
                                                                        class="flex w-full flex-col gap-1 justify-center text-center">
                                                                        <figure class="mx-auto">
                                                                            <img src="{{ $nom->product_logo }}"
                                                                                class="w-8">
                                                                        </figure>
                                                                        <p class="text-[13px] font-medium leading-6">
                                                                            {{ $nom->layanan }}</p>
                                                                        @if ($nom->is_flash_sale == 1 && $nom->expired_flash_sale >= date('Y-m-d'))
                                                                            <p class="text-[13px] mb-2">Rp
                                                                                {{ number_format($nom->harga_flash_sale) }}
                                                                            <p class="text-[13px]"> Rp <s>
                                                                                    {{ number_format($nom->harga) }}</s>
                                                                            </p>
                                                                        @else
                                                                            <p class="text-[13px]">Rp
                                                                                {{ number_format($nom->harga) }}</p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                {{-- <div class="relative w-[20%] h-10 py-1"></div> --}}
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 mt-6 hidden lg:block">
                        <div class="space-y-3">
                            <h3 class="text-lg font-medium light-dark-text">Mungkin Kamu Suka</h3>
                            <div class="">
                                <div class="overflow-x-auto flex lg:gap-x-6 md:gap-x-6 gap-x-4 no-scrollbar">
                                    @foreach ($kategori_all as $ktg)
                                        <div onclick="window.location.href='{{ url('') . '/order/' . $ktg->kode }}'"
                                            class="lg:min-w-40 md:min-w-40 min-w-32">
                                            <div class="h-48 lg:h-64 md:h-64 w-full relative">
                                                <div
                                                    class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                    <div class="hidden group-hover:block ">
                                                        <div
                                                            class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                            <div
                                                                class="w-full grow flex flex-col items-center justify-center ">
                                                                <figure style="width: 40px;">
                                                                    <img alt="icon" loading="lazy" width="40"
                                                                        height="40" decoding="async" data-nimg="1"
                                                                        class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                        src="{{ $logo_header }}"
                                                                        style="color: transparent;">
                                                                </figure>
                                                            </div>
                                                            <div class="w-full flex flex-col items-center">
                                                                <p
                                                                    class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                    {{ $ktg->nama }}</p>
                                                                <p
                                                                    class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                                    {{ $ktg->sub_nama }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figure class="h-full w-full">
                                                        <img alt="{{ $ktg->nama }}" loading="lazy" decoding="async"
                                                            data-nimg="fill"
                                                            class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            src="{{ $ktg->thumbnail }}"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 md:col-span-12 lg:mt-0 mt-8 rounded-xl h-full space-y-4">
                    @if (
                        $kategori->server_id &&
                            $kategori->kode != 'life-after' &&
                            $kategori->kode != 'joki' &&
                            $kategori->kode != 'genshin-impact' &&
                            $kategori->kode != 'ragnarok-m' &&
                            $kategori->kode != 'tof')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukkan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">User ID </p>
                                        <div class="relative flex items-center">
                                            <input id="user_id" name="ID ML" autocomplete="off" autosave="false"
                                                type="number" value=""
                                                class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                        <div class="relative flex items-center">
                                            <input id="zone" name="zone" autocomplete="off" autosave="false"
                                                value="" type="text"
                                                class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_2 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-orientation="horizontal" role="none"
                                class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan ID
                                &amp;
                                Server Kamu, Klik Avatar Pada Pojok Kiri Atas Layar Akan Muncul ID &amp; Server Kamu Di
                                Bawah
                                Nickname. {!! $kategori->ket_id !!}</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'life-after')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">
                                Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap invisible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">ID Akun </p>
                                        <div class="relative flex items-center">
                                            <input id="user_id" name="ID ML" autocomplete="off" autosave="false"
                                                type="text"
                                                class="bg-white games-input text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full ">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1  ring-purple-500 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Sever
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="miskatown">
                                                <span class="font-normal block truncate">Miska Town
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="sandcastle">
                                                <span class="font-normal block truncate">Sand Castle
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="mouthswamp">
                                                <span class="font-normal block truncate">Mouth Swamp
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="redwoodtown">
                                                <span class="font-normal block truncate">Red Wood Town
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="obelisk">
                                                <span class="font-normal block truncate">Oblisk
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="fallforest">
                                                <span class="font-normal block truncate">Fall Forest
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="mountsnow">
                                                <span class="font-normal block truncate">Mount Snow
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="charlestown">
                                                <span class="font-normal block truncate">Charles Town
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="snowhighlands">
                                                <span class="font-normal block truncate">Snow High Lands
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="santopany">
                                                <span class="font-normal block truncate">Santopany
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="levincity">
                                                <span class="font-normal block truncate">Levin City
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="newland">
                                                <span class="font-normal block truncate">New Land
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="milestone">
                                                <span class="font-normal block truncate">Mile Stone
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5"></p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'tof')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value=""
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Sever
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Osillron">
                                                <span class="font-normal block truncate">Southeast
                                                    Asia-Osillron
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Mistilteinn">
                                                <span class="font-normal block truncate">Southeast Asia-Mistilteinn
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Illyrians">
                                                <span class="font-normal block truncate">Southeast Asia-Illyrians
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Florione">
                                                <span class="font-normal block truncate">Southeast Asia-Florione
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Animus">
                                                <span class="font-normal block truncate">Southeast Asia-Animus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Gumi Gumi">
                                                <span class="font-normal block truncate">Southeast Asia-Gumi Gumi
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Southeast Asia-Oryza">
                                                <span class="font-normal block truncate">Southeast Asia-Oryza
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Southeast Asia-Saeri">
                                                <span class="font-normal block truncate">Southeast Asia-Saeri
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Phantasia">
                                                <span class="font-normal block truncate">Southeast Asia-Phantasia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Mechafield">
                                                <span class="font-normal block truncate">Southeast Asia-Mechafield
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Ethereal Dream">
                                                <span class="font-normal block truncate">Southeast Asia-Ethereal Dream
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Odyssey">
                                                <span class="font-normal block truncate">Southeast Asia-Odyssey
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Aestral-Noa">
                                                <span class="font-normal block truncate">Southeast Asia-Aestral-Noa
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Chandra">
                                                <span class="font-normal block truncate">Southeast Asia-Chandra
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Southeast Asia-Aeria">
                                                <span class="font-normal block truncate">Southeast Asia-Aeria
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Scarlet">
                                                <span class="font-normal block truncate">Southeast Asia-Scarlet
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Fantasia">
                                                <span class="font-normal block truncate">Southeast Asia-Fantasia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Stardust">
                                                <span class="font-normal block truncate">Southeast Asia-Stardust
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Arcania">
                                                <span class="font-normal block truncate">Southeast Asia-Arcania
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Southeast Asia-Valhalla">
                                                <span class="font-normal block truncate">Southeast Asia-Valhalla
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Lunalite">
                                                <span class="font-normal block truncate">North America-Lunalite
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Sol-III">
                                                <span class="font-normal block truncate">North America-Sol-III
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Lighthouse">
                                                <span class="font-normal block truncate">North America-Lighthouse
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Silver Bridge">
                                                <span class="font-normal block truncate">North America-Silver Bridge
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-The Glades">
                                                <span class="font-normal block truncate">North America-The Glades
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Nightfall">
                                                <span class="font-normal block truncate">North America-Nightfall
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Frontier">
                                                <span class="font-normal block truncate">North America-Frontier
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="North America-Libera">
                                                <span class="font-normal block truncate">North America-Libera
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Solaris">
                                                <span class="font-normal block truncate">North America-Solaris
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Freedom-Oasis">
                                                <span class="font-normal block truncate">North America-Freedom-Oasis
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-The Worlds Between">
                                                <span class="font-normal block truncate">North America-The Worlds Between
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Radiant">
                                                <span class="font-normal block truncate">North America-Radiant
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Tempest">
                                                <span class="font-normal block truncate">North America-Tempest
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-New Era">
                                                <span class="font-normal block truncate">North America-New Era
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Observer">
                                                <span class="font-normal block truncate">North America-Observer
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Starlight">
                                                <span class="font-normal block truncate">North America-Starlight
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="North America-Myriad">
                                                <span class="font-normal block truncate">North America-Myriad
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Oumuamua">
                                                <span class="font-normal block truncate">North America-Oumuamua
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Eternium Phantasy">
                                                <span class="font-normal block truncate">North America-Eternium Phantasy
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Azure Plane">
                                                <span class="font-normal block truncate">North America-Azure Plane
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America-Nirvana">
                                                <span class="font-normal block truncate">North America-Nirvana
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Europe-Magia Przygoda Aida">
                                                <span class="font-normal block truncate">Europe-Magia Przygoda Aida
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Transport Hub">
                                                <span class="font-normal block truncate">Europe-Transport Hub
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-The Lumina">
                                                <span class="font-normal block truncate">Europe-The Lumina
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Lycoris">
                                                <span class="font-normal block truncate">Europe-Lycoris
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Ether">
                                                <span class="font-normal block truncate">Europe-Ether
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Olivine">
                                                <span class="font-normal block truncate">Europe-Olivine
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Iter">
                                                <span class="font-normal block truncate">Europe-Iter
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Aimanium">
                                                <span class="font-normal block truncate">Europe-Aimanium
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Alintheus">
                                                <span class="font-normal block truncate">Europe-Alintheus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Andoes">
                                                <span class="font-normal block truncate">Europe-Andoes
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Anomora">
                                                <span class="font-normal block truncate">Europe-Anomora
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Astora">
                                                <span class="font-normal block truncate">Europe-Astora
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Valstamm">
                                                <span class="font-normal block truncate">Europe-Valstamm
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Blumous">
                                                <span class="font-normal block truncate">Europe-Blumous
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Celestialrise">
                                                <span class="font-normal block truncate">Europe-Celestialrise
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Cosmos">
                                                <span class="font-normal block truncate">Europe-Cosmos
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Dyrnwyn">
                                                <span class="font-normal block truncate">Europe-Dyrnwyn
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Elypium">
                                                <span class="font-normal block truncate">Europe-Elypium
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Excalibur">
                                                <span class="font-normal block truncate">Europe-Excalibur
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Espoir IV">
                                                <span class="font-normal block truncate">Europe-Espoir IV
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Estrela">
                                                <span class="font-normal block truncate">Europe-Estrela
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Ex Nihilor">
                                                <span class="font-normal block truncate">Europe-Ex Nihilor
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Futuria">
                                                <span class="font-normal block truncate">Europe-Futuria
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Hephaestus">
                                                <span class="font-normal block truncate">Europe-Hephaestus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Midgard">
                                                <span class="font-normal block truncate">Europe-Midgard
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Kuura">
                                                <span class="font-normal block truncate">Europe-Kuura
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Lyramiel">
                                                <span class="font-normal block truncate">Europe-Lyramiel
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Magenta">
                                                <span class="font-normal block truncate">Europe-Magenta
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Omnium Prime">
                                                <span class="font-normal block truncate">Europe-Omnium Prime
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Europe-Turmus">
                                                <span class="font-normal block truncate">Europe-Turmus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Corvus">
                                                <span class="font-normal block truncate">South America-Corvus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Calodesma Seven">
                                                <span class="font-normal block truncate">South America-Calodesma Seven
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Columba">
                                                <span class="font-normal block truncate">South America-Columba
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Tiamat">
                                                <span class="font-normal block truncate">South America-Tiamat
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Orion">
                                                <span class="font-normal block truncate">South America-Orion
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Luna Azul">
                                                <span class="font-normal block truncate">South America-Luna Azul
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Hope">
                                                <span class="font-normal block truncate">South America-Hope
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Tanzanite">
                                                <span class="font-normal block truncate">South America-Tanzanite
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Antlia">
                                                <span class="font-normal block truncate">South America-Antlia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Pegasusx">
                                                <span class="font-normal block truncate">South America-Pegasusx
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Phoenix">
                                                <span class="font-normal block truncate">South America-Phoenix
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Centaurus">
                                                <span class="font-normal block truncate">South America-Centaurus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Cepheu">
                                                <span class="font-normal block truncate">South America-Cepheu
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Cygnus">
                                                <span class="font-normal block truncate">South America-Cygnus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Grus">
                                                <span class="font-normal block truncate">South America-Grus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Hydra">
                                                <span class="font-normal block truncate">South America-Hydra
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="South America-Lyra">
                                                <span class="font-normal block truncate">South America-Lyra
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America-Ophiuchus">
                                                <span class="font-normal block truncate">South America-Ophiuchus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Cocoaiteruyo">
                                                <span class="font-normal block truncate">Asia-Pacific-Cocoaiteruyo
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Food Fighter">
                                                <span class="font-normal block truncate">Asia-Pacific-Food Fighter
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Gomap">
                                                <span class="font-normal block truncate">Asia-Pacific-Gomap
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Yggdrasil">
                                                <span class="font-normal block truncate">Asia-Pacific-Yggdrasil
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Daybreak">
                                                <span class="font-normal block truncate">Asia-Pacific-Daybreak
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Adventure">
                                                <span class="font-normal block truncate">Asia-Pacific-Adventure
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Eden">
                                                <span class="font-normal block truncate">Asia-Pacific-Eden
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Fate">
                                                <span class="font-normal block truncate">Asia-Pacific-Fate
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Nova">
                                                <span class="font-normal block truncate">Asia-Pacific-Nova
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Ruby">
                                                <span class="font-normal block truncate">Asia-Pacific-Ruby
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Babel">
                                                <span class="font-normal block truncate">Asia-Pacific-Babel
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Pluto">
                                                <span class="font-normal block truncate">Asia-Pacific-Pluto
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Sushi">
                                                <span class="font-normal block truncate">Asia-Pacific-Sushi
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Venus">
                                                <span class="font-normal block truncate">Asia-Pacific-Venus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Galaxy">
                                                <span class="font-normal block truncate">Asia-Pacific-Galaxy
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Memory">
                                                <span class="font-normal block truncate">Asia-Pacific-Memory
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Oxygen">
                                                <span class="font-normal block truncate">Asia-Pacific-Oxygen
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Sakura">
                                                <span class="font-normal block truncate">Asia-Pacific-Sakura
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Seeker">
                                                <span class="font-normal block truncate">Asia-Pacific-Seeker
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Shinya">
                                                <span class="font-normal block truncate">Asia-Pacific-Shinya
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Stella">
                                                <span class="font-normal block truncate">Asia-Pacific-Stella
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Uranus">
                                                <span class="font-normal block truncate">Asia-Pacific-Uranus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Utopia">
                                                <span class="font-normal block truncate">Asia-Pacific-Utopia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Jupiter">
                                                <span class="font-normal block truncate">Asia-Pacific-Jupiter
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Sweetie">
                                                <span class="font-normal block truncate">Asia-Pacific-Sweetie
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Atlantis">
                                                <span class="font-normal block truncate">Asia-Pacific-Atlantis
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia-Pacific-Takoyaki">
                                                <span class="font-normal block truncate">Asia-Pacific-Takoyaki
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia-Pacific-Mars">
                                                <span class="font-normal block truncate">Asia-Pacific-Mars
                                                </span>
                                            </li>
                                            <div class="note"></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'genshin-impact')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="number"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Sever
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_usa">
                                                <span class="font-normal block truncate">America
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_euro">
                                                <span class="font-normal block truncate">Europa
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_asia">
                                                <span class="font-normal block truncate">Asia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_cht">
                                                <span class="font-normal block truncate">TW_HK_MO
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'honkai-starrail')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Sever
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_usa">
                                                <span class="font-normal block truncate">America
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_euro">
                                                <span class="font-normal block truncate">Europa
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_asia">
                                                <span class="font-normal block truncate">Asia
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="os_cht">
                                                <span class="font-normal block truncate">TW_HK_MO
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'heroes-evolved')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">List Server
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America - LOST TEMPLE [NA]">
                                                <span class="font-normal block truncate">North America - LOST TEMPLE [NA]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="North America - NEW ORDER">
                                                <span class="font-normal block truncate">North America - NEW ORDER
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Europe - ASGARD [EU]">
                                                <span class="font-normal block truncate">Europe - ASGARD [EU]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Europe - OLYMPUS [EU]">
                                                <span class="font-normal block truncate">Europe - OLYMPUS [EU]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America - AMAZON [SA]">
                                                <span class="font-normal block truncate">South America - AMAZON [SA]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="South America - EL DORADO [SA]">
                                                <span class="font-normal block truncate">South America - EL DORADO [SA]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia - SHANGRI-LA [AS]">
                                                <span class="font-normal block truncate">Asia - SHANGRI-LA [AS]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia - S1.ANGKOR [AS]">
                                                <span class="font-normal block truncate">Asia - S1.ANGKOR [AS]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia - S2.EL NIDO [AS]">
                                                <span class="font-normal block truncate">Asia - S2.EL NIDO [AS]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Asia - ไทย[TH]">
                                                <span class="font-normal block truncate">Asia - ไทย[TH]
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)"
                                                value="Asia - ไทยแลนด์[TH]">
                                                <span class="font-normal block truncate">Asia - ไทยแลนด์[TH]
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'ragnarok-m')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Server
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="90001">
                                                <span class="font-normal block truncate">Eternal Love
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="90002">
                                                <span class="font-normal block truncate">Midnight Party
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="90002003">
                                                <span class="font-normal block truncate">Memory Of Faith
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'shell-fire')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Tipe
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="android">
                                                <span class="font-normal block truncate">Android
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="ios">
                                                <span class="font-normal block truncate">IOS
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'ragnarok-forever-love')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Server
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="allserver">
                                                <span class="font-normal block truncate">ALL SERVER
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'perfect-world')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih Server
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="moonlight">
                                                <span class="font-normal block truncate">Moonlight
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="lotus">
                                                <span class="font-normal block truncate">Lotus
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="crimson">
                                                <span class="font-normal block truncate">Crimson
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="kirin">
                                                <span class="font-normal block truncate">Kirin
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="moral">
                                                <span class="font-normal block truncate">Moral
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'asphalt-9-legends')
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">OS </p>
                                    <div class="relative w-full">
                                        <button onclick="toggleDropdown()" id="dropdownButton" type="button"
                                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl bg-white focus:outline-purple-500 focus:outline-1">
                                            <span id="text-server" class="block truncate">
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon"
                                                    class="h-5 w-5 text-gray-400">
                                                    <path fill-rule="evenodd"
                                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul name="zoneId" id="zone"
                                            class="dropdownMenu server-scrollbar hidden absolute z-10 -mt-2 max-h-60 w-full overflow-auto rounded-md bg-[#F0F0F0] text-base shadow-lg ring-1 sm:text-sm">
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="">
                                                <span class="font-normal block truncate">Pilih OS
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="ios">
                                                <span class="font-normal block truncate">IOS
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="android">
                                                <span class="font-normal block truncate">Android
                                                </span>
                                            </li>
                                            <li class="text-gray-900 relative cursor-default select-none py-2 pl-4 pr-4 hover:bg-purple-500 hover:text-white duration-200"
                                                role="option" onclick="selectOption(this)" value="Windows">
                                                <span class="font-normal block truncate">Windows
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif(in_array($kategori->tipe->name, [
                            'populer',
                            'akun_premium',
                            'game',
                            'voucher',
                            'pulsa',
                            'e-money',
                            'pln',
                            'liveapp',
                        ]))
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="mt-6">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">Data </p>
                                        <div class="relative flex items-center">
                                            <input name="userId" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @elseif($kategori->kode == 'dm_vilog')
                    <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                        <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukkan Detil Akun
                            <button
                                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <path d="M12 17h.01"></path>
                                </svg>
                            </button>
                        </h3>
                        <div class="grid mt-6 gap-3 grid-cols-row-4">
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Email </p>
                                    <div class="relative flex items-center">
                                        <input id="email_joki" name="email_joki" autocomplete="off" autosave="false"
                                            type="email" value=""
                                            class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Password </p>
                                    <div class="relative flex items-center">
                                        <input id="password_joki" name="password_joki" autocomplete="off" autosave="false"
                                            value="" type="password"
                                            class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Request </p>
                                    <div class="relative flex items-center">
                                        <input id="request_joki" name="request_joki" autocomplete="off" autosave="false"
                                            value="" type="text"
                                            class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Catatan </p>
                                    <div class="relative flex items-center">
                                        <input id="catatan_joki" name="nickname_joki" autocomplete="off" autosave="false"
                                            value="" type="text"
                                            class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Nickname </p>
                                    <div class="relative flex items-center">
                                        <input id="catatan_joki" name="catatan_joki" autocomplete="off" autosave="false"
                                            value="" type="text"
                                            class="bg-white games-input text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl focus:outline-purple-500 focus:outline-1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-orientation="horizontal" role="none"
                            class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                        <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan ID
                            &amp;
                            Server Kamu, Klik Avatar Pada Pojok Kiri Atas Layar Akan Muncul ID &amp; Server Kamu Di
                            Bawah
                            Nickname. {!! $kategori->ket_id !!}</p>
                        <div class="note"></div>
                    </div>
                    @else
                        <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </button>
                            </h3>
                            <div class="mt-6">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">ID </p>
                                        <div class="relative flex items-center">
                                            <input name="userId" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="text"
                                                class="text-sm w-full text-black bg-white focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . {!! $kategori->ket_id !!}.</p>
                            <div class="note"></div>
                        </div>
                    @endif
                    <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="choosePaymentMethod">
                        <h3 class="text-sm md:text-lg font-medium">Pilih Pembayaran</h3>
                        <div class="mt-4 space-y-2">
                            @foreach ($pay_method as $p)
                                @if ($p->tipe == 'e-walet')
                                    <div class="payment-method pointer-events-none border-b bg-white rounded-xl">
                                        <h3 class="flex">
                                            <button type="button" id="toggleButton"
                                                onclick="togglePaymentContent('e-money-content', 'toggleIcon')"
                                                class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                                <p class="text-black font-bold text-sm">{{ $p->name }}</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                    <path d="m6 9 6 6 6-6"></path>
                                                </svg>
                                            </button>
                                        </h3>
                                        <div id="e-money-content"
                                            class="overflow-hidden text-sm transition-all max-h-0 transition-max-height">
                                            <div class="pb-4 pt-0">
                                                <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2"
                                                    tabindex="0" style="outline: none;">
                                                    <div id="content-method-{{ $p->id }}"
                                                        class="content-method border text-card-foreground shadow-sm relative rounded-lg hover:cursor-pointer hover:bg-purple-500 duration-300 hover:bg-opacity-20">
                                                        <div id="select-method-checklist-{{ $p->id }}"
                                                            class="select-method-checklist hidden absolute right-0 top-0 bg-purple-500 text-white rounded-bl-lg rounded-tr-lg p-0.5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-check">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </div>
                                                        <button type="button" role="radio" aria-checked="false"
                                                            data-state="unchecked"
                                                            class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                            id="40" tabindex="-1">
                                                        </button>
                                                        <input type="radio" name="pembayaran" class="pay-radio"
                                                            id="method-{{ $p->id }}"
                                                            value="{{ $p->code }}"
                                                            style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                            onchange="select_method('{{ $p->id }}', '{{ $p->name }}');" />
                                                        <label for="method-{{ $p->id }}">
                                                            <div
                                                                class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                                <div class="flex justify-between items-center">
                                                                    <div class="space-y-2">
                                                                        <p class="text-black text-sm font-medium">
                                                                            {{ $p->name }}</p>
                                                                        <div id="method-{{ $p->id }}price"
                                                                            class="price GOPAY text-lg text-purple-600 font-medium">
                                                                            Rp
                                                                            {{ $p->price }}
                                                                        </div>
                                                                    </div>
                                                                    <figure style="width: 64px;">
                                                                        <img alt="QRIS S3" loading="lazy"
                                                                            width="64" height="64"
                                                                            decoding="async" data-nimg="1"
                                                                            class="object-contain w-[64px] h-[20px]"
                                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                                            src="{{ $p->images }}"
                                                                            style="color: transparent;">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="flex">
                                            <button id="toggleButton" type="button"
                                                onclick="togglePaymentContent('e-money-content', 'toggleIcon')"
                                                class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black">
                                                <div
                                                    class="grayscale-image-method grayscale relative lg:w-14 md:w-12 w-8 h-full">
                                                    <figure>
                                                        <img alt="QRIS S3" loading="lazy" decoding="async"
                                                            data-nimg="fill" class="object-contain"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            src="{{ $p->images }}"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    </figure>
                                                </div>
                                                <div id="toggleIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                        <path d="m6 9 6 6 6-6"></path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </h3>
                                    </div>
                                @endif
                            @endforeach
                            <div class="payment-method pointer-events-none border-b bg-white rounded-xl">
                                <h3 class="flex">
                                    <button type="button" id="btn-atas-virtual-account"
                                        onclick="togglePaymentContent('virtual-account-content', 'toggle-icon-virtual-account')"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                        <p class="text-black font-bold text-sm">Virtual Account</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            id="toggleIcon" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <div id="virtual-account-content"
                                    class="overflow-hidden text-sm transition-all max-h-0 transition-max-height">
                                    <div class="pb-4 pt-0">
                                        <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2" tabindex="0"
                                            style="outline: none;">
                                            @foreach ($pay_method as $p)
                                                @if ($p->tipe == 'virtual-account')
                                                    <div id="content-method-{{ $p->id }}"
                                                        class="content-method border text-card-foreground shadow-sm relative rounded-lg hover:cursor-pointer hover:bg-purple-500 duration-300 hover:bg-opacity-20">
                                                        <div id="select-method-checklist-{{ $p->id }}"
                                                            class="select-method-checklist hidden absolute right-0 top-0 bg-purple-500 text-white rounded-bl-lg rounded-tr-lg p-0.5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-check">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </div>
                                                        <button type="button" role="radio" aria-checked="false"
                                                            data-state="unchecked"
                                                            class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                            id="40" tabindex="-1">
                                                        </button>
                                                        <input type="radio" name="pembayaran" class="pay-radio"
                                                            id="method-{{ $p->id }}"
                                                            value="{{ $p->code }}"
                                                            style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                            onchange="select_method('{{ $p->id }}', '{{ $p->name }}');" />
                                                        <label for="method-{{ $p->id }}">
                                                            <div
                                                                class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                                <div class="flex justify-between items-center">
                                                                    <div class="space-y-2">
                                                                        <p class="name text-black text-sm font-medium">
                                                                            {{ $p->name }}</p>
                                                                        <div id="method-{{ $p->id }}price"
                                                                            class="price GOPAY text-lg text-purple-600 font-medium">
                                                                            Rp
                                                                            {{ $p->price }}
                                                                        </div>
                                                                    </div>
                                                                    <figure style="width: 64px;">
                                                                        <img alt="QRIS S3" loading="lazy"
                                                                            width="64" height="64"
                                                                            decoding="async" data-nimg="1"
                                                                            class="object-contain w-[64px] h-[20px]"
                                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                                            src="{{ $p->images }}"
                                                                            style="color: transparent;">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <h3 class="flex">
                                    <button id="btn-bawah-virtual-account" type="button"
                                        onclick="togglePaymentContent('virtual-account-content', 'toggle-icon-virtual-account')"
                                        class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-3 text-black">
                                        @foreach ($pay_method as $item)
                                            @if ($item->tipe == 'virtual-account')
                                                <div
                                                    class="grayscale-image-method grayscale relative lg:w-14 md:w-12 w-8 h-full">
                                                    <figure>
                                                        <img alt="QRIS S3" loading="lazy" decoding="async"
                                                            data-nimg="fill" class="object-contain"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            src="{{ $item->images }}"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    </figure>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div id="toggle-icon-virtual-account">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </h3>
                            </div>
                            <div class="payment-method pointer-events-none border-b bg-white rounded-xl">
                                <h3 class="flex">
                                    <button type="button" id="btn-atas-convenience-store"
                                        onclick="togglePaymentContent('convenience-store-content', 'toggle-icon-convenience-store')"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                        <p class="text-black font-bold text-sm">Convenience Store</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            id="toggleIcon" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <div id="convenience-store-content"
                                    class="overflow-hidden text-sm transition-all max-h-0 transition-max-height">
                                    <div class="pb-4 pt-0">
                                        <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2" tabindex="0"
                                            style="outline: none;">
                                            @foreach ($pay_method as $p)
                                                @if ($p->tipe == 'convenience-store')
                                                    <div id="content-method-{{ $p->id }}"
                                                        class="content-method border text-card-foreground shadow-sm relative rounded-lg hover:cursor-pointer hover:bg-purple-500 duration-300 hover:bg-opacity-20">
                                                        <div id="select-method-checklist-{{ $p->id }}"
                                                            class="select-method-checklist hidden absolute right-0 top-0 bg-purple-500 text-white rounded-bl-lg rounded-tr-lg p-0.5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-check">
                                                                <path d="M20 6 9 17l-5-5"></path>
                                                            </svg>
                                                        </div>
                                                        <button type="button" role="radio" aria-checked="false"
                                                            data-state="unchecked"
                                                            class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                            id="40" tabindex="-1">
                                                        </button>
                                                        <input type="radio" name="pembayaran" class="pay-radio"
                                                            id="method-{{ $p->id }}"
                                                            value="{{ $p->code }}"
                                                            style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                            onchange="select_method('{{ $p->id }}', '{{ $p->name }}');" />
                                                        <label for="method-{{ $p->id }}">
                                                            <div
                                                                class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                                <div class="flex justify-between items-center">
                                                                    <div class="space-y-2">
                                                                        <p class="text-black text-sm font-medium">
                                                                            {{ $p->name }}</p>
                                                                        <div id="method-{{ $p->id }}price"
                                                                            class="price GOPAY text-lg text-purple-600 font-medium">
                                                                            Rp
                                                                            {{ $p->price }}
                                                                        </div>
                                                                    </div>
                                                                    <figure style="width: 64px;">
                                                                        <img alt="QRIS S3" loading="lazy"
                                                                            width="64" height="64"
                                                                            decoding="async" data-nimg="1"
                                                                            class="object-contain w-[64px] h-[20px]"
                                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                                            src="{{ $p->images }}"
                                                                            style="color: transparent;">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <h3 class="flex">
                                    <button id="btn-bawah-convenience-store" type="button"
                                        onclick="togglePaymentContent('convenience-store-content', 'toggle-icon-convenience-store')"
                                        class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-3 text-black">
                                        @foreach ($pay_method as $item)
                                            @if ($item->tipe == 'convenience-store')
                                                <div
                                                    class="grayscale-image-method grayscale relative lg:w-14 md:w-12 w-8 h-full">
                                                    <figure>
                                                        <img alt="QRIS S3" loading="lazy" decoding="async"
                                                            data-nimg="fill" class="object-contain"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            src="{{ $item->images }}"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    </figure>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div id="toggle-icon-convenience-store">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </h3>
                            </div>
                            <div class="payment-method pointer-events-none border-b bg-white rounded-xl">
                                <h3 class="flex">
                                    <button type="button" id="btn-atas-saldo"
                                        onclick="togglePaymentContent('saldo-content', 'toggle-icon-saldo')"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                        <p class="text-black font-bold text-sm">Saldo (Tanpa Biaya Admin)</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            id="toggleIcon" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>
                                </h3>
                                <div id="saldo-content"
                                    class="overflow-hidden text-sm transition-all max-h-0 transition-max-height">
                                    <div class="pb-4 pt-0">
                                        <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2" tabindex="0"
                                            style="outline: none;">
                                            <div id="content-method-{{ $p->id }}"
                                                class="content-method border text-card-foreground shadow-sm relative rounded-lg hover:cursor-pointer hover:bg-purple-500 duration-300 hover:bg-opacity-20">
                                                <div id="select-method-checklist-{{ $p->id }}"
                                                    class="select-method-checklist hidden absolute right-0 top-0 bg-purple-500 text-white rounded-bl-lg rounded-tr-lg p-0.5">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="lucide lucide-check">
                                                        <path d="M20 6 9 17l-5-5"></path>
                                                    </svg>
                                                </div>
                                                <button type="button" role="radio" aria-checked="false"
                                                    data-state="unchecked"
                                                    class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                    id="40" tabindex="-1">
                                                </button>
                                                <input type="radio" name="pembayaran" class="pay-radio"
                                                    id="method-saldo" value="saldo"
                                                    style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                    onchange="select_method('saldo', 'saldo');" />
                                                <label for="40">
                                                    <div class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                        <div class="flex justify-between items-center">
                                                            <div class="space-y-2">
                                                                <p class="text-black text-sm font-medium">
                                                                    Saldo Akun</p>
                                                                <div id="method-saldo-price"
                                                                    class="price GOPAY text-lg text-purple-600 font-medium">
                                                                    Rp
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                            <figure style="width: 64px;">
                                                                <img alt="QRIS S3" loading="lazy" width="64"
                                                                    height="64" decoding="async" data-nimg="1"
                                                                    class="object-contain w-[64px] h-[20px]"
                                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                                    src="{{ $logo_header }}"
                                                                    style="color: transparent;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="flex">
                                    <button id="btn-bawah-saldo" type="button"
                                        onclick="togglePaymentContent('saldo-content', 'toggle-icon-saldo')"
                                        class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-3 text-black">
                                        <div class="grayscale-image-method grayscale relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure>
                                                <img alt="QRIS S3" loading="lazy" decoding="async" data-nimg="fill"
                                                    class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                                    src="{{ $logo_header }}"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div id="toggle-icon-convenience-store">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4">
                        <h3 class="text-sm md:text-lg font-medium">Kode Promo</h3>
                        <div class="w-full mt-6">
                            <div class="flex flex-col w-full">
                                <div class="relative flex items-center">
                                    <input name="promo_voucher" autocomplete="off" autosave="false" type="text"
                                        class="text-sm w-full ring-1 ring-gray-500 ring-inset light-dark-text focus:outline-none focus:ring-0 h-10 pl-4 pr-10 rounded-l-xl text focus:outline-purple-500 focus:outline-1"
                                        placeholder="Masukan Kode Promo">
                                    <button
                                        class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 bg-purple-400 text-white hover:bg-purple-500/80 h-10 px-4 py-2 rounded-l-none rounded-r-xl whitespace-nowrap"
                                        type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="mr-2 h-4 w-4 animate-spin hidden">
                                            <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                                        </svg>Redeem
                                    </button>
                                </div>
                            </div>
                            <p class="text-xs light-dark-text/50 tracking-wide leading-5 mt-3">*Optional: Jika
                                tidak mempunyai kode promo abaikan saja</p>
                        </div>
                    </div>
                    <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="confirmPayment">
                        <h3 class="text-sm md:text-lg font-medium">Selesaikan Pembayaran</h3>
                        <div class="mt-6 space-y-2">
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Nomor Whatsapp </p>
                                    <div class="relative flex items-center">
                                        <input id="nomor" name="nomor" autocomplete="off" type="number" autosave="false"
                                            type="text"
                                            class="text-sm w-full light-dark-text focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                            placeholder="Masukan Nomor Whatsapp">
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Dengan membeli
                                otomatis saya menyutujui <a class="underline" href="/termandconditional">Ketentuan
                                    Layanan</a></p>
                        </div>
                        <button id="btn-order" onclick="showOrderModal();" type="button"
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-purple-500 text-white hover:bg-purple-500/80 h-10 py-2 mt-5 px-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="mr-2 h-4 w-4 animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                            </svg>Beli Sekarang
                        </button>
                    </div>
                    <div class="space-y-6 mt-6 block lg:hidden">
                        <div class="space-y-3">
                            <h3 class="text-lg font-medium light-dark-text">Mungkin Kamu Suka</h3>
                            <div class="">
                                <div class="overflow-x-auto flex lg:gap-x-6 md:gap-x-6 gap-x-4 no-scrollbar">
                                    @foreach ($kategori_all as $kategori)
                                        <div onclick="window.location.href='{{ url('') . '/order/' . $kategori->kode }}'"
                                            class="lg:min-w-40 md:min-w-40 min-w-32">
                                            <div class="h-48 lg:h-64 md:h-64 w-full relative">
                                                <div
                                                    class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                    <div class="hidden group-hover:block ">
                                                        <div
                                                            class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                            <div
                                                                class="w-full grow flex flex-col items-center justify-center ">
                                                                <figure style="width: 40px;">
                                                                    <img alt="icon" loading="lazy" width="40"
                                                                        height="40" decoding="async" data-nimg="1"
                                                                        class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                        src="{{ $logo_header }}"
                                                                        style="color: transparent;">
                                                                </figure>
                                                            </div>
                                                            <div class="w-full flex flex-col items-center">
                                                                <p
                                                                    class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                    {{ $kategori->nama }}</p>
                                                                <p
                                                                    class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                                    {{ $kategori->sub_nama }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figure class="h-full w-full">
                                                        <img alt="{{ $kategori->nama }}" loading="lazy"
                                                            decoding="async" data-nimg="fill"
                                                            class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            src="{{ $kategori->thumbnail }}"
                                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <dialog id="modal_confirm_order" class="modal">
            <div class="absolute inset-0 bg-zinc-950/30"></div>
            <div
                class="bg-zinc-800/5 modal-box modal-form-order backdrop-blur-lg rounded-lg overflow-y-auto max-h-screen border max-w-xl">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost text-white absolute right-2 top-2">✕</button>
                </form>
                <div class="absolute left-0 top-0 ">
                    <figure class="w-full">
                        <img alt="element-order" loading="lazy" width="230" height="100" decoding="async"
                            data-nimg="1" class="rounded-tl-lg" src="https://mobafams.com/svgs/element_order.svg"
                            style="color: transparent;">
                    </figure>
                </div>
                <div id="content-confirm-data">

                </div>
            </div>
            </div>
        </dialog>
    </section>
    <style>
        .transition-max-height {
            transition: max-height 0.5s ease-in-out;
        }
    </style>
    <script>
        function filterNominals(subkatName) {
            const nominalItems = document.querySelectorAll('.nominal-item');
            const buttonSubKat = document.getElementById(subkatName);

            nominalItems.forEach(item => {
                item.style.display = 'none';
            });

            const matchingNominalItems = document.querySelectorAll(
                `.nominal-item[data-subkat="${subkatName}"]`);

            matchingNominalItems.forEach(item => {
                item.style.display = 'block';
            });

            const allSubKatButtons = document.querySelectorAll('.subkat-button');
            allSubKatButtons.forEach(button => {
                button.classList.remove('border', 'border-purple-500');
            });

            buttonSubKat.classList.add('border', 'border-purple-500');
        }

        document.addEventListener('DOMContentLoaded', function() {

            filterNominals('Topup');
        });

        function togglePaymentContent(contentId, iconId) {
            const content = document.getElementById(contentId);
            const icon = document.getElementById(iconId);

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        }


        function toggleDropdown() {
            const dropdownMenu = document.querySelector(".dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        function selectOption(option) {
            const textServer = document.getElementById("text-server");
            textServer.textContent = option.textContent.trim();

            const selectedValue = option.getAttribute('value');
            $("#zone").val(selectedValue);

            toggleDropdown();
        }

        document.addEventListener("click", function(event) {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.querySelector(".dropdownMenu");
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleButton');
            const content = document.getElementById('paymentContent');
            const icon = document.getElementById('toggleIcon');

            toggleButton.addEventListener('click', function() {
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                }
            });
        });

        function select_product(id, name, price) {

            $('html, body').animate({
                scrollTop: $("#detailAccount").offset().top
            }, 500);

            $(".content-layanan").removeClass('border border-purple-500');
            $("#content-nominal-" + id).addClass('border border-purple-500');

            $(".payment-method").removeClass('pointer-events-none');
            $(".grayscale-image-method").removeClass('grayscale');
            $(".select-product-checklist").addClass('hidden');
            $("#select-product-checklist-" + id).removeClass('hidden');

            $("input[name=nominal]").val(id);
            $("#nominal1").text(name);
            $("#nominal").text(name);
            $("#price1").text(price);
            $("#price").text(price);


            $.ajax({
                url: "<?php echo route('ajax.price'); ?>",
                dataType: "json",
                type: "POST",
                data: {
                    "_token": "<?php echo csrf_token(); ?>",
                    "nominal": id // Menggunakan id sebagai nominal dalam pengiriman data
                },
                success: function(res) {
                    changeHarga(res.harga);
                }
            });
        }

        // function select_method(id, name) {

        //     var product = $("input[name=nominal]:checked").val();
        //     console.log(product);

        //     if (!product) {
        //         toastr.warning('Silahkan pilih produk dahulu');
        //     } else {

        //         $(".method").removeClass('active');
        //         $("#method-" + id).addClass('active');

        //         $("input[name=method]").val(id);
        //         $("#metode_bayar").text(name);
        //         var harga = $("#method-" + id + "price").text();
        //         $("#total_bayar").text(harga);
        //         // $("#total_bayar").text($("#method-" + id + "price").text());
        //     }
        // }

        // function order_confirm() {
        //     $("#nickname").addClass('d-none');
        //     var uid = $("#user_id").val();
        //     var zone = $("#zone").val();
        //     var email_joki = $("#email_joki").val();
        //     var password_joki = $("#password_joki").val();
        //     var loginvia_joki = $("#loginvia_joki").val();
        //     var nickname_joki = $("#nickname_joki").val();
        //     var request_joki = $("#request_joki").val();
        //     var catatan_joki = $("#catatan_joki").val();
        //     var email_vilog = $("#email_vilog").val();
        //     var password_vilog = $("#password_vilog").val();
        //     var loginvia_vilog = $("#loginvia_vilog").val();
        //     var ktg_tipe = $("#ktg_tipe").val();
        //     var service = $("input[name='nominal']:checked").val();
        //     var pembayaran = $("input[name='pembayaran']:checked").val();
        //     var nomor = $("input[name='nomor']").val();
        //     var voucher = $("#voucher").val();

        //     var target = $('.games-input').map(function() {
        //         return this.value;
        //     }).get().join(',');

        //     if (!service) {
        //         toastr.warning('Nominal produk belum dipilih');
        //     } else if (!target || target == ' ' || target == '' || target == ',') {
        //         toastr.warning('Tujuan masih kosong');
        //     } else if (!pembayaran) {
        //         toastr.warning('Silakan pilih metode pembayaran');
        //     } else if (!nomor) {
        //         toastr.error('No. Whatsapp belum diisi');
        //     } else if (nomor.length < 10 || nomor.length > 14) {
        //         toastr.warning('No. Whatsapp tidak sesuai');
        //     } else {
        //         $.ajax({
        //             url: "<?php echo route('ajax.confirm-data'); ?>",
        //             dataType: "JSON",
        //             type: "POST",
        //             data: {
        //                 '_token': '<?php echo csrf_token(); ?>',
        //                 'uid': uid,
        //                 'zone': zone,
        //                 'email_joki': email_joki,
        //                 'password_joki': password_joki,
        //                 'loginvia_joki': loginvia_joki,
        //                 'nickname_joki': nickname_joki,
        //                 'request_joki': request_joki,
        //                 'catatan_joki': catatan_joki,
        //                 'email_vilog': email_vilog,
        //                 'password_vilog': password_vilog,
        //                 'loginvia_vilog': loginvia_vilog,
        //                 'ktg_tipe': ktg_tipe,
        //                 'service': service,
        //                 'payment_method': pembayaran,
        //                 'nomor': nomor,
        //                 'voucher': voucher
        //             },
        //             beforeSend: function() {
        //                 $("#content-confirm-data").html('<p>Loading...</p>');
        //             },
        //             success: function(res) {
        //                 Swal.close(); // Menutup SweetAlert setelah permintaan berhasil
        //                 if (res.status == true) {
        //                     Swal.fire({
        //                         title: 'Detail Pesanan',
        //                         html: `${res.data}`,
        //                         showCancelButton: true,
        //                         confirmButtonText: 'Beli Sekarang',
        //                         cancelButtonText: 'Batal',
        //                         customClass: {
        //                             title: 'text-lg font-bold leading-6',
        //                             htmlContainer: 'swal-text',
        //                             confirmButton: 'swal2-cancel btn btn-primary mt-3 d-inline-flex justify-content-center align-items-center px-4 py-2 sm-mt-0 sm-w-auto sm-text-sm btn-block text-000000 w-100 swal2-styled',
        //                             cancelButton: 'btn btn-secondary mt-2 d-inline-flex justify-content-center align-items-center px-4 py-2 sm-mt-0 sm-w-auto sm-text-sm btn-block text-000000 w-100'
        //                         }
        //                     }).then(resp => {
        //                         if (resp.isConfirmed) {
        //                             var nickname = $("#nick").text();
        //                             var nohp = $("input[name='nomor']").val();
        //                             $.ajax({
        //                                 url: "<?php echo route('order'); ?>",
        //                                 dataType: "JSON",
        //                                 type: "POST",
        //                                 data: {
        //                                     '_token': '<?php echo csrf_token(); ?>',
        //                                     'nickname': nickname,
        //                                     'uid': uid,
        //                                     'zone': zone,
        //                                     'email_joki': email_joki,
        //                                     'password_joki': password_joki,
        //                                     'loginvia_joki': loginvia_joki,
        //                                     'nickname_joki': nickname_joki,
        //                                     'request_joki': request_joki,
        //                                     'catatan_joki': catatan_joki,
        //                                     'email_vilog': email_vilog,
        //                                     'password_vilog': password_vilog,
        //                                     'loginvia_vilog': loginvia_vilog,
        //                                     'ktg_tipe': ktg_tipe,
        //                                     'service': service,
        //                                     'payment_method': pembayaran,
        //                                     'nomor': nohp,
        //                                     'voucher': voucher
        //                                 },
        //                                 beforeSend: function() {
        //                                     let timerInterval;
        //                                     Swal.fire({
        //                                         title: 'Tunggu Sebentar',
        //                                         timerProgressBar: false,
        //                                         didOpen: () => {
        //                                             Swal.showLoading()
        //                                             const b = Swal
        //                                                 .getHtmlContainer()
        //                                                 .querySelector('b')
        //                                             if (b) {
        //                                                 timerInterval =
        //                                                     setInterval(() => {
        //                                                         b.textContent =
        //                                                             Swal
        //                                                             .getTimerLeft();
        //                                                     }, 100);
        //                                             }
        //                                         },
        //                                         willClose: () => {
        //                                             clearInterval(timerInterval)
        //                                         }
        //                                     }).then((result) => {
        //                                         if (result.dismiss === Swal
        //                                             .DismissReason.timer) {
        //                                             console.log(
        //                                                 'I was closed by the timer'
        //                                             );
        //                                         }
        //                                     });
        //                                 },
        //                                 success: function(resOrder) {
        //                                     if (resOrder.status) {
        //                                         Swal.fire({
        //                                             title: 'Berhasil memesan',
        //                                             text: `Order ID : ${resOrder.order_id}`,
        //                                             icon: 'success',
        //                                             showConfirmButton: false,
        //                                             allowOutsideClick: false,
        //                                         });
        //                                         window.location =
        //                                             `/pembelian/invoice/${resOrder.order_id}`;
        //                                     } else {
        //                                         Swal.fire({
        //                                             title: 'Gagal...',
        //                                             text: `${resOrder.data}`,
        //                                             icon: 'error',
        //                                         });
        //                                     }
        //                                 }
        //                             });
        //                         }
        //                     });
        //                 } else if (res.status == false) {
        //                     Swal.fire({
        //                         title: 'Oops...',
        //                         text: res.data,
        //                         icon: 'error',
        //                     });
        //                 } else {
        //                     Swal.fire({
        //                         title: 'Oops...',
        //                         text: 'User ID tidak ditemukan.',
        //                         icon: 'error',
        //                     });
        //                 }
        //             },
        //             error: function(e) {
        //                 Swal.close(); // Menutup SweetAlert setelah permintaan berhasil
        //                 if (e.status == 422) {
        //                     Swal.fire({
        //                         title: 'Oops...',
        //                         text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
        //                         icon: 'error',
        //                     });
        //                 }
        //             }
        //         });
        //     }
        // }

        // function order_confirm() {
        //     $("#nickname").addClass('d-none');
        //     var uid = $("#user_id").val();
        //     var zone = $("#zone").val();
        //     var email_joki = $("#email_joki").val();
        //     var password_joki = $("#password_joki").val();
        //     var loginvia_joki = $("#loginvia_joki").val();
        //     var nickname_joki = $("#nickname_joki").val();
        //     var request_joki = $("#request_joki").val();
        //     var catatan_joki = $("#catatan_joki").val();
        //     var email_vilog = $("#email_vilog").val();
        //     var password_vilog = $("#password_vilog").val();
        //     var loginvia_vilog = $("#loginvia_vilog").val();
        //     var ktg_tipe = $("#ktg_tipe").val();
        //     var service = $("input[name='nominal']:checked").val();
        //     var pembayaran = $("input[name='pembayaran']:checked").val();
        //     var nomor = $("input[name='nomor']").val();
        //     var voucher = $("#voucher").val();

        //     var target = $('.games-input').map(function() {
        //         return this.value;
        //     }).get().join(',');

        //     if (!service) {
        //         toastr.warning('Nominal produk belum dipilih');
        //     } else if (!target || target == ' ' || target == '' || target == ',') {
        //         toastr.warning('Tujuan masih kosong');
        //     } else if (!pembayaran) {
        //         toastr.warning('Silakan pilih metode pembayaran');
        //     } else if (!nomor) {
        //         toastr.error('No. Whatsapp belum diisi');
        //     } else if (nomor.length < 10 || nomor.length > 14) {
        //         toastr.warning('No. Whatsapp tidak sesuai');
        //     } else {
        //         $.ajax({
        //             url: "<?php echo route('ajax.confirm-data'); ?>",
        //             dataType: "JSON",
        //             type: "POST",
        //             data: {
        //                 '_token': '<?php echo csrf_token(); ?>',
        //                 'uid': uid,
        //                 'zone': zone,
        //                 'email_joki': email_joki,
        //                 'password_joki': password_joki,
        //                 'loginvia_joki': loginvia_joki,
        //                 'nickname_joki': nickname_joki,
        //                 'request_joki': request_joki,
        //                 'catatan_joki': catatan_joki,
        //                 'email_vilog': email_vilog,
        //                 'password_vilog': password_vilog,
        //                 'loginvia_vilog': loginvia_vilog,
        //                 'ktg_tipe': ktg_tipe,
        //                 'service': service,
        //                 'payment_method': pembayaran,
        //                 'nomor': nomor,
        //                 'voucher': voucher
        //             },
        //             beforeSend: function() {
        //                 // Optional: Menambahkan loading state sebelum request dikirim
        //                 $("#content-confirm-data").html('<p>Loading...</p>');
        //             },
        //             success: function(res) {
        //                 if (res.status == true) {
        //                     // Mengganti konten div dengan id 'content-confirm-data' dengan data dari server
        //                     $("#content-confirm-data").html(res.data);

        //                     // Menambahkan event listener pada tombol 'Beli Sekarang' yang baru dimuat
        //                     $("#confirm-order-button").on("click", function() {
        //                         var nickname = $("#nick").text();
        //                         var nohp = $("input[name='nomor']").val();
        //                         $.ajax({
        //                             url: "<?php echo route('order'); ?>",
        //                             dataType: "JSON",
        //                             type: "POST",
        //                             data: {
        //                                 '_token': '<?php echo csrf_token(); ?>',
        //                                 'nickname': nickname,
        //                                 'uid': uid,
        //                                 'zone': zone,
        //                                 'email_joki': email_joki,
        //                                 'password_joki': password_joki,
        //                                 'loginvia_joki': loginvia_joki,
        //                                 'nickname_joki': nickname_joki,
        //                                 'request_joki': request_joki,
        //                                 'catatan_joki': catatan_joki,
        //                                 'email_vilog': email_vilog,
        //                                 'password_vilog': password_vilog,
        //                                 'loginvia_vilog': loginvia_vilog,
        //                                 'ktg_tipe': ktg_tipe,
        //                                 'service': service,
        //                                 'payment_method': pembayaran,
        //                                 'nomor': nohp,
        //                                 'voucher': voucher
        //                             },
        //                             beforeSend: function() {
        //                                 // Menambahkan loading state
        //                                 $("#content-confirm-data").html(
        //                                     '<p>Processing order...</p>');
        //                             },
        //                             success: function(resOrder) {
        //                                 if (resOrder.status) {
        //                                     $("#content-confirm-data").html(
        //                                         `<p>Order successful! Order ID: ${resOrder.order_id}</p>`
        //                                         );
        //                                     window.location =
        //                                         `/pembelian/invoice/${resOrder.order_id}`;
        //                                 } else {
        //                                     $("#content-confirm-data").html(
        //                                         `<p>Order failed: ${resOrder.data}</p>`);
        //                                 }
        //                             },
        //                             error: function() {
        //                                 $("#content-confirm-data").html(
        //                                     '<p>Order failed. Please try again later.</p>'
        //                                     );
        //                             }
        //                         });
        //                     });
        //                 } else if (res.status == false) {
        //                     $("#content-confirm-data").html(`<p>${res.data}</p>`);
        //                 } else {
        //                     $("#content-confirm-data").html('<p>User ID tidak ditemukan.</p>');
        //                 }
        //             },
        //             error: function(e) {
        //                 if (e.status == 422) {
        //                     $("#content-confirm-data").html(
        //                         '<p>Pastikan anda sudah mengisi semua data yang diperlukan.</p>');
        //                 } else {
        //                     $("#content-confirm-data").html(
        //                         '<p>Terjadi kesalahan, silakan coba lagi nanti.</p>');
        //                 }
        //             }
        //         });
        //     }
        // }

        function order_confirm() {
            $("#nickname").addClass('d-none');
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var email_joki = $("#email_joki").val();
            var password_joki = $("#password_joki").val();
            var loginvia_joki = $("#loginvia_joki").val();
            var nickname_joki = $("#nickname_joki").val();
            var request_joki = $("#request_joki").val();
            var catatan_joki = $("#catatan_joki").val();
            var email_vilog = $("#email_vilog").val();
            var password_vilog = $("#password_vilog").val();
            var loginvia_vilog = $("#loginvia_vilog").val();
            var ktg_tipe = $("#ktg_tipe").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var voucher = $("#voucher").val();

            var target = $('.games-input').map(function() {
                return this.value;
            }).get().join(',');

            console.log(target);

            $.ajax({
                url: "<?php echo route('ajax.confirm-data'); ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'email_joki': email_joki,
                    'password_joki': password_joki,
                    'loginvia_joki': loginvia_joki,
                    'nickname_joki': nickname_joki,
                    'request_joki': request_joki,
                    'catatan_joki': catatan_joki,
                    'email_vilog': email_vilog,
                    'password_vilog': password_vilog,
                    'loginvia_vilog': loginvia_vilog,
                    'ktg_tipe': ktg_tipe,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'voucher': voucher
                },
                beforeSend: function() {
                    // Optional: Menambahkan loading state sebelum request dikirim
                    $("#content-confirm-data").html('<p>Loading...</p>');
                },
                success: function(res) {
                    if (res.status == true) {
                        // Mengganti konten div dengan id 'content-confirm-data' dengan data dari server
                        $("#content-confirm-data").html(res.data);
                    } else if (res.status == false) {
                        $("#content-confirm-data").html(`<p>${res.data}</p>`);
                    } else {
                        $("#content-confirm-data").html('<p>User ID tidak ditemukan.</p>');
                    }
                },
                error: function(e) {
                    console.log(e);
                    if (e.status == 422) {
                        $("#content-confirm-data").html(
                            '<p>Pastikan anda sudah mengisi semua data yang diperlukan.</p>');
                    } else {
                        $("#content-confirm-data").html(
                            '<p>Terjadi kesalahan, silakan coba lagi nanti.</p>');
                    }
                }
            });
        }

        function showOrderModal() {
            order_confirm();
            document.getElementById('modal_confirm_order').showModal();
        }

        function select_method(id, name) {

            var product = $("input[name=nominal]:checked").val();

            if (!product) {
                toastr.warning('Silahkan pilih produk dahulu');
            } else {

                $(".content-method").removeClass('border border-purple-500');
                $("#content-method-" + id).addClass('border border-purple-500');
                $(".select-method-checklist").addClass('hidden');
                $("#select-method-checklist-" + id).removeClass('hidden');


                $("input[name=method]").val(id);
                $("#metode_bayar").text(name);
                var harga = $("#method-" + id + "price").text();
                $("#total_bayar").text(harga);
                // $("#total_bayar").text($("#method-" + id + "price").text());
            }
        }

        function changeHarga(harga) {
            $(".SALDO").html(harga);
            $(".OVO").html(harga);
            $(".GOPAY").html(harga);
            $(".SHOPEEPAY").html(harga);
            $(".BCAVA").html(harga);
            $(".QRIS").html(harga);
            $(".QRIS2").html(harga);
            $(".QRISC").html(harga);
            $(".MYBVA").html(harga);
            $(".PERMATAVA").html(harga);
            $(".BNIVA").html(harga);
            $(".BRIVA").html(harga);
            $(".MANDIRIVA").html(harga);
            $(".SMSVA").html(harga);
            $(".MUAMALATVA").html(harga);
            $(".CIMBVA").html(harga);
            $(".SAMPOERNAVA").html(harga);
            $(".BSIVA").html(harga);
            $(".OCBCVA").html(harga);
            $(".DANAMONVA").html(harga);
            $(".BNCVA").html(harga);
            $(".ALFAMART").html(harga);
            $(".ALFAMIDI").html(harga);
            $(".INDOMARET").html(harga);
            $(".SP").html(harga);
            $(".DA").html(harga);
            $(".I1").html(harga);
            $(".BR").html(harga);
            $(".B1").html(harga);
            $(".BT").html(harga);
            $(".FT").html(harga);
            $(".M2").html(harga);
            $(".OV").html(harga);
            $(".VA").html(harga);
            $(".SA").html(harga);

        }
    </script>
@endsection
