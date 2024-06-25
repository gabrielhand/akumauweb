@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('pesanan') }}'"
                    class="{{ request()->is('data/giftskin') ? 'text-purple-400 cursor-pointer' : '' }}">Pesanan</li>
                <li>Data Gift Skin</li>
            </ul>
        </div>
        <div>
            <div id="tabel-semuagiftskin" class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                <div>
                    <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Pesanan Gift Skin</p>
                    <div class="px-4 my-2">
                        <input type="text" name="" id="searchInput" placeholder="Cari Data Gift Skin..."
                            class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                    </div>
                </div>
                <div class="relative overflow-x-auto overflow-y-hidden tbl-semuagiftskin">
                    <table class="w-full text-sm">
                        <thead class="">
                            <tr class="border-b border-none">
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    OID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Layanan</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    UID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Zone ID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Nickname</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Status Gift Skin</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @if ($data->isEmpty())
                                <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                    <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf, belum
                                        tersedia data gift skin!</td>
                                </tr>
                            @else
                                @foreach ($data as $datas)
                                    <tr id="tr-tbl-sp" data-status="{{ $datas->status }}" class="border-tbl-riwayat">
                                        <td class="p-4 align-middle font-medium order-id">
                                            {{ $datas->order_id }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $datas->layanan }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $datas->user_id }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $datas->zone }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $datas->nickname }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            <div class="dropdown">
                                                @if ($datas->status === 'Sukses')
                                                    <div tabindex="0" role="button"
                                                        class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-green-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-green-500 duration-300">
                                                        <p>{{ $datas->status }}</p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-caret-down-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                        </svg>
                                                    </div>
                                                @elseif($datas->status === 'Proses')
                                                    <div tabindex="0" role="button"
                                                        class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-white border-transparent hover:bg-orange-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-orange-500">
                                                        <p>{{ $datas->status }}</p>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" fill="currentColor" class="bi bi-caret-down-fill"
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
                                                            onclick="window.location.href='/giftskin-status/{{ $datas->order_id }}/Success'"
                                                            class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                            Sukses
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div tabindex="0" role="button"
                                                            onclick="window.location.href='/giftskin-status/{{ $datas->order_id }}/Proses'"
                                                            class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                            Proses
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="p-4 align-middle">
                                            <div class="btn btn-error"
                                                onclick="window.location.href='/giftskin/hapus/{{ $datas->id }}'">Hapus
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
            let rows = document.querySelectorAll('#tabel-semuagiftskin tbody tr');

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
