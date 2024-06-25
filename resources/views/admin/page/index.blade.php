@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'text-purple-400' : ''}}">Menu</a></li>
                <li>Dashboard</li>
            </ul>
        </div>
        <div class="flex flex-col gap-y-8">
            <div class="flex bg-sidebar rounded-lg">
                <div class="flex gap-x-5 px-4 py-5">
                    <figure class="ms-10 rounded-full overflow-hidden">
                        <img src="{{ $logo_header }}" alt="logo-{{ ENV('APP_NAME') }}" class="max-w-16 h-14">
                    </figure>
                    <div class="flex flex-col gap-y-1 font-semibold">
                        <div class="light-dark-text text-xl lg:text-2xl">Halo, Selamat Datang Kembali</div>
                        <div class="text-purple-500 text-base lg:text-xl">{{ auth()->user()->role }}</div>
                    </div>
                </div>
            </div>

            <div class="light-dark-text text-xl lg:text-2xl font-semibold">Laporan Harian</div>

            <div class="grid lg:grid-cols-3 lg:grid-rows-2 gap-x-6 gap-y-9">
                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-total-order-today">
                        <div class="bg-violet-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Total Order Today
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_pembelian_today, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_pembelian_today }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-total-pending-today">
                        <div class="bg-red-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Order Pending Today
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_pembelian_pending_today, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_pembelian_pending_today }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-order-success-today">
                        <div class="bg-emerald-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Order Success Today
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_pembelian_success_today, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_pembelian_success_today }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-order-cancel-today">
                        <div class="bg-red-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Order Cancel Today
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_pembelian_batal_today, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_pembelian_batal_today }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-order-deposit-today">
                        <div class="bg-cyan-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Order Deposit Today
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_deposit_today, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_deposit_today }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="light-dark-text text-xl lg:text-2xl font-semibold">Laporan Keseluruhan</div>

            <div class="grid lg:grid-cols-3 lg:grid-rows-2 gap-x-6 gap-y-9">
                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-total-order-all">
                        <div class="bg-violet-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Total All Order
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_keseluruhan_pembelian, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_keseluruhan_pembelian }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-total-pending-all">
                        <div class="bg-red-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Total Order Pending
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_keseluruhan_pembelian_pending, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_keseluruhan_pembelian_pending }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                    <div id="icon-order-success-all">
                        <div class="bg-emerald-400 text-white px-2 py-3 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-col gap-y-1">
                            <p class=" font-medium">
                                Total Order Success
                            </p>
                            <p class="light-dark-text lg:text-base font-semibold">
                                Rp. {{ number_format($total_keseluruhan_pembelian_berhasil, '0', '.', ',') }}
                            </p>
                        </div>
                        <div class="text-sm mt-2">
                            <p>
                                Dengan total {{ $banyak_keseluruhan_pembelian_berhasil }}x pemesanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-3 grid grid-rows-1 grid-cols-2 gap-x-6">
                    <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                        <div id="icon-order-cancel-all">
                            <div class="bg-red-400 text-white px-2 py-3 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex flex-col gap-y-1">
                                <p class=" font-medium">
                                    Total Order Cancel
                                </p>
                                <p class="light-dark-text lg:text-base font-semibold">
                                    Rp. {{ number_format($total_keseluruhan_pembelian_batal, '0', '.', ',') }}
                                </p>
                            </div>
                            <div class="text-sm mt-2">
                                <p>
                                    Dengan total {{ $banyak_keseluruhan_pembelian_batal }}x pemesanan
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl min-h-40 ">
                        <div id="icon-order-deposit-all">
                            <div class="bg-cyan-400 text-white px-2 py-3 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4-1v1h1v-1zm1 3v-1H4v1zm7 0v-1h-1v1zm-1-2h1v-1h-1zm-6 3H4v1h1zm7 1v-1h-1v1zm-7 1H4v1h1zm7 1v-1h-1v1zm-8 1v1h1v-1zm7 1h1v-1h-1z" />
                                </svg>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex flex-col gap-y-1">
                                <p class=" font-medium">
                                    Total Order Deposit
                                </p>
                                <p class="light-dark-text lg:text-base font-semibold">
                                    Rp. {{ number_format($total_keseluruhan_deposit, '0', '.', ',') }}
                                </p>
                            </div>
                            <div class="text-sm mt-2">
                                <p>
                                    Dengan total {{ $banyak_keseluruhan_deposit }}x pemesanan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="light-dark-text text-xl lg:text-2xl font-semibold">Keuntungan Keseluruhan</div>

            <div class="bg-sidebar p-5 flex gap-x-6 rounded-xl h-24 w-full">
                <div id="icon-total-order-all">
                    <div class="bg-violet-400 text-white px-2 py-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015" />
                        </svg>
                    </div>
                </div>
                <div class="">
                    <div class="flex flex-col gap-y-1">
                        <p class=" font-medium">
                            Keuntungan Bersih Keseluruhan
                        </p>
                        <p class="light-dark-text lg:text-base font-semibold">
                            Rp. {{ number_format($keuntungan_bersih, '0', '.', ',') }}
                        </p>
                    </div>
                    {{-- <div class="text-sm mt-2">
                        <p>
                            Dengan total {{ $banyak_keseluruhan_pembelian }}x pemesanan
                        </p>
                    </div> --}}
                </div>
            </div>

            <div class="bg-sidebar p-5 rounded-xl">
                <p class="light-dark-text lg:text-lg">Grafik Pesanan 7 Hari Terakhir</p>
            </div>

        </div>
    </div>
@endsection
