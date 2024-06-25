@extends('layout.main')

@section('content')
    <section class="md:px-6 px-4 pt-8 relative">
        <div class="bg-invoice-card rounded-lg space-y-4 pb-4">
            <div class="relative">
                <div class="absolute inset-0 max-h-[9rem] lg:max-h-[8rem] overflow-hidden rounded-lg">
                    <div class="relative h-full w-full">
                        <figure>
                            <img alt="invoice-bg" loading="lazy" decoding="async" data-nimg="fill"
                                class="object-cover rounded-lg" sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fheader.webp&amp;w=3840&amp;q=75"
                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </figure>
                        <div class="absolute inset-0 bg-black/30 mix-blend-multiply rounded-lg" aria-hidden="true"></div>
                        <div class="absolute left-0 top-0 w-full h-full flex items-center px-8 justify-between z-10">
                            <h1 class="text-xl md:text-2xl font-bold text-center text-white">INVOICE</h1>
                            <button
                                class="justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-10 px-4 py-2 bg-pink-500 text-white rounded-full hover:bg-pink-600 cursor-pointer hidden md:flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-printer">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                    </path>
                                    <rect width="12" height="8" x="6" y="14"></rect>
                                </svg> Cetak Invoice
                            </button>
                            <button
                                class="items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-9 px-3 bg-pink-500 text-white rounded-full hover:bg-pink-600 cursor-pointer block md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-printer">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                    </path>
                                    <rect width="12" height="8" x="6" y="14"></rect>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto max-w-7xl lg:py-12 px-4 py-10"></div>
            </div>
            <div class="flex flex-col px-4 md:px-8 light-dark-text gap-4">
                @if ($data->status_pembayaran === 'Lunas' && $data->status_pembelian === 'Success')
                    <div class="flex flex-col lg:flex-row justify-between gap-3">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-3 justify-between">
                            <div class="flex items-center">
                                <p id="orderId" class="font-bold italic md:text-lg light-dark-text">
                                    {{ $data->id_pembelian }}</p>
                                <button id="copyButton"
                                    class="btn-salin-id light-dark-text inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-10 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2">
                                        </rect>
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs md:text-sm ml-0 md:ml-4 opacity-80 light-dark-text">Tanggal Transaksi
                                {{ $data->created_at }}</p>
                        </div>
                        <div class="flex items-center gap-3 justify-between">
                            <p class="text-xs md:text-sm">Status Pembayaran : </p>
                            <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-green-500">
                                {{ $data->status_pembayaran }}</div>
                        </div>
                    </div>
                    <div class="divider bg-white/25 h-[1px]"></div>
                    <div class="flex flex-col gap-3 md:flex-row md:gap-2">
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-orange-500 text-white">
                            <div class="flex skew-x-[16deg] gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg> Pembayaran</div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-blue-500 text-white">
                            <div class="flex skew-x-[16deg] gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-refresh-ccw">
                                    <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path>
                                    <path d="M16 16h5v5"></path>
                                </svg> Proses</div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-green-500 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-xcircle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m15 9-6 6"></path>
                                    <path d="m9 9 6 6"></path>
                                </svg> Pesanan Selesai
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-0 gap-y-8 md:grid-cols-3 mt-4 md:gap-x-6 ">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex items-center gap-2">
                                <div class="h-16 w-16 relative rounded-xl shrink-0 flex">
                                    <figure class="h-full w-full ">
                                        <img alt="Gambar-{{ $data->nama_kategori }}" loading="lazy" decoding="async"
                                            data-nimg="fill"
                                            class="h-full w-full object-cover object-center group-hover:blur-sm group-hover:brightness-50 transition-all duration-200 ease-in-out rounded-xl"
                                            sizes="(max-width: 768px) 100vw, 100px" src="{{ $data->thumbnail }}"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </figure>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs md:text-sm font-semibold">{{ $data->layanan }}</p>
                                    <p class="text-[10px] md:text-xs font-medium">{{ $data->nama_kategori }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <div class="flex justify-between w-full text-xs">
                                    <p>Harga</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                                {{-- <div class="flex justify-between w-full text-xs">
                                <p>Fee</p>
                                <p>Rp 15,-</p>
                            </div> --}}
                                <div class="flex justify-between w-full text-sm text-orange-500 font-bold">
                                    <p>Total Bayar</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="w-full h-36 relative">
                                <figure>
                                    <img alt="gif-{{ $data->status_pembelian }}" loading="lazy" decoding="async"
                                        data-nimg="fill" class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                        src="/assets/gif/pesanan_success.gif"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <ul role="list">
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Data</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        {{ $data->user_id }}|{{ $data->zone }}</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        No Whatsapp</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        62895346404969</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Pembayaran</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <figure style="width: 50px;"><img
                                                alt="https://is3.cloudhost.id/carenindonesia/bisacash/qr.png"
                                                loading="lazy" width="50" height="50" decoding="async"
                                                data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                                                src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                style="color: transparent;">
                                        </figure>
                                    </div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Status</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-green-500">
                                            {{ $data->status_pembelian }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @elseif($data->status_pembayaran === 'Lunas' && $data->status_pembelian === 'Batal')
                    <div class="flex flex-col lg:flex-row justify-between gap-3">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-3 justify-between">
                            <div class="flex items-center">
                                <p id="orderId" class="font-bold italic md:text-lg light-dark-text">
                                    {{ $data->id_pembelian }}</p>
                                <button id="copyButton"
                                    class="btn-salin-id light-dark-text inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-10 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2">
                                        </rect>
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs md:text-sm ml-0 md:ml-4 opacity-80 light-dark-text">Tanggal Transaksi
                                {{ $data->created_at }}</p>
                        </div>
                        <div class="flex items-center gap-3 justify-between">
                            <p class="text-xs md:text-sm">Status Pembayaran : </p>
                            <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-green-500">
                                {{ $data->status_pembayaran }}</div>
                        </div>
                    </div>
                    <div class="divider bg-white/25 h-[1px]"></div>
                    <div class="flex flex-col gap-3 md:flex-row md:gap-2">
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg> Pembayaran
                            </div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-refresh-ccw">
                                    <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path>
                                    <path d="M16 16h5v5"></path>
                                </svg> Proses</div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-xcircle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m15 9-6 6"></path>
                                    <path d="m9 9 6 6"></path>
                                </svg> Pesanan Selesai
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-0 gap-y-8 md:grid-cols-3 mt-4 md:gap-x-6 ">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex items-center gap-2">
                                <div class="h-16 w-16 relative rounded-xl shrink-0 flex">
                                    <figure class="h-full w-full ">
                                        <img alt="Gambar-{{ $data->nama_kategori }}" loading="lazy" decoding="async"
                                            data-nimg="fill"
                                            class="h-full w-full object-cover object-center group-hover:blur-sm group-hover:brightness-50 transition-all duration-200 ease-in-out rounded-xl"
                                            sizes="(max-width: 768px) 100vw, 100px" src="{{ $data->thumbnail }}"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </figure>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs md:text-sm font-semibold">{{ $data->layanan }}</p>
                                    <p class="text-[10px] md:text-xs font-medium">{{ $data->nama_kategori }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <div class="flex justify-between w-full text-xs">
                                    <p>Harga</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                                {{-- <div class="flex justify-between w-full text-xs">
                        <p>Fee</p>
                        <p>Rp 15,-</p>
                    </div> --}}
                                <div class="flex justify-between w-full text-sm text-orange-500 font-bold">
                                    <p>Total Bayar</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="w-full h-36 relative">
                                <figure>
                                    <img alt="gif-{{ $data->status_pembelian }}" loading="lazy" decoding="async"
                                        data-nimg="fill" class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                        src="/assets/gif/pesanan_cancel.gif"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <ul role="list">
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Data</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        {{ $data->user_id }}|{{ $data->zone }}</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        No Whatsapp</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        62895346404969</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Pembayaran</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <figure style="width: 50px;"><img
                                                alt="https://is3.cloudhost.id/carenindonesia/bisacash/qr.png"
                                                loading="lazy" width="50" height="50" decoding="async"
                                                data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                                                src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                style="color: transparent;"></figure>
                                    </div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Status</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                            {{ $data->status_pembelian }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @elseif($data->status_pembayaran === 'Belum Lunas')
                    <div class="flex flex-col lg:flex-row justify-between gap-3">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-3 justify-between">
                            <div class="flex items-center">
                                <p id="orderId" class="font-bold italic md:text-lg light-dark-text">
                                    {{ $data->id_pembelian }}</p>
                                <button id="copyButton"
                                    class="btn-salin-id light-dark-text inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-10 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2">
                                        </rect>
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs md:text-sm ml-0 md:ml-4 opacity-80 light-dark-text">Tanggal Transaksi
                                {{ $data->created_at }}</p>
                        </div>
                        <div class="flex items-center gap-3 justify-between">
                            <p class="text-xs md:text-sm">Status Pembayaran : </p>
                            <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                {{ $data->status_pembayaran }}</div>
                        </div>
                    </div>
                    <div class="divider bg-white/25 h-[1px]"></div>
                    <div class="flex flex-col gap-3 md:flex-row md:gap-2">
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg> Pembayaran
                            </div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-refresh-ccw">
                                    <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path>
                                    <path d="M16 16h5v5"></path>
                                </svg> Proses</div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-xcircle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m15 9-6 6"></path>
                                    <path d="m9 9 6 6"></path>
                                </svg> Pesanan Selesai
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-0 gap-y-8 md:grid-cols-3 mt-4 md:gap-x-6 ">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex items-center gap-2">
                                <div class="h-16 w-16 relative rounded-xl shrink-0 flex">
                                    <figure class="h-full w-full ">
                                        <img alt="Gambar-{{ $data->nama_kategori }}" loading="lazy" decoding="async"
                                            data-nimg="fill"
                                            class="h-full w-full object-cover object-center group-hover:blur-sm group-hover:brightness-50 transition-all duration-200 ease-in-out rounded-xl"
                                            sizes="(max-width: 768px) 100vw, 100px" src="{{ $data->thumbnail }}"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </figure>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs md:text-sm font-semibold">{{ $data->layanan }}</p>
                                    <p class="text-[10px] md:text-xs font-medium">{{ $data->nama_kategori }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <div class="flex justify-between w-full text-xs">
                                    <p>Harga</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                                {{-- <div class="flex justify-between w-full text-xs">
                            <p>Fee</p>
                            <p>Rp 15,-</p>
                        </div> --}}
                                <div class="flex justify-between w-full text-sm text-orange-500 font-bold">
                                    <p>Total Bayar</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="w-full h-36 relative">
                                <figure>
                                    <img alt="gif-{{ $data->status_pembelian }}" loading="lazy" decoding="async"
                                        data-nimg="fill" class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                        src="/assets/gif/pesanan_cancel.gif"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <ul role="list">
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Data</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        {{ $data->user_id }}|{{ $data->zone }}</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        No Whatsapp</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        62895346404969</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Pembayaran</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <figure style="width: 50px;"><img
                                                alt="https://is3.cloudhost.id/carenindonesia/bisacash/qr.png"
                                                loading="lazy" width="50" height="50" decoding="async"
                                                data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                                                src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                style="color: transparent;"></figure>
                                    </div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Status</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                            {{ $data->status_pembelian }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @elseif($data->status_pembayaran === 'Pending' && $data->status_pembelian === 'Pending')
                    <div class="flex flex-col lg:flex-row justify-between gap-3">
                        <div class="flex flex-col md:flex-row items-start md:items-center gap-3 justify-between">
                            <div class="flex items-center">
                                <p id="orderId" class="font-bold italic md:text-lg light-dark-text">
                                    {{ $data->id_pembelian }}</p>
                                <button id="copyButton"
                                    class="btn-salin-id light-dark-text inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap h-10 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-copy">
                                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2">
                                        </rect>
                                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                    </svg>
                                </button>
                            </div>
                            <p class="text-xs md:text-sm ml-0 md:ml-4 opacity-80 light-dark-text">Tanggal Transaksi
                                {{ $data->created_at }}</p>
                        </div>
                        <div class="flex items-center gap-3 justify-between">
                            <p class="text-xs md:text-sm">Status Pembayaran : </p>
                            <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-green-500">
                                {{ $data->status_pembayaran }}</div>
                        </div>
                    </div>
                    <div class="divider bg-white/25 h-[1px]"></div>
                    <div class="flex flex-col gap-3 md:flex-row md:gap-2">
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg> Pembayaran
                            </div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-refresh-ccw">
                                    <path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                    <path d="M3 3v5h5"></path>
                                    <path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path>
                                    <path d="M16 16h5v5"></path>
                                </svg> Proses</div>
                        </div>
                        <div
                            class="h-10 md:h-14 w-full skew-x-[-16deg] rounded-sm flex items-center justify-center gap-3 bg-red-600 text-white">
                            <div class="flex skew-x-[16deg] gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-xcircle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="m15 9-6 6"></path>
                                    <path d="m9 9 6 6"></path>
                                </svg> Pesanan Selesai
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-0 gap-y-8 md:grid-cols-3 mt-4 md:gap-x-6 ">
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex items-center gap-2">
                                <div class="h-16 w-16 relative rounded-xl shrink-0 flex">
                                    <figure class="h-full w-full ">
                                        <img alt="Gambar-{{ $data->nama_kategori }}" loading="lazy" decoding="async"
                                            data-nimg="fill"
                                            class="h-full w-full object-cover object-center group-hover:blur-sm group-hover:brightness-50 transition-all duration-200 ease-in-out rounded-xl"
                                            sizes="(max-width: 768px) 100vw, 100px" src="{{ $data->thumbnail }}"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </figure>
                                </div>
                                <div class="space-y-1">
                                    <p class="text-xs md:text-sm font-semibold">{{ $data->layanan }}</p>
                                    <p class="text-[10px] md:text-xs font-medium">{{ $data->nama_kategori }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col w-full gap-3">
                                <div class="flex justify-between w-full text-xs">
                                    <p>Harga</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                                {{-- <div class="flex justify-between w-full text-xs">
                        <p>Fee</p>
                        <p>Rp 15,-</p>
                    </div> --}}
                                <div class="flex justify-between w-full text-sm text-orange-500 font-bold">
                                    <p>Total Bayar</p>
                                    <p>Rp {{ $data->harga_pembayaran }},-</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="w-full h-36 relative">
                                <figure>
                                    <img alt="gif-{{ $data->status_pembelian }}" loading="lazy" decoding="async"
                                        data-nimg="fill" class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                        src="/assets/gif/pesanan_cancel.gif"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <ul role="list">
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Data</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        {{ $data->user_id }}|{{ $data->zone }}</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        No Whatsapp</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        62895346404969</div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Pembayaran</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <figure style="width: 50px;"><img
                                                alt="https://is3.cloudhost.id/carenindonesia/bisacash/qr.png"
                                                loading="lazy" width="50" height="50" decoding="async"
                                                data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                                                src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                style="color: transparent;"></figure>
                                    </div>
                                </li>
                                <li class="py-1 flex flex-col md:flex-row w-full">
                                    <div
                                        class="w-full md:w-[40%] text-xs text-center bg-invoice-card-header justify-center items-center p-2 flex">
                                        Status</div>
                                    <div
                                        class="w-full md:w-[60%] bg-white text-black font-semibold text-sm justify-center items-center p-2 flex">
                                        <div class="rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                            {{ $data->status_pembelian }}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endif
                <div role="alert"
                    class="relative w-full rounded-lg border p-4 [&amp;>svg~*]:pl-7 [&amp;>svg+div]:translate-y-[-3px] [&amp;>svg]:absolute [&amp;>svg]:left-4 [&amp;>svg]:top-4 [&amp;>svg]:text-foreground bg-background text-foreground">
                    <div class="text-sm text-justify">
                        <p>QRIS mendukung pembayaran seperti ovo, dana, shopeepay, bca scan, dll. Silahkan scan kode barcode
                            dibawah melalui aplikasi pembayaran favorit anda untuk membayar.</p>
                    </div>
                </div>
            </div>
            <div id="success-alert" role="alert"
                class="alert rounded-md bg-green-500 fixed bottom-10 right-10 z-20 shadow-lg w-auto py-4 light-dark-text hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p>Order ID berhasil disalin ke clipboard!</p>
            </div>
        </div>
    </section>
    <style>
        .alert {
            transition: visibility 0s, opacity 0.5s linear;
        }

        .alert.show {
            opacity: 1;
            visibility: visible;
            animation: slide-up 0.5s ease forwards;
        }

        .alert.hidden {
            opacity: 0;
            visibility: hidden;
            animation: slide-down 0.5s ease forwards;
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slide-down {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(100%);
            }
        }
    </style>
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            var orderId = document.getElementById('orderId').innerText;
            var tempInput = document.createElement('textarea');
            var successAlert = document.getElementById('success-alert');

            tempInput.value = orderId;
            document.body.appendChild(tempInput);

            tempInput.select();
            document.execCommand('copy');

            document.body.removeChild(tempInput);

            successAlert.classList.remove('hidden');
            successAlert.classList.add('show');

            setTimeout(() => {
                successAlert.classList.remove('show');
                successAlert.classList.add('hidden');
            }, 2000);
        });
    </script>
@endsection
