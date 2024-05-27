@extends('layout.main')

@section('content')
    <section id="header-pencarian" class="md:px-6 px-4 pt-8 relative">
        <div class="relative">
            <div class="absolute inset-0 max-h-[12rem] overflow-hidden rounded-lg">
                <div class="relative h-full w-full">
                    <figure><img alt="invoice_bg_2" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover rounded-lg" sizes="(max-width: 768px) 100vw, 100px"
                            src="/assets/thumbnail/headercari.webp"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="absolute inset-0 bg-black/30 mix-blend-multiply rounded-lg" aria-hidden="true"></div>
                    <div
                        class="absolute left-0 top-0 w-full h-full flex flex-col items-start px-8 justify-center z-10 gap-4">
                        <h1 class="text-xl md:text-2xl font-bold text-center text-white">Cari Transaksi</h1>
                        <p class="text-xs md:text-sm text-white w-full md:w-1/2">Transaksimu akan otomatis diproses, umumnya
                            akan selesai dalam 10-30 menit namun jika kamu mengalami masalah silahkan cari transaksimu
                            disini.</p>
                        <div class="w-full md:w-1/2">
                            <div class="flex flex-col w-full">
                                <form action="/cari" method="post">
                                    @csrf
                                    <div class="relative flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="w-7 h-7 absolute ml-3 left-0 pointer-events-none  text-gray-600 rounded-full p-1">
                                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1">
                                            </rect>
                                            <path
                                                d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                            </path>
                                            <path d="M12 11h4"></path>
                                            <path d="M12 16h4"></path>
                                            <path d="M8 11h.01"></path>
                                            <path d="M8 16h.01"></path>
                                        </svg>
                                        <input autocomplete="off" autosave="false" type="text"
                                            class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-12 rounded-full bg-white pr-28"
                                            placeholder="Cari dengan nomor invoice" name="invoice" fdprocessedid="0sk7dk">
                                        <button type="submit"
                                            class="justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-7 absolute mr-2 right-0 p-0 bg-purple-500 hover:bg-purple-600 rounded-full text-white px-4 items-center flex gap-2"
                                            fdprocessedid="agk2g">Cari
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="text-white rounded-full p-1">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mx-auto max-w-7xl h-24 px-4 py-24"></div>
        </div>
    </section>
    <section id="invoice" class="md:px-6 px-4 flex flex-col gap-6">
        <div class="justify-between flex items-center">
            <p class="text-sm italic font-medium">Menampilkan 10 Transaksi terbaru</p>
        </div>
        <div class="border text-black shadow-sm p-2 rounded-xl border-none bg-slate-200">
            <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                    <thead class="[&amp;_tr]:border-b">
                        <tr class="border-b transition-colors hover:bg-slate-100 border-none">
                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-slate-500">
                                Invoice</th>
                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-slate-500">
                                Layanan</th>
                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-slate-500">
                                Harga</th>
                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-slate-500">
                                Tanggal</th>
                            <th
                                class="h-12 px-4 text-left align-middle font-medium text-slate-500">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody class="[&amp;_tr:last-child]:border-0">
                        @foreach ($pembelians as $pembelian)
                            <tr class="border-b transition-colors hover:bg-slate-100">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium">
                                    {{ substr($pembelian->order_id, 0, 12) }}****</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">{{ $pembelian->layanan }}
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">{{ $pembelian->harga }}</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">{{ $pembelian->created_at }}
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                    <div
                                        class="bg-{{ getStatusBadgeColor($pembelian->status) }} inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm">
                                        {{ $pembelian->status }}</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        @php
            function getStatusBadgeColor($status)
            {
                switch ($status) {
                    case 'Batal':
                        return 'red-500';
                    case 'Pending':
                        return 'yellow-500';
                    case 'Success':
                        return 'green-500';
                    default:
                        return 'blue-500';
                }
            }
        @endphp
    </script>
@endsection
