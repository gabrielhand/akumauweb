@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kategori') }}'"
                    class="{{ request()->is('subkategori') ? 'text-purple-400 cursor-pointer' : '' }}">Produk</li>
                <li>Sub Kategori</li>
            </ul>
        </div>
        <div>
            <div class="flex flex-col gap-y-8">
                <div id="form-tambah-sub-kategori">
                    <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text shadow-sm">
                        <p class="lg:text-2xl text-xl font-medium">Tambah Sub Kategori</p>
                        <div class="mt-8">
                            <form action="{{ route('subkategori.post') }}" method="POST">
                                @csrf
                                <div class="flex flex-col gap-y-4">
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="kategori" class="col-span-2">Kategori</label>
                                        <div class="col-span-8">
                                            <select name="kategori" id="kategori"
                                                class="bg-input-form-admin select select-bordered w-full">
                                                @foreach ($categories as $kategori)
                                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="code" class="col-span-2">Kode</label>
                                        <div class="col-span-8">
                                            <input type="text" name="code" id="code" value="{{ old('code') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('code') border-red-500 @enderror">
                                            @error('code')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="nama" class="col-span-2">Nama</label>
                                        <div class="col-span-8">
                                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('nama') border-red-500 @enderror">
                                            @error('nama')
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
                                    <button id="btn-reset-sub-kategori" type="reset"
                                        class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="semua-sub-kategori">
                    <div id="tabel-semuasubkategori"
                        class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                        <div>
                            <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Sub Kategori</p>
                            <div class="px-4 my-2">
                                <input type="text" name="" id="searchInput" placeholder="Cari Data Sub Kategori..."
                                    class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                            </div>
                        </div>
                        <div class="relative overflow-x-auto overflow-y-hidden tbl-semuasubkategori">
                            <table class="w-full text-sm">
                                <thead class="">
                                    <tr class="border-b border-none">
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            No</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            ID</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            Kategori</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            Nama</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            Kode</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            Status</th>
                                        <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @if ($sub->isEmpty())
                                        <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                            <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">
                                                Maaf,
                                                belum
                                                tersedia data sub kategori!</td>
                                        </tr>
                                    @else
                                        <?php $no = 1; ?>
                                        @foreach ($sub as $data)
                                            <tr id="tr-tbl-sp" data-tipe="{{ $data->tipe }}" class="border-tbl-riwayat">
                                                <td class="p-4 align-middle font-medium">
                                                    {{ $no }}
                                                </td>
                                                <td class="p-4 align-middle font-medium">
                                                    {{ $data->id }}
                                                <td class="p-4 align-middle">
                                                    {{ $data->kategori }}
                                                </td>
                                                <td class="p-4 align-middle name">
                                                    {{ $data->name }}
                                                </td>
                                                <td class="p-4 align-middle">
                                                    {{ $data->code }}
                                                </td>
                                                <td class="p-4 align-middle">
                                                    {{ $data->active }}
                                                </td>
                                                <td class="p-4 align-middle">
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='{{ route('subkategori.delete', [$data->id]) }}'">
                                                        Hapus
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
            let rows = document.querySelectorAll('#tabel-semuasubkategori tbody tr');

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
