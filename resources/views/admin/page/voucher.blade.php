@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kategori') }}'"
                    class="{{ request()->is('voucher') ? 'text-purple-400 cursor-pointer' : '' }}">Produk</li>
                <li>Voucher</li>
            </ul>
        </div>
        <div class="flex flex-col gap-y-8">
            <div id="form-tambah-voucher" class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                <p class="lg:text-2xl text-xl font-medium">Tambah Voucher</p>
                <div class="mt-12">
                    <form action="{{ route('voucher.post') }}" method="POST">
                        @csrf
                        <div class="flex flex-col gap-y-4">
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="kode" class="col-span-2">Kode</label>
                                <div class="col-span-8">
                                    <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('kode') border-red-500 @enderror">
                                    @error('kode')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="promo" class="col-span-2">Persenan Promo</label>
                                <div class="col-span-8">
                                    <input type="number" name="promo" id="promo" value="{{ old('promo') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('promo') border-red-500 @enderror">
                                    @error('promo')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="stock" class="col-span-2">Stock</label>
                                <div class="col-span-8">
                                    <input type="number" name="stock" id="stock" value="{{ old('stock') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('stock') border-red-500 @enderror">
                                    @error('stock')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="max_potongan" class="col-span-2">Max Potongan</label>
                                <div class="col-span-8">
                                    <input type="number" name="max_potongan" id="max_potongan"
                                        value="{{ old('max_potongan') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('max_potongan') border-red-500 @enderror">
                                    @error('max_potongan')
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
                                Simpan Layanan
                            </button>
                            <button id="btn-reset-tvoucher" type="reset"
                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="semua-vocuher">
                <div id="tabel-semuavoucher"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Voucher</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Voucher..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semuavoucher">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        ID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Kode</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Potongan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Kuota</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Max Potongan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($vouchers->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data voucher!</td>
                                    </tr>
                                @else
                                    <?php $no = 1; ?>
                                    @foreach ($vouchers as $data)
                                        <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $no }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                {{ $data->id }}
                                            <td class="p-4 align-middle kode">
                                                {{ $data->kode }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->promo }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->stock }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->max_potongan }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex gap-x-2 items-center">
                                                    <div class="btn btn-warning btn-sm"
                                                        onclick="showEditVoucherModal('{{ $data->kode }}', '{{ route('voucher.detail', [$data->id]) }}')">
                                                        Edit
                                                    </div>
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='{{ route('voucher.delete', [$data->id]) }}'">
                                                        Hapus
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->created_at }}
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <dialog id="my_modal_edit_voucher" class="modal">
                        <div class="modal-box overflow-y-auto modal-form-admin">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="flex gap-x-2">
                                <h3 class="lg:text-xl text-lg font-semibold">Edit Voucher</h3>
                                <h3 id="kode-voucher" class="lg:text-xl text-lg font-semibold"></h3>
                            </div>
                            <div id="form-edit-voucher">

                            </div>
                        </div>
                    </dialog>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showEditVoucherModal(kode, link) {
            var modal = document.getElementById('my_modal_edit_voucher');

            $.ajax({
                type: "GET",
                url: link,
                beforeSend: function() {
                    $('#kode-voucher').html(kode);
                    $('#form-edit-voucher').html('Loading...');
                },
                success: function(result) {
                    $('#kode-voucher').html(kode);
                    $('#form-edit-voucher').html(result);

                    let inputs = document.querySelectorAll('.validate-input');
                    inputs.forEach(input => {
                        input.addEventListener('input', validateForm);
                    });

                    function validateForm() {
                        let submitButton = document.getElementById('edit-button');
                        let allFilled = true;

                        inputs.forEach(input => {
                            if (input.value.trim() === '') {
                                allFilled = false;
                            }
                        });

                        if (allFilled) {
                            submitButton.classList.remove('disabled:opacity-50');
                            submitButton.disabled = false;
                        } else {
                            submitButton.classList.add('disabled:opacity-50');
                            submitButton.disabled = true;
                        }
                    }

                    validateForm();
                },
                error: function() {
                    $('#kode-voucher').html(kode);
                    $('#form-edit-voucher').html('There is an error...');
                }
            });
            modal.showModal();
        }

        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuavoucher tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.kode');
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
