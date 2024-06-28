@extends('layout.main')

@section('content')
    <section id="header-pencarian" class="md:px-6 px-4 pt-8 relative">
        <div class="relative">
            <div class="absolute inset-0 max-h-[12rem] overflow-hidden rounded-lg">
                <div class="relative h-full w-full">
                    <figure>
                        <img alt="invoice_bg_2" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover rounded-lg" sizes="(max-width: 768px) 100vw, 100px"
                            src="{{ $banner_services }}"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="absolute inset-0 bg-black/30 mix-blend-multiply rounded-lg" aria-hidden="true"></div>
                    <div
                        class="absolute left-0 top-0 w-full h-full flex flex-col items-start px-8 justify-center z-10 gap-4">
                        <h1 class="text-xl md:text-2xl font-bold text-center text-white">Daftar Layanan</h1>
                        <p class="text-xs md:text-sm text-white w-full md:w-[80%]">Kamu bisa menemukan daftar lengkap
                            harga dari semua produk yang kami tawarkan. Temukan produk favorit-mu dan lihatlah daftar
                            lengkap harganya.</p>
                    </div>
                </div>
            </div>
            <div class="relative mx-auto max-w-7xl h-16 px-4 py-16"></div>
        </div>
    </section>
    <section id="pilih-kategori" class="md:px-6 px-4">
        <div class="flex justify-between items-center">
            <h1 class="lg:text-xl md:text-lg sm:text-sm font-medium mb-5 light-dark-text">Pilih Kategori</h1>
            <div class="w-1/3">
                <p class="text-xs md:text-sm font-semibold mb-2"></p>
                <div class="relative w-full">
                    <button
                        class="mb-2 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 rounded-xl md:w-full bg-transparent light-dark-text border border-purple-500 focus:outline-purple-500 focus:outline-1"
                        id="btn-kategori" type="button" aria-haspopup="listbox" aria-expanded="false">
                        <span class="block truncate">Pilih Kategori</span>
                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                <path fill-rule="evenodd"
                                    d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"></path>
                            </svg></span></button>
                    <ul
                        class="menu-kategori hidden absolute z-10 w-full bg-gray-100 border border-purple-500 text-black rounded-lg h-60 overflow-y-auto">
                        @foreach ($kategoriNames as $index => $kategoriName)
                            <li data-kategori="{{ $kategoriName }}"
                                class="flex justify-between ps-4 pe-3 py-2 group hover:bg-purple-500 text-xs lg:text-sm md:text-sm {{ $index == 0 ? 'hover:rounded-tl-md' : '' }} {{ $index == count($kategoriNames) - 1 ? 'hover:rounded-bl-md' : '' }}">
                                <a class="group-hover:text-white">{{ $kategoriName }}</a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-check2 hidden text-purple-600 group-hover:text-white" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="md:px-6 px-4">
        <div class="flex flex-col-reverse justify-between md:flex-row">
            <div dir="ltr" class="relative overflow-hidden w-full whitespace-nowrap" orientation="horizontal"
                style="position: relative;">
                <style>
                    [data-radix-scroll-area-viewport] {
                        scrollbar-width: none;
                        -ms-overflow-style: none;
                        -webkit-overflow-scrolling: touch;
                    }

                    [data-radix-scroll-area-viewport]::-webkit-scrollbar {
                        display: none
                    }
                </style>
                <div class="no-scrollbar h-full w-full rounded-[inherit]" style="overflow: scroll;">
                    <div style="min-width: 100%; display: table;">

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="md:px-6 px-4">
        <div class="splide is-overflow is-initialized splide--slide splide--ltr splide--draggable is-active" id="splide02"
            role="region" style="padding: 0px;">
            <div class="flex flex-col gap-y-6">
                <div class="flex w-max space-x-4 pb-4">
                    @foreach ($tipes as $tipe)
                        <button data-tipe="{{ $tipe->id }}" id="{{ $tipe->name }}-tab"
                            class="tipe-tab inline-flex brightness-50 light-dark-text items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-90 h-10 py-2 rounded-full bg-transparent border hover:bg-transparent px-6 whitespace-nowrap shrink-0">{{ $tipe->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden">
            <div class="py-4" id="scroll-container">
                <div class="relative flex gap-x-2 py-1 h-auto whitespace-nowrap overflow-x-auto no-scrollbar">
                    @foreach ($allKategori as $kat)
                        <div data-tipe="{{ $kat->tipe_id }}" data-kategori="{{ $kat->nama }}"
                            class="slider-kategori cursor-pointer flex flex-col items-center flex-none rounded-xl border border-1 border-primary shadow-sm overflow-hidden shrink-0 w-[110px] h-[160px] md:w-[120px] md:h-[180px] lg:w-[116.25px] lg:h-[170px]">
                            <div class="relative w-full h-full">
                                <div class="overflow-hidden rounded-xl">
                                    <div class="relative w-full h-full">
                                        <div class="overflow-hidden rounded-xl">
                                            <div
                                                class="relative w-full h-full flex flex-col justify-between items-center p-2">
                                                <div class="flex flex-col items-center mb-4">
                                                    <figure class="h-[30px] lg:h-[40px] mb-2"><img alt="Logo"
                                                            loading="lazy" decoding="async" data-nimg="fill"
                                                            class="object-cover object-center h-[30px] lg:h-[40px]"
                                                            src="{{ $kat->logo_header }}" style="color: transparent;">
                                                    </figure>
                                                </div>
                                                <div class="w-full flex flex-col items-center">
                                                    <p
                                                        class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                        {{ $kat->nama }}</p>
                                                    <p
                                                        class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                        {{ $kat->sub_nama }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="h-full w-full"><img alt="MLBB Via Login" loading="lazy" decoding="async"
                                        data-nimg="fill"
                                        class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                        sizes="(max-width: 768px) 100vw, 100px"
                                        srcset="{{ url('') }}{{ $kat->thumbnail }}" src="{{ $kat->thumbnail }}"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Table Component -->
        <div id="table-layanan" class="mt-4">
            <div class="border shadow-sm p-2 rounded-xl border-none bg-sidebar-menu">
                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="">
                            <tr class="transition-colors hover-tbl-layanan border-none">
                                <th class="h-12 px-4 text-left align-middle font-medium">PID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">KATEGORI</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">LAYANAN</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">HARGA</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">STATUS</th>
                            </tr>
                        </thead>
                        <tbody id="list-layanan" class="">
                            @foreach ($allKategori as $kat)
                                @if ($kat->layanan->isEmpty())
                                    <tr class="hover-tbl-layanan border-tbl-layanan transition-colors light-dark-text p-5">
                                        <td class="light-dark-text text-center">-</td>
                                        <td class="px-4 py-6 text-start light-dark-text">{{ $kat->nama }}</td>
                                        <td colspan="3" class="px-4 py-6 text-start light-dark-text">Whoops, maaf belum
                                            ada layanan untuk kategori ini!</td>
                                    </tr>
                                @else
                                    @foreach ($kat->layanan as $layanan)
                                        <tr data-kategori="{{ $kat->nama }}"
                                            class="hover-tbl-layanan border-tbl-layanan transition-colors light-dark-text p-5">
                                            <td class="px-4 py-6 align-middle font-medium">{{ $layanan->provider_id }}
                                            </td>
                                            <td class="px-4 py-6 align-middle">{{ $kat->nama }}</td>
                                            <td class="px-4 py-6 align-middle">{{ $layanan->layanan }}</td>
                                            <td class="px-4 py-6 align-middle">Rp {{ $layanan->harga_reseller }}, -</td>
                                            <td>
                                                <div
                                                    class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm whitespace-nowrap bg-green-500">
                                                    {{ $layanan->status }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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

            .hover-tbl-layanan:hover {
                background-color: var(--hover-tbl);
            }

            .border-tbl-layanan {
                border-bottom: 1.5px solid var(--hover-tbl);
            }
        </style>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const slider = document.getElementById('scroll-container');
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                slider.classList.add('active');
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });

            slider.addEventListener('mouseleave', () => {
                isDown = false;
                slider.classList.remove('active');
            });

            slider.addEventListener('mouseup', () => {
                isDown = false;
                slider.classList.remove('active');
            });

            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 2;
                slider.scrollLeft = scrollLeft - walk;
            });

            const kategoriItems = document.querySelectorAll('.slider-kategori, .menu-kategori li');
            const tableSection = document.getElementById('table-layanan');

            const tabs = document.querySelectorAll('.tipe-tab');
            const sliderKategoriItems = document.querySelectorAll('.slider-kategori');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const selectedTipeId = this.getAttribute('data-tipe');

                    tabs.forEach(t => {
                        t.classList.remove('brightness-90');
                        t.classList.add('brightness-50');
                    });

                    this.classList.add('brightness-90');
                    this.classList.remove('brightness-50')

                    sliderKategoriItems.forEach(item => {
                        if (item.getAttribute('data-tipe') === selectedTipeId) {
                            item.style.display = 'block';

                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            kategoriItems.forEach((item) => {
                item.addEventListener('click', () => {

                    const selectedCategory = item.getAttribute('data-kategori');

                    // Highlight kategori terpilih
                    kategoriItems.forEach(i => {
                        i.classList.remove('border-blue-500', 'font-semibold');
                        const checkmark = i.querySelector('.bi-check2');
                        if (checkmark) checkmark.classList.add('hidden');
                    });
                    item.classList.add('border-blue-500', 'font-semibold');
                    const checkmark = item.querySelector('.bi-check2');
                    if (checkmark) checkmark.classList.remove('hidden');

                    // Update button text
                    const btnKategori = document.getElementById('btn-kategori');
                    if (btnKategori) {
                        btnKategori.querySelector('span').textContent = selectedCategory;
                    }

                    // Filter layanan
                    const layananRows = document.querySelectorAll('#list-layanan tr');
                    let hasLayanan = false;
                    layananRows.forEach(row => {
                        if (row.getAttribute('data-kategori') === selectedCategory) {
                            row.style.display = '';
                            hasLayanan = true;

                        } else {
                            row.style.display = 'none';
                        }
                    });

                    if (!hasLayanan) {
                        const noLayananRow = document.createElement('tr');
                        noLayananRow.classList.add('hover-tbl-layanan', 'border-tbl-layanan',
                            'transition-colors',
                            'light-dark-text', 'p-5');
                        noLayananRow.innerHTML = `
                        <td class="light-dark-text text-center h">-</td>
                        <td class="px-4 py-6 text-start light-dark-text">${selectedCategory}</td>
                        <td colspan="3" class="px-4 py-6 text-start light-dark-text">Whoops, maaf belum ada layanan untuk kategori ini!</td>
                    `;
                        document.querySelector('#list-layanan').appendChild(noLayananRow);
                    }

                    const menuKategoriList = document.querySelector('.menu-kategori');
                    if (menuKategoriList) {
                        menuKategoriList.classList.add('hidden');
                    }

                    const yOffset = -92;
                    const yPosition = tableSection.getBoundingClientRect().top + window
                        .pageYOffset + yOffset;
                    window.scrollTo({
                        top: yPosition,
                        behavior: 'smooth'
                    });
                });
            });

            const btnKategori = document.getElementById('btn-kategori');
            if (btnKategori) {
                btnKategori.addEventListener('click', () => {
                    const menuKategoriList = document.querySelector('.menu-kategori');
                    menuKategoriList.classList.toggle('hidden');
                });
            }
        });
    </script>
@endsection
