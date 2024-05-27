@extends('layout.main')

@section('content')
    <section id="hero" class="pb-6 bg-[#21222e] relative">
        <div class="w-full h-48 md:h-[24rem] relative ">
            <figure><img alt="{{ $kategori->nama }}" fetchpriority="high" decoding="async" data-nimg="fill" class="object-cover"
                    sizes="(max-width: 768px) 100vw, 100px"
                    src="{{ $kategori->bannerlayanan }}"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
            <div class="absolute inset-0 bg-gradient-to-b from-[#16172100] to-[#2F3038] mix-blend-multiply"></div>
        </div>
        <div
            class="-mt-[3.5rem] md:-mt-[7.2rem] md:px-6 px-4 flex flex-col items-center md:flex-row md:items-start z-20 relative gap-3 md:gap-8">
            <div
                class="h-32 w-32 md:h-48 md:w-48 lg:h-52 lg:w-52 relative shrink-0 p-1.5 md:p-2.5 rounded-xl md:rounded-2xl backdrop-blur-lg bg-white/20">
                <figure class="h-full w-full"><img alt="{{ $kategori->nama }}" fetchpriority="high" width="400" height="400"
                        decoding="async" data-nimg="1" class="object-cover rounded-lg md:rounded-xl h-full w-full"
                        sizes="(max-width: 768px) 100vw, 100px"
                        src="{{ $kategori->thumbnail }}"
                        style="color: transparent;"></figure>
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
                    </div><button
                        class="inline-flex items-center justify-center rounded-md font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap hover:bg-accent hover:text-accent-foreground gap-3 text-white px-2 py-1 text-sm"
                        fdprocessedid="bs9j9j"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-help-circle">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg> Lihat Cara Pembelian</button>
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
                            class="border shadow-sm bg-slate-200 text-productDetail-card-fg rounded-xl p-4 space-y-3">
                            <h3 class="text-lg font-medium">Deskripsi {{ $kategori->nama }}</h3>
                            <div class="prose dark:prose-invert">
                                <div class="text-xs md:text-sm overflow-hidden" style="max-height: 3.8em;">
                                    <p>{!! $kategori->ket_layanan !!}</p>
                                </div><button type="button" class="text-blue-500 mt-2 text-xs"
                                    fdprocessedid="fuzbi9">Show more</button>
                            </div>
                        </div>
                    </div>
                    <div id="chooseLayanan" class="space-y-4">
                        <h3 class="text-sm md:text-lg font-medium">Pilih Nominal</h3>
                        <div class="space-y-1">
                            <div class="mb-4">
                                <div
                                    class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active"
                                            style="width: 124.75px; margin-right: 16px;">
                                            <div
                                                class="px-4 h-24 flex flex-col justify-evenly gap-3 py-2 items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-blue-500 bg-opacity-20 border-blue-600">
                                                <div class="relative h-10 w-10 py-1">
                                                    <figure style="width: 35px;"><img alt="icon-item" loading="lazy"
                                                            width="35" height="35" decoding="async"
                                                            data-nimg="1" class="object-cover object-center py-1"
                                                            sizes="(max-width: 768px) 100vw, 100px"
                                                            srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=3840&amp;q=75 3840w"
                                                            src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1703213071.webp&amp;w=3840&amp;q=75"
                                                            style="color: transparent;"></figure>
                                                </div>
                                                <div class="flex items-center h-full gap-8 text-sm ">Top Up S1</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next"
                                            style="width: 124.75px; margin-right: 16px;">
                                            <div
                                                class="px-4 h-24 flex flex-col justify-evenly gap-3 py-2 items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70">
                                                <div class="flex items-center h-full gap-8 text-sm ">Skin Limited MLBB
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 124.75px; margin-right: 16px;">
                                            <div
                                                class="px-4 h-24 flex flex-col justify-evenly gap-3 py-2 items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70">
                                                <div class="flex items-center h-full gap-8 text-sm ">Event Top Up Skin
                                                    Exorcist</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" style="width: 124.75px; margin-right: 16px;">
                                            <div
                                                class="px-4 h-24 flex flex-col justify-evenly gap-3 py-2 items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70">
                                                <div class="flex items-center h-full gap-8 text-sm ">Pre Order Proses 25
                                                    Mei</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="radiogroup" aria-required="false" dir="ltr" class="grid gap-2"
                                tabindex="0" style="outline: none;">
                                <div class="flex flex-col mb-4">
                                    <div class="w-full grid lg:grid-cols-3 md:grid-cols-3 grid-cols-2 gap-4">
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="week2login" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="week2login">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Weekly Diamonds
                                                                Pass 2 Minggu</p>
                                                            <p class="text-[13px]">Rp 55.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML275_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML275_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">275 Diamond</p>
                                                            <p class="text-[13px]">Rp 70.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="WDP3" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="WDP3">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Weekly Diamond
                                                                Pass 3 Minggu</p>
                                                            <p class="text-[13px]">Rp 75.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML440_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML440_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">440 Diamond</p>
                                                            <p class="text-[13px]">Rp 102.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="TwilightPass1" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="TwilightPass1">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Twilight Pass</p>
                                                            <p class="text-[13px]">Rp 120.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML565_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML565_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">565 Diamond</p>
                                                            <p class="text-[13px]">Rp 122.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="WDP5" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="WDP5">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Weekly Diamond
                                                                Pass 5 Minggu</p>
                                                            <p class="text-[13px]">Rp 125.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML730_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML730_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">730 Diamond</p>
                                                            <p class="text-[13px]">Rp 155.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="WDP7" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="WDP7">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Weekly Diamond
                                                                Pass 7 Minggu</p>
                                                            <p class="text-[13px]">Rp 175.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML840_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML840_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">840 Diamond</p>
                                                            <p class="text-[13px]">Rp 177.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML1005_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML1005_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">1005 Diamond</p>
                                                            <p class="text-[13px]">Rp 213.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="WDP9" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="WDP9">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Weekly Diamond
                                                                Pass 9 Minggu</p>
                                                            <p class="text-[13px]">Rp 225.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML1155_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML1155_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">1155 Diamond</p>
                                                            <p class="text-[13px]">Rp 236.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML1430_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML1430_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">1430 Diamond</p>
                                                            <p class="text-[13px]">Rp 294.997</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML1765_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML1765_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">1765 Diamond</p>
                                                            <p class="text-[13px]">Rp 360.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML2040_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML2040_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">2040 Diamond</p>
                                                            <p class="text-[13px]">Rp 415.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML2330_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML2330_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">2330 Diamond</p>
                                                            <p class="text-[13px]">Rp 470.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML2975_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML2975_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">2975 Diamond</p>
                                                            <p class="text-[13px]">Rp 585.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML3540_vILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML3540_vILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">3540 Diamond</p>
                                                            <p class="text-[13px]">Rp 690.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML4130_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML4130_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">4130 Diamond</p>
                                                            <p class="text-[13px]">Rp 800.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="MLAIRPLANE" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="MLAIRPLANE">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">Border Airplane
                                                            </p>
                                                            <p class="text-[13px]">Rp 850.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML5015_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML5015_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">5015 Diamond</p>
                                                            <p class="text-[13px]">Rp 975.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="MLBB6000_Vilog" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="MLBB6000_Vilog">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">6000 Diamond</p>
                                                            <p class="text-[13px]">Rp 1.150.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML7155_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML7155_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">7155 Diamond</p>
                                                            <p class="text-[13px]">Rp 1.370.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML8975_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML8975_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">8975 Diamond</p>
                                                            <p class="text-[13px]">Rp 1.700.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML10130_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML10130_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">10130 Diamond</p>
                                                            <p class="text-[13px]">Rp 1.900.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="ML12000_VILOG" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="ML12000_VILOG">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">12000 Diamond</p>
                                                            <p class="text-[13px]">Rp 2.225.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="18000DM" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="18000DM">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">18.000 Diamonds
                                                            </p>
                                                            <p class="text-[13px]">Rp 3.350.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="24000DM" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="24000DM">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">24.000 Diamonds
                                                            </p>
                                                            <p class="text-[13px]">Rp 4.450.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                        <div><button type="button" role="radio" aria-checked="false"
                                                data-state="unchecked" value="[object Object]"
                                                class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                id="30000DM" tabindex="-1"
                                                data-radix-collection-item=""></button><input type="radio"
                                                aria-hidden="true" tabindex="-1" value="[object Object]"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="30000DM">
                                                <div
                                                    class="px-[16px] py-[9px] min-h-[52px] flex gap-2 justify-between items-center rounded-xl cursor-pointer border relative hover:bg-blue-500 hover:bg-opacity-20 bg-productDetail-denom text-productDetail-denom-fg border-productDetail-denom/70 h-full">
                                                    <div class="flex items-center gap-4 w-[80%] text-sm">
                                                        <div class="flex flex-col gap-1.5">
                                                            <p class="text-[13px] font-medium leading-6">30.000 Diamonds
                                                            </p>
                                                            <p class="text-[13px]">Rp 5.500.000</p>
                                                        </div>
                                                    </div>
                                                    <div class="relative w-[20%] h-10 py-1"></div>
                                                </div>
                                            </label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 mt-6 hidden lg:block">
                        <div class="space-y-3">
                            <h3 class="text-lg font-medium">Mungkin Kamu Suka</h3>
                            <div
                                class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Mobile Legends</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Mobile Legends" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                MLBB Via Login</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="MLBB Via Login" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Free Fire</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Free Fire" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                MLBB SPESIAL (Server Luar Negeri)</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="MLBB SPESIAL (Server Luar Negeri)"
                                                        loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Mobile Legends Server 2</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Mobile Legends Server 2"
                                                        loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Skin Collector dan Limit</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Skin Collector dan Limit"
                                                        loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Free Fire MAX</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Free Fire MAX" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 154.438px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                PUBG Mobile</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="PUBG Mobile" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 md:col-span-12 lg:mt-0 mt-8 rounded-xl h-full space-y-4">
                    <div class="border shadow-sm bg-productDetail-card text-productDetail-card-fg rounded-xl p-4"
                        id="detailAccount">
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
                                    <p class="text-xs md:text-sm font-semibold mb-2">Nickname </p>
                                    <div class="relative flex items-center"><input name="id" autocomplete="off"
                                            autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                            placeholder="Masukkan Nickname" fdprocessedid="vp1bjf"></div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Email/Nomor HP </p>
                                    <div class="relative flex items-center"><input name="other_id" autocomplete="off"
                                            autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                            placeholder="Masukkan Email Moonton" fdprocessedid="x952f9"></div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Password </p>
                                    <div class="relative flex items-center"><input name="more_id" autocomplete="off"
                                            autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                            placeholder="Masukkan Password" fdprocessedid="j2njge"></div>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Nomor ID </p>
                                    <div class="relative flex items-center"><input name="another_id"
                                            autocomplete="off" autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                            placeholder="Masukkan Nomor ID" fdprocessedid="eagefr"></div>
                                </div>
                            </div>
                        </div>
                        <div data-orientation="horizontal" role="none"
                            class="shrink-0 h-[1px] w-full mt-3 mb-2 bg-white/50"></div>
                        <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Silakan masukan detail
                            login akun kalian dengan lengkap dan benar ya gaes biar segera diproses dengan cepat</p>
                    </div>
                    <div class="border shadow-sm bg-productDetail-card text-productDetail-card-fg rounded-xl p-4">
                        <h3 class="text-sm md:text-lg font-medium">Jumlah</h3>
                        <div class="w-full mt-6">
                            <div class="flex flex-col w-full">
                                <div class="relative flex items-center"><input name="jumlah" autocomplete="off"
                                        autosave="false" type="text"
                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-10 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                        placeholder="Masukan Nomor Whatsapp" fdprocessedid="wydddh">
                                    <div class="flex ml-2 gap-2"><button
                                            class="inline-flex items-center justify-center font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 px-4 py-2 rounded-xl text-lg"
                                            type="button" fdprocessedid="y7sux9">-</button><button
                                            class="inline-flex items-center justify-center font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 px-4 py-2 rounded-xl text-lg"
                                            type="button" fdprocessedid="rz6dj5">+</button></div>
                                </div>
                            </div>
                            <p class="text-xs text-white/50 tracking-wide leading-5 mt-3">*Wajib: Minimal masukan 1</p>
                        </div>
                    </div>
                    <div class="border shadow-sm bg-productDetail-card text-productDetail-card-fg rounded-xl p-4"
                        id="choosePaymentMethod">
                        <h3 class="text-sm md:text-lg font-medium">Pilih Pembayaran</h3>
                        <div class="mt-4 space-y-2" data-orientation="vertical">
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1c:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1b:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">QRIS</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1c:" hidden="" role="region"
                                    aria-labelledby="radix-:r1b:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1c:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1b:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1e:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1d:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">Ewallet</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1e:" hidden="" role="region"
                                    aria-labelledby="radix-:r1d:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1e:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1d:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="OVO APPS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Dana APPS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="ShopeePay APPS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="LinkAja APPS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Gopay QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Ahopestore%2Fp%2F1702521083.webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="OVO QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fovo.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Dana QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fdana.jpg&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="LinkAja QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Flinkaj.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="ShopeePay QRIS" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fshp.jpg&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1g:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1f:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">Retail</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1g:" hidden="" role="region"
                                    aria-labelledby="radix-:r1f:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1g:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1f:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Alfamart" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Alfamidi" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fmini.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Alfaexpress" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fexpress.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Lawson" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Flawson.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Dandan" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdandan.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Superindo" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fsuperindo.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Indogrosir" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findogrosir.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Alfamart" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Falfa.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Indomaret" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Findomaret.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1i:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1h:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">Virtual Account</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1i:" hidden="" role="region"
                                    aria-labelledby="radix-:r1h:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1i:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1h:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="CIMB VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fcimb.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BNC VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbnc.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BCA VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbca.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BRI VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbri.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BNI VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fbni.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="PERMATA VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fpermata.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="MANDIRI VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fmandiri.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="DANAMON VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fdanamon.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BSI VA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fbsi.png&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1k:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1j:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">Pulsa</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1k:" hidden="" role="region"
                                    aria-labelledby="radix-:r1j:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1k:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1j:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Telkomsel" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845086.webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="Axis" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845865(1).webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="XL" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845095).webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="TRI" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Aveinstore%2Fp%2F1703845859.webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                            <div data-state="closed" data-orientation="vertical"
                                class="border-b bg-productDetail-accord rounded-xl grayscale">
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1m:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1l:"
                                        class="flex flex-1 items-center justify-between font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 p-2 text-white"
                                        data-radix-collection-item="">
                                        <p class="text-black font-bold text-sm">Bank Transfer</p><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                                <div data-state="closed" id="radix-:r1m:" hidden="" role="region"
                                    aria-labelledby="radix-:r1l:" data-orientation="vertical"
                                    class="overflow-hidden text-sm transition-all data-[state=closed]:animate-accordion-up data-[state=open]:animate-accordion-down"
                                    style="--radix-accordion-content-height: var(--radix-collapsible-content-height); --radix-accordion-content-width: var(--radix-collapsible-content-width);">
                                </div>
                                <h3 data-orientation="vertical" data-state="closed" class="flex"><button
                                        type="button" aria-controls="radix-:r1m:" aria-expanded="false"
                                        data-state="closed" disabled="" data-orientation="vertical"
                                        id="radix-:r1l:"
                                        class="flex-1 items-center font-medium transition-all hover:underline [&amp;[data-state=open]>svg]:rotate-180 bg-productDetail-accord-bottom rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black"
                                        data-radix-collection-item="">
                                        <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                            <figure><img alt="BCA" loading="lazy" decoding="async"
                                                    data-nimg="fill" class="object-contain"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=3840&amp;q=75 3840w"
                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2F170006012620160.webp&amp;w=3840&amp;q=75"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="h-4 w-4 shrink-0 transition-transform duration-200">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button></h3>
                            </div>
                        </div>
                    </div>
                    <div class="border shadow-sm bg-productDetail-card text-productDetail-card-fg rounded-xl p-4">
                        <h3 class="text-sm md:text-lg font-medium">Kode Promo</h3>
                        <div class="w-full mt-6">
                            <div class="flex flex-col w-full">
                                <div class="relative flex items-center"><input name="promo_voucher" autocomplete="off"
                                        autosave="false" type="text"
                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-10 rounded-l-xl text focus:outline-blue-500 focus:outline-1"
                                        placeholder="Masukan Kode Promo" fdprocessedid="3oucis"><button
                                        class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 px-4 py-2 rounded-l-none rounded-r-xl whitespace-nowrap"
                                        disabled="" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="mr-2 h-4 w-4 animate-spin hidden">
                                            <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                                        </svg>Redeem</button></div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5 mt-3">*Optional: Jika
                                tidak mempunyai kode promo abaikan saja</p>
                        </div>
                    </div>
                    <div class="border shadow-sm bg-productDetail-card text-productDetail-card-fg rounded-xl p-4"
                        id="confirmPayment">
                        <h3 class="text-sm md:text-lg font-medium">Selesaikan Pembayaran</h3>
                        <div class="mt-6 space-y-2">
                            <div class="w-full">
                                <div class="flex flex-col w-full">
                                    <p class="text-xs md:text-sm font-semibold mb-2">Nomor Whatsapp </p>
                                    <div class="relative flex items-center"><input name="kontak" autocomplete="off"
                                            autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-xl text focus:outline-blue-500 focus:outline-1"
                                            placeholder="Masukan Nomor Whatsapp" fdprocessedid="ooer99"></div>
                                </div>
                            </div>
                            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Dengan membeli
                                otomatis saya menyutujui <a class="underline" href="/termandconditional">Ketentuan
                                    Layanan</a></p>
                        </div><button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 py-2 mt-5 px-8"
                            fdprocessedid="po2z9"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="mr-2 h-4 w-4 animate-spin hidden">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                            </svg>Beli Sekarang</button>
                    </div>
                    <div class="space-y-6 mt-6 block lg:hidden">
                        <div class="space-y-3">
                            <h3 class="text-lg font-medium">Mungkin Kamu Suka</h3>
                            <div
                                class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden">
                                <div class="swiper-wrapper"
                                    style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Mobile Legends</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Mobile Legends" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702708430579-806C-4055-85F6-EC6EC6788BA2.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                MLBB Via Login</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="MLBB Via Login" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027110120B5-1DC9-4759-A3B2-B3291770DA2C.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Free Fire</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Free Fire" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712051250-483A-4847-9822-952EF5CC79E2.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                MLBB SPESIAL (Server Luar Negeri)</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img
                                                        alt="MLBB SPESIAL (Server Luar Negeri)" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17044163172D5-537D-4D0F-B30D-8301703FE3EF.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Mobile Legends Server 2</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Mobile Legends Server 2"
                                                        loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F170511340058F-BAC0-4B69-B659-1A3BA181A9AE.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Skin Collector dan Limit</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Skin Collector dan Limit"
                                                        loading="lazy" decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F1702712732133-19E1-4E75-A778-EE674C50BABE.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                Free Fire MAX</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="Free Fire MAX" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17028919639E5-DBCD-4E95-8190-8023F9C89D99.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 351.833px; margin-right: 24px;">
                                        <div class="h-56 lg:h-64 w-full relative">
                                            <div
                                                class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                                <div class="hidden group-hover:block ">
                                                    <div
                                                        class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                        <div
                                                            class="w-full grow flex flex-col items-center justify-center ">
                                                            <figure style="width: 40px;"><img alt="icon"
                                                                    loading="lazy" width="40" height="40"
                                                                    decoding="async" data-nimg="1"
                                                                    class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                    src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/fav.png"
                                                                    style="color: transparent;"></figure>
                                                        </div>
                                                        <div class="w-full flex flex-col items-center">
                                                            <p
                                                                class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                                PUBG Mobile</p>
                                                            <p
                                                                class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figure class="h-full w-full"><img alt="PUBG Mobile" loading="lazy"
                                                        decoding="async" data-nimg="fill"
                                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                        sizes="(max-width: 768px) 100vw, 100px"
                                                        srcset="/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1024&amp;q=75 1024w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1600&amp;q=75 1600w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=3840&amp;q=75 3840w"
                                                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Amobafams%2Fp%2F17027154108A6-07D1-4F89-9F2B-211AE18CEA06.webp&amp;w=3840&amp;q=75"
                                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
