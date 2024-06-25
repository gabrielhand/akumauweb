@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('pesanan') }}'"
                    class="{{ request()->is('pesanan') ? 'text-purple-400 cursor-pointer' : '' }}">Pesanan</li>
                <li>Data Joki</li>
            </ul>
        </div>
        <div>
            <div id="tabel-semuap" class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                <div>
                    <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Pesanan</p>
                    <div class="px-4 my-2">
                        <input type="text" name="" id="searchInput" placeholder="Cari Pesanan..."
                            class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                    </div>
                </div>
                <div class="relative overflow-x-auto overflow-y-hidden tbl-semuap">
                    <table class="w-full text-sm">
                        <thead class="">
                            <tr class="border-b border-none">
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    No</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    OID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    UID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Nickname</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Layanan</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Harga</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    PID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Status</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Log</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Pembayaran</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Metode</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Tanggal</th>
                                <th class="h-12 px-4 text-left align-middle font-medium">
                                    Username</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($data as $data_pesanan)
                                <tr id="tr-tbl-sp" data-status="{{ $data_pesanan->status }}" class="border-tbl-riwayat">
                                    <td class="p-4 align-middle">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="p-4 align-middle font-medium order-id">
                                        {{ $data_pesanan->order_id }}</td>
                                    <td class="p-4 align-middle">{{ $data_pesanan->user_id }}
                                        {{ $data_pesanan->zone != null ? '(' . $data_pesanan->zone . ')' : '' }}</td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->nickname }}
                                    </td>
                                    <td class="p-4 align-middle">{{ $data_pesanan->layanan }}
                                    </td>
                                    <td class="p-4 align-middle">Rp
                                        {{ number_format($data_pesanan->harga, 0, '.', ',') }},-</td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->provider_order_id == null ? '-' : $data_pesanan->provider_order_id }}
                                    </td>
                                    <td class="p-4 align-middle">
                                        <div class="dropdown">
                                            @if ($data_pesanan->status === 'Success')
                                                <div tabindex="0" role="button"
                                                    class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-green-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-green-500 duration-300">
                                                    <p>{{ $data_pesanan->status }}</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-caret-down-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                    </svg>
                                                </div>
                                            @elseif($data_pesanan->status === 'Batal')
                                                <div tabindex="0" role="button"
                                                    class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-red-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-red-500">
                                                    <p>{{ $data_pesanan->status }}</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-caret-down-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                    </svg>
                                                </div>
                                            @elseif($data_pesanan->status === 'Pending')
                                                <div tabindex="0" role="button"
                                                    class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-white border-transparent hover:bg-orange-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-orange-500">
                                                    <p>{{ $data_pesanan->status }}</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        fill="currentColor" class="bi bi-caret-down-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                    </svg>
                                                </div>
                                            @endif
                                            <ul tabindex="0"
                                                class="dropdown-content space-y-1 mt-2 z-[1] p-2 shadow bg-sidebar rounded-lg w-52 ">
                                                <li>
                                                    <div tabindex="0" role="button"
                                                        onclick="window.location.href='/order-status/{{ $data_pesanan->order_id }}/Success'"
                                                        class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                        Success
                                                    </div>
                                                </li>
                                                <li>
                                                    <div tabindex="0" role="button"
                                                        onclick="window.location.href='/order-status/{{ $data_pesanan->order_id }}/Batal'"
                                                        class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                        Batal
                                                    </div>
                                                </li>
                                                <li>
                                                    <div tabindex="0" role="button"
                                                        onclick="window.location.href='/order-status/{{ $data_pesanan->order_id }}/Pending'"
                                                        class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                        Pending
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->log }}
                                    </td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->status_pembayaran }}
                                    </td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->metode }}
                                    </td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->created_at }}
                                    </td>
                                    <td class="p-4 align-middle">
                                        {{ $data_pesanan->username }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="my-4 me-4 flex justify-end">
                    {{ $data->links('vendor.pagination.customriwayat') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuap tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.order-id');
                if (orderIdCell) {
                    let orderIdText = orderIdCell.textContent || orderIdCell.innerText;
                    if (orderIdText.toUpperCase().indexOf(filter) > -1) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        });
    </script>
@endsection
