@extends('userlayout.main-user')

@section('user-content')
    <section id="order" class="lg:px-10 px-6 mt-6 mb-24 space-y-10">
        <div class="space-y-3">
            <h3 class="text-lg md:text-xl font-semibold">Status</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#3F6EE3]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_processing.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Processing</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#FA8097]">
                    <figure class="top-0">
                        <img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;">
                            <img alt="1" loading="lazy" width="60" height="60" decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_cancel.png&amp;w=3840&amp;q=75"
                                style="color: transparent;">
                        </figure>
                        <div>
                            <p class="font-bold">{{ $banyakPembelianBatal }}</p>
                            <p class="font-normal">Batal`</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#EF8B10]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;">
                            <img alt="1" loading="lazy" width="60" height="60" decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_pending.png&amp;w=3840&amp;q=75"
                                style="color: transparent;">
                        </figure>
                        <div>
                            <p class="font-bold">{{ $banyakPembelianPending }}</p>
                            <p class="font-normal">Pending</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#00BDB8]">
                    <figure class="top-0">
                        <img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;">
                            <img alt="1" loading="lazy" width="60" height="60" decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_success.png&amp;w=3840&amp;q=75"
                                style="color: transparent;">
                        </figure>
                        <div>
                            <p class="font-bold">{{ $banyakPembelianSuccess }}</p>
                            <p class="font-normal">Success</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#344054]">
                    <figure class="top-0">
                        <img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;">
                            <img alt="1" loading="lazy" width="60" height="60" decoding="async"
                                data-nimg="1" class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_not_paid.png&amp;w=3840&amp;q=75"
                                style="color: transparent;">
                        </figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Not Paid</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#21222e]">
                    <figure class="top-0">
                        <img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;">
                            <img alt="1" loading="lazy" width="60" height="60" decoding="async"
                                data-nimg="1" class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_error.png&amp;w=3840&amp;q=75"
                                style="color: transparent;">
                        </figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Error</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-3">
            <h3 class="text-lg md:text-xl font-semibold light-dark-text">Histori Pesanan</h3>
            <div class="flex flex-col md:flex-row justify-between gap-6">
                <div>
                    <div class="flex flex-col w-full">
                        <div class="relative flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-7 h-7 absolute ml-3 left-0 pointer-events-none text-gray-600 rounded-full p-1">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                            <input autocomplete="off" autosave="false" type="text"
                                class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-12 rounded-lg bg-white pr-28"
                                placeholder="Cari invoice">
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <p class="text-xs md:text-sm font-semibold mb-2"></p>
                    <div class="relative w-full">
                        <button
                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-purple-600 rounded-xl bg-transparent border border-purple-500 focus:outline-purple-500 focus:outline-1 md:w-36"
                            id="menu-bulan-btn" type="button">
                            <span id="span-bulan" class="block truncate light-dark-text">
                            </span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                    <path fill-rule="evenodd"
                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <ul
                            class="menu-bulan hidden border-purple-500 border absolute z-20 bg-slate-200 lg:text-sm text-xs text-black h-44 overflow-y-auto rounded-md w-full">
                            @foreach ($bulan as $bln)
                                <li id="li-bulan" class="px-3 py-2 hover:bg-purple-500 duration-300 hover:text-white"
                                    data-value="{{ $bln }}">{{ $bln }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <p class="text-xs md:text-sm font-semibold mb-2"> </p>
                    <div class="relative w-full">
                        <button
                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-purple-600 rounded-xl bg-transparent border border-purple-500 focus:outline-purple-500 focus:outline-1 md:w-36"
                            id="menu-status-btn" type="button">
                            <span id="span-status" class="block truncate light-dark-text">
                            </span>
                            <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 text-gray-400">
                                    <path fill-rule="evenodd"
                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd">
                                    </path>
                                </svg>
                            </span>
                        </button>
                        <ul
                            class="menu-status hidden border-purple-500 border absolute z-20 bg-slate-200 lg:text-sm text-xs text-black h-44 overflow-y-auto rounded-md w-full">
                            @foreach ($status as $sts)
                                <li id="li-status" class="px-3 py-2 hover:bg-purple-500 duration-300 hover:text-white"
                                    data-status="{{ $sts }}">{{ $sts }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @include('userlayout.tabel-rp')
        </div>
    </section>
    <style>
        :root {
            --hover-tbl-light: #f1f5f9;
            --hover-tbl-dark: rgb(59 7 100 / 0.5);
        }

        [data-theme="light"] {
            --hover-tbl: var(--hover-tbl-light);
        }

        [data-theme="dark"] {
            --hover-tbl: var(--hover-tbl-dark);
        }

        .hover-tbl-riwayat:hover {
            background-color: var(--hover-tbl);
        }

        .border-tbl-riwayat {
            border-top: 1.5px solid var(--hover-tbl);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBulanBtn = document.getElementById('menu-bulan-btn');
            const menuBulan = document.querySelector('.menu-bulan');
            const spanBulan = document.getElementById('span-bulan');

            menuBulanBtn.addEventListener('click', function() {
                menuBulan.classList.toggle('hidden');
            });

            menuBulan.querySelectorAll('li').forEach(function(item) {
                item.addEventListener('click', function() {
                    spanBulan.textContent = this.getAttribute('data-value');
                    menuBulan.classList.add('hidden');
                });
            });

            const menuStatusBtn = document.getElementById('menu-status-btn');
            const menuStatus = document.querySelector('.menu-status');
            const spanStatus = document.getElementById('span-status');
            const tableRows = document.querySelectorAll('#tabel-rp tbody tr');

            menuStatusBtn.addEventListener('click', function() {
                menuStatus.classList.toggle('hidden');
            });

            menuStatus.querySelectorAll('li').forEach(function(item) {
                item.addEventListener('click', function() {
                    const selectedStatus = this.getAttribute('data-status');
                    spanStatus.textContent = selectedStatus;
                    menuStatus.classList.add('hidden');

                    tableRows.forEach(function(row) {
                        if (selectedStatus === 'Semua' || row.getAttribute('data-status') ===
                            selectedStatus) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            });

            document.addEventListener('click', function(event) {
                if (!menuBulanBtn.contains(event.target) && !menuBulan.contains(event.target)) {
                    menuBulan.classList.add('hidden');
                }
                if (!menuStatusBtn.contains(event.target) && !menuStatus.contains(event.target)) {
                    menuStatus.classList.add('hidden');
                }
            });
        });
    </script>
@endsection
