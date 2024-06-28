@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('berita') }}'"
                    class="{{ request()->is('method') ? 'text-purple-400 cursor-pointer' : '' }}">Konfigurasi</li>
                <li>Payment</li>
            </ul>
        </div>
        <div>
            <div id="tambah-payment">
                <div class="">
                    <div class="bg-sidebar-admin shadow-sm rounded-lg p-6">
                        <p class="light-dark-text lg:text-2xl text-xl font-semibold">
                            Tambah Payment
                        </p>
                        <form action="{{ route('setting-web.post') }}" method="POST" id="form-payment"
                            enctype="multipart/form-data">
                            @csrf
                            <div
                                class="grid lg:grid-cols-6 lg:grid-rows-3 md:grid-cols-6 md:grid-rows-3 items-center gap-x-6 gap-y-3 light-dark-text mt-6">
                                <label class="col-span-1">Nama</label>
                                <div class="col-span-5">
                                    <div>
                                        <input type="text" name="name" value="{{ old('name') }}" id="name"
                                            class="bg-input-form-admin border w-full light-dark-text rounded-lg px-3 py-2.5 @error('name') border-red-500 @enderror" />
                                        @error('name')
                                            <div class="text-error-input text-red-500 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <label class="col-span-1">Kode</label>
                                <div class="col-span-5">
                                    <input type="text" name="code" id="code" value="{{ old('code') }}"
                                        class="bg-input-form-admin border px-3 py-2.5 rounded-lg w-full light-dark-text @error('code') border-red-500 @enderror" />
                                    @error('code')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-span-1">Keterangan</label>
                                <div class="col-span-5">
                                    <input type="text" name="keterangan" id="keterangan" value="{{ old('keterangan') }}"
                                        class="bg-input-form-admin border px-3 py-2.5 rounded-lg w-full light-dark-text @error('keterangan') border-red-500 @enderror"></input>
                                    @error('keterangan')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-span-1">Tipe</label>
                                <div class="col-span-5">
                                    <select name="tipe" id="tipe"
                                        class="bg-input-form-admin select select-bordered w-full @error('tipe') select-error @enderror">
                                        <option value="e-walet">E-Wallet</option>
                                        <option value="tfbank">Transfer Bank</option>
                                        <option value="convenience-store">Convenience Store</option>
                                    </select>
                                    @error('tipe')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-span-1">Pilih Gambar</label>
                                <div class="col-span-5">
                                    <input type="file" name="images" id="images" accept="image/*"
                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text @error('images') file-input-error @enderror" />
                                    @error('images')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
            <div id="semua-payment">
                <div id="tabel-semuapayment"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Payment</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Payment..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semuapayment">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        ID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Nama</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Kode</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Keterangan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tipe</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Images</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($data->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data payment method!</td>
                                    </tr>
                                @else
                                    <?php $no = 1; ?>
                                    @foreach ($data as $payment)
                                        <tr id="tr-tbl-sp" data-tipe="{{ $payment->tipe }}" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $no }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                {{ $payment->id }}
                                            <td class="p-4 align-middle name">
                                                {{ $payment->name }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $payment->code }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $payment->keterangan }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $payment->tipe }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                <img width="150"src="{{ asset($payment->images) }}"
                                                    alt="{{ $payment->name }}">
                                            <td class="p-4 align-middle">
                                                {{ $payment->created_at }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex gap-x-2 items-center">
                                                    <div class="btn btn-warning btn-sm"
                                                        onclick="showEditPaymentModal('{{ $payment->nama }}', '{{ route('method.detail', [$payment->id]) }}')">
                                                        Edit
                                                    </div>
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='{{ route('method.delete', [$payment->id]) }}'">
                                                        Hapus
                                                    </div>
                                                </div>
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
                <div class="my-4 me-4 flex justify-end">
                    {{ $data->links('vendor.pagination.customriwayat') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function showEditPaymentModal(payment, link) {
            var modal = document.getElementById('my_modal_edit_payment');

            $.ajax({
                type: "GET",
                url: link,
                beforeSend: function() {
                    $('#nama-payment').html(payment);
                    $('#form-edit-payment').html('Loading...');
                },
                success: function(result) {
                    $('#nama-payment').html(payment);
                    $('#form-edit-payment').html(result);

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
                    $('#nama-payment').html(payment);
                    $('#form-edit-payment').html('There is an error...');
                }
            });
            modal.showModal();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input, select');

            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    const errorDiv = this.parentElement.querySelector('.text-error-input');
                    if (errorDiv) {
                        errorDiv.style.display = 'none';
                    }

                    this.classList.add('border-input-form-admin');
                    this.classList.remove('file-input-error');
                });
            });
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuapayment tbody tr');

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
