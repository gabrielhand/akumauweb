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
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-blue-500/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="like" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class="" src="https://mobafams.com/svgs/like.svg"
                                    style="color: transparent;"></figure> Layanan Terbaik
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-blue-500/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="card" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class="" src="https://mobafams.com/svgs/card.svg"
                                    style="color: transparent;"></figure> Pembayaran yang Aman
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-500 text-white hover:bg-blue-500/80 font-normal gap-2">
                            <figure style="width: 18px;"><img alt="time24hours" loading="lazy" width="18" height="18"
                                    decoding="async" data-nimg="1" class=""
                                    src="https://mobafams.com/svgs/time24hours.svg" style="color: transparent;"></figure>
                            Layanan Pelanggan 24/7
                        </div>
                    </div>
                    <div class="prose dark:prose-invert prose-invert">
                        <div class="text-xs md:text-sm overflow-hidden text-white" style="max-height: 2.8em;">
                            <p>{!! $kategori->ket_layanan !!}</p>
                        </div><button type="button" class="text-blue-500 mt-2 text-xs" fdprocessedid="huhqwm">Show
                            more</button>
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
                                type="button" fdprocessedid="k0slc"><span
                                    class="font-medium line-clamp-1">Produk</span></button></div>
                        <div class="inline-flex"><button
                                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap hover:bg-purple-500/80 h-10 py-2 px-4 bg-slate-200 text-black"
                                type="button"><span class="font-medium line-clamp-1">Ulasan
                                    Produk</span></button></div>
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
                                            <figure style="width: 300px;"><img alt="empty-box" loading="lazy"
                                                    width="300" height="300" decoding="async" data-nimg="1"
                                                    class="" src="https://mobafams.com/gifs/produk_empty.gif"
                                                    style="color: transparent;"></figure>
                                            <div class="space-y-3 flex flex-col items-center">
                                                <p class="text-lg">Produk belum tersedia...</p>
                                                <button
                                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 px-4 py-2">
                                                    Cari Produk Lainnya</button>
                                            </div>
                                        </div>
                                    </section>
                                @else
                                    <div class="w-full overflow-hidden">
                                        <div class="flex hover:overflow-x-auto pb-2 gap-x-4 w-full">
                                            @foreach ($sub as $index => $subkat)
                                                <button
                                                    class="flex-shrink-0 flex-1 px-4 h-24 flex flex-col justify-evenly gap-3 py-2 items-center rounded-xl cursor-pointer relative hover:bg-purple-500 hover:bg-opacity-20 bg-sidebar-menu light-dark-text">
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
                                        @foreach ($nominal as $nom)
                                            @if ($nom->sub_category_id == $subkat['id'])
                                                <div>
                                                    {{-- <button type="button" role="radio" aria-checked="false"
                                                        data-state="unchecked" value="[object Object]"
                                                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                        id="" tabindex="-1">
                                                    </button> --}}
                                                    <input type="radio" name="nominal"
                                                        id="nominal-{{ $nom->id }}" value="{{ $nom->id }}"
                                                        data-type="diamond"
                                                        onchange="select_product('{{ $nom->id }}', '{{ $nom->layanan }}', '{{ $nom->harga }}');"
                                                        style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"
                                                        {{ Request::get('fs') == $nom->id ? 'checked' : '' }} />
                                                    <label for="nominal-{{ $nom->id }}"
                                                        id="nominal-{{ $nom->id }}">
                                                        <div
                                                            class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer relative hover:bg-purple-500 hover:bg-opacity-20 bg-sidebar-menu light-dark-text h-full">
                                                            <div class="flex items-center gap-4 w-[80%] text-sm">
                                                                <div class="flex flex-col gap-1.5">
                                                                    <p class="text-[13px] font-medium leading-6">
                                                                        {{ $nom->layanan }}</p>
                                                                    <p class="text-[13px]">Rp
                                                                        {{ number_format($nom->harga) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="relative w-[20%] h-10 py-1"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            @endif
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
                                                class="text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                        <div class="relative flex items-center">
                                            <input name="other_id" autocomplete="off" autosave="false" type="text"
                                                class="text-sm w-full light-dark-text focus:outline-none ring-1 ring-gray-500 focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                                placeholder="Masukkan Server">
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
                                Nickname. Contoh: 12345678 (1234).</p>
                        </div>
                    @elseif($kategori->kode == 'life-after')
                        <div class="border shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun<button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap invisible"
                                    type="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg></button></h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">ID Akun </p>
                                        <div class="relative flex items-center">
                                            <input name="other_id" autocomplete="off" autosave="false" type="text"
                                                class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                                placeholder="{{ $kategori->placeholder_1 }}" fdprocessedid="x8ewg6">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full ">
                                        <select
                                            class="form-control floating-select games-input block w-full rounded-full border-gray-300 text-sm shadow-sm sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem] appearance-none"
                                            name="zoneId" id="zone" placeholder="Pilih Server"
                                            fdprocessedid="n3x76">
                                            <option value="">Pilih Server</option>
                                            <option value="miskatown">Miska Town</option>
                                            <option value="sandcastle">Sand Castle</option>
                                            <option value="mouthswamp">Mouth Swamp</option>
                                            <option value="redwoodtown">Red Wood Town</option>
                                            <option value="obelisk">Oblisk</option>
                                            <option value="fallforest">Fall Forest</option>
                                            <option value="mountsnow">Mount Snow</option>
                                            <option value="nancycity">Nancy City</option>
                                            <option value="charlestown">Charles Town</option>
                                            <option value="snowhighlands">Snow High Lands</option>
                                            <option value="santopany">Santopany</option>
                                            <option value="levincity">Levin City</option>
                                            <option value="newland">New Land</option>
                                            <option value="milestone">Mile Stone</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5"></p>
                        </div>
                    @elseif($kategori->kode == 'genshin-impact')
                        <div class="border shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="detailAccount">
                            <h3 class="text-sm md:text-lg font-medium flex items-center gap-4">Masukan Detil Akun<button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap visible"
                                    type="button" fdprocessedid="utyty2"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-help-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg></button></h3>
                            <div class="grid mt-6 gap-3 grid-cols-2">
                                <div class="w-full">
                                    <div class="flex flex-col w-full">
                                        <p class="text-xs md:text-sm font-semibold mb-2">UID </p>
                                        <div class="relative flex items-center">
                                            <input name="ID ML" autocomplete="off" id="user_id" autosave="false"
                                                type="text" value="" type="number"
                                                class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                                placeholder="UID">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Server </p>
                                    <div class="relative w-full ">
                                        <select
                                            class="block w-full rounded-xl sm:text-sm focus:outline-none focus:border-indigo-700 focus:ring focus:ring-[#2D2EAD] py-[0.5rem] px-[0.75rem]"
                                            name="zoneId" id="zone" placeholder="Pilih Server"
                                            fdprocessedid="n3x76">
                                            <option value="">&nbsp;&nbsp;&nbsp; Pilih Server</option>
                                            <option value="os_usa">&nbsp;&nbsp;&nbsp; America</option>
                                            <option value="os_euro">&nbsp;&nbsp;&nbsp; Europa</option>
                                            <option value="os_asia">&nbsp;&nbsp;&nbsp; Asia</option>
                                            <option value="os_cht">&nbsp;&nbsp;&nbsp; TW_HK_MO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div data-orientation="horizontal" role="none"
                                class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Untuk Menemukan UID
                                &amp; Server Kamu, Pada Halaman Awal Pada Pojok Kanan Bawah Layar Akan Muncul ID &amp;
                                Server Kamu Berada Di Tengah Layar . Contoh: 12345678 (Asia).</p>
                        </div>
                    @endif
                    <div class="shadow-sm bg-sidebar-menu light-dark-text rounded-xl p-4" id="choosePaymentMethod">
                        <h3 class="text-sm md:text-lg font-medium">Pilih Pembayaran</h3>
                        <div class="mt-4 space-y-2">
                            <div id="payment-method">
                                <div class="border-b bg-white rounded-xl">
                                    <h3 class="flex">
                                        <button type="button" id="toggleButton" onclick="toggleContent()"
                                            class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                            <p class="text-black font-bold text-sm">QRIS</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                id="toggleIcon"
                                                class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </button>
                                    </h3>
                                    <div id="paymentContent" class="overflow-hidden text-sm transition-all max-h-0">
                                        <div class="pb-4 pt-0">
                                            <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2" tabindex="0"
                                                style="outline: none;">
                                                @foreach ($pay_method as $p)
                                                    @if ($p->tipe == 'e-walet')
                                                        <div
                                                            class="border text-card-foreground shadow-sm bg-productDetail-accord-item relative rounded-lg hover:cursor-pointer border-none hover:bg-blue-500 hover:bg-opacity-20">
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
                                                            <label for="40">
                                                                <div
                                                                    class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                                    <div class="flex justify-between items-center">
                                                                        <div class="space-y-2">
                                                                            <p class="text-black text-sm font-medium">
                                                                                {{ $p->name }}</p>
                                                                            <div id="method-{{ $p->id }}price"
                                                                                class="price GOPAY text-lg text-blue-600 font-medium">
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
                                        <button id="toggleButton" type="button" onclick="toggleContent()"
                                            class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black">
                                            <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                                <figure>
                                                    <img alt="QRIS S3" loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="h-4 w-4 shrink-0 transition-transform duration-200">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </button>
                                    </h3>
                                </div>
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
                                        disabled="" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
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
                                        <input name="kontak" autocomplete="off" type="number" autosave="false"
                                            type="text"
                                            class="text-sm w-full light-dark-text focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-purple-500 focus:outline-1"
                                            placeholder="Masukan Nomor Whatsapp">
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Dengan membeli
                                otomatis saya menyutujui <a class="underline" href="/termandconditional">Ketentuan
                                    Layanan</a></p>
                        </div><button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-purple-500 text-white hover:bg-purple-500/80 h-10 py-2 mt-5 px-8"
                            fdprocessedid="eyrqnn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4 animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                            </svg>Beli Sekarang</button>
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
                                                        <img alt="{{ $kategori->nama }}" loading="lazy" decoding="async"
                                                            data-nimg="fill"
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
    </section>
    <script>
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

            $(".nom-radio").removeClass('active');
            $("#nominal" + id).addClass('border-purple-500');

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

        function select_method(id, name) {

            var product = $("input[name=nominal]:checked").val();
            console.log(product);

            if (!product) {
                toastr.warning('Silahkan pilih produk dahulu');
            } else {

                $(".method").removeClass('active');
                $("#method-" + id).addClass('active');

                $("input[name=method]").val(id);
                $("#metode_bayar").text(name);
                var harga = $("#method-" + id + "price").text();
                $("#total_bayar").text(harga);
                // $("#total_bayar").text($("#method-" + id + "price").text());
            }
        }
    </script>
@endsection
