@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li><a href="{{ route('dashboard') }}"
                        class="{{ request()->is('pesanan/manual') ? 'text-purple-400' : '' }}">Dashboard</a></li>
                <li>Pesanan Manual</li>
            </ul>
        </div>
        <div>
            <div id="tambah-pesanan-manual">
                <div class="bg-sidebar-admin shadow-sm rounded-lg p-6">
                    <p class="light-dark-text lg:text-2xl text-xl font-semibold">
                        Buat Pesanan Manual
                    </p>
                    <div class="mt-8">
                        <form action="{{ route('order-manual.post') }}" method="POST" id="form-pesanan-manual">
                            @csrf
                            <div class="flex flex-col gap-y-4">
                                <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                    <label for="uid" class="col-span-2">User ID</label>
                                    <div class="col-span-8">
                                        <input type="text" name="uid" id="uid" value="{{ old('uid') }}"
                                            class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('uid') border-red-500 @enderror">
                                        @error('uid')
                                            <div class="text-error-input text-red-500 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                    <label for="zone" class="col-span-2">Server ID</label>
                                    <div class="col-span-8">
                                        <input type="text" name="zone" id="zone" value="{{ old('zone') }}"
                                            class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full">
                                    </div>
                                </div>
                                <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                    <label for="kategori" class="col-span-2">Kategori</label>
                                    <div class="col-span-8">
                                        <select name="kategori" id="kategori"
                                            class="bg-input-form-admin select select-bordered w-full">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach ($kategori as $ktg)
                                                <option value="{{ $ktg->id }}">{{ $ktg->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                    <label for="layanan" class="col-span-2">Layanan</label>
                                    <div class="col-span-8">
                                        <select name="layanan" id="layanan"
                                            class="bg-input-form-admin select select-bordered w-full @error('layanan') select-error @enderror">

                                        </select>
                                        @error('layanan')
                                            <div class="text-error-input text-red-500 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end mt-6 gap-x-2">
                                <button type="submit"
                                    class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                    Simpan
                                </button>
                                <button id="btn-reset-tmember" type="reset"
                                    class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="semua-order-manual">
                <div id="tabel-semua-order-manual"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Pesanan Manual</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Pesanan Manual..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semua-order-manual">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        OID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        UID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Nickname</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Layanan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Harga</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        PID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Status</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Log</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Pembayaran</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Metode</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($data->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="12" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data pesanan manual!</td>
                                    </tr>
                                @else
                                    <?php $no = 1; ?>
                                    @foreach ($data as $data_pesanan)
                                        <tr id="tr-tbl-sp" data-nama="{{ $data_pesanan->nickname }}" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $no }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                {{ $data_pesanan->order_id }}
                                            <td class="p-4 align-middle name">
                                                {{ $data_pesanan->user_id }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_pesanan->zone != null ? '(' . $data_pesanan->zone . ')' : '' }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_pesanan->nickname == null ? '-' : $data_pesanan->nickname }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_pesanan->layanan }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($data_pesanan->harga, 0, '.', ',') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_pesanan->provider_order_id == null ? '-' : $data_pesanan->provider_order_id }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_pesanan->status }}
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
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <dialog id="my_modal_edit_payment" class="modal">
                        <div class="modal-box w-8/12 max-w-5xl overflow-y-auto modal-form-admin">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="flex gap-x-2">
                                <h3 class="lg:text-xl text-lg font-semibold">Edit Payment</h3>
                                <h3 id="nama-payment" class="lg:text-xl text-lg font-semibold"></h3>
                            </div>
                            <div id="form-edit-payment">

                            </div>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#kategori').change(function() {
            const data = $(this).val();
            $.ajax({
                url: "{{ url('/pesanan/manual/ajax/layanan') }}",
                method: "POST",
                data: {
                    data: data,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    $('#layanan').empty();
                    $('#layanan').append(res);
                }
            });
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semua-order-manual tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.name');
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
