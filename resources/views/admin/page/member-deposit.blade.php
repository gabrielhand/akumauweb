@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('user.deposit') }}'"
                    class="{{ request()->is('user-deposit') ? 'text-purple-400 cursor-pointer' : '' }}">Member</li>
                <li>Member Deposit</li>
            </ul>
        </div>
        <div>
            <div id="tabel-semuadeposit" class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                <div>
                    <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Riwayat Deposit</p>
                    <div class="px-4 my-2">
                        <input type="text" name="" id="searchInput" placeholder="Cari riwayat deposit..."
                            class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                    </div>
                </div>
                <div class="relative overflow-x-auto overflow-y-hidden tbl-semuadeposit">
                    <table class="w-full text-sm">
                        <thead class="">
                            <tr class="border-b border-none">
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    ID</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Username</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Jumlah</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Metode</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    No Pembayaran</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Status</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Tanggal</th>
                                <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @if ($data->isEmpty())
                                <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                    <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf, belum
                                        tersedia data riwayat deposit!</td>
                                </tr>
                            @else
                                @foreach ($data as $data_pesanan)
                                    <tr id="tr-tbl-srd" data-status="{{ $data_pesanan->status }}"
                                        class="border-tbl-riwayat-deposit">
                                        <td class="p-4 align-middle font-medium">
                                            {{ $data_pesanan->id }}
                                        </td>
                                        <td class="p-4 align-middle username">
                                            {{ $data_pesanan->username }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            Rp. {{ number_format($data_pesanan->jumlah, 0, '.', ',') }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $data_pesanan->metode }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {!! $data_pesanan->metode != 'QRIS'
                                                ? $data_pesanan->no_pembayaran
                                                : '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Lihat QR</button>' !!}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $data_pesanan->status }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            {{ $data_pesanan->created_at }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            <div class="btn btn-info btn-sm"
                                                onclick="window.location.href='{{ route('confirm.deposit', [$data_pesanan->id, 'Success']) }}'">
                                                Konfirmasi
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
            let rows = document.querySelectorAll('#tabel-semuadeposit tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.username');
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
