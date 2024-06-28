@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('berita') }}'"
                    class="{{ request()->is('berita') ? 'text-purple-400 cursor-pointer' : '' }}">Konfigurasi</li>
                <li>Slider</li>
            </ul>
        </div>
        <div>
            <div id="tambah-slider">
                <div class="">
                    <div class="bg-sidebar-admin shadow-sm rounded-lg p-6">
                        <form action="{{ route('berita.post') }}" method="POST" enctype="multipart/form-data" id="berita">
                            @csrf
                            <p class="light-dark-text lg:text-2xl text-xl font-semibold">
                                Tambah Slider
                            </p>
                            <div class="grid grid-cols-6 grid-rows-3 items-center gap-x-6 gap-y-2 light-dark-text mt-6">
                                <label class="col-span-1">Pilih Gambar <span class="text-error">*</span></label>
                                <div class="col-span-5">
                                    <input type="file" name="image"
                                        class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text @error('image') file-input-error @enderror" />
                                    @error('image')
                                        <div class="text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-span-1">Dekripsi <span class="text-error">*</span></label>
                                <div class="col-span-5">
                                    <textarea name="deskripsi" id="deskripsi"
                                        class="bg-input-form-admin textarea textarea-bordered w-full light-dark-text textarea-form-admin @error('deskripsi') border-red-500 @enderror"></textarea>
                                    @error('deskripsi')
                                        <div class="text-red-500">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <label class="col-span-1">Tipe <span class="text-error">*</span></label>
                                <div class="col-span-5">
                                    <select name="tipe" id="tipe"
                                        class="bg-input-form-admin select select-bordered w-full @error('tipe') border-red-500 @enderror">
                                        <option value="banner">Banner</option>
                                        <option value="popup">Popup</option>
                                        <option value="logoheader">Logo Header</option>
                                        <option value="logofooter">Logo Footer</option>
                                    </select>
                                    @error('tipe')
                                        <div class="text-red-500">
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
            <div id="semua-gambar">
                <div id="tabel-semuagambar"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Slider</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Slider..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semuagambar">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Gambar</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tipe</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Deskripsi</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($berita->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data slider!</td>
                                    </tr>
                                @else
                                    <?php $no = 1; ?>
                                    @foreach ($berita as $data)
                                        <tr id="tr-tbl-sp" data-tipe="{{ $data->tipe }}" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $no }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                <img width="150"src="{{ asset($data->path) }}"
                                                    alt="{{ $data->name }}">
                                            </td>
                                            <td class="p-4 align-middle tipe">
                                                {{ $data->tipe }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->deskripsi }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->created_at }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="btn btn-error btn-sm text-white"
                                                    onclick="window.location.href='/berita/hapus/{{ $data->id }}'">
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
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuagambar tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.tipe');
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
