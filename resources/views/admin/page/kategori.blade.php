@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kategori') }}'"
                    class="{{ request()->is('kategori') ? 'text-purple-400 cursor-pointer' : '' }}">Produk</li>
                <li>Kategori</li>
            </ul>
        </div>
        <div>
            <div class="flex flex-col gap-y-8">
                <div id="form-konfigurasi-digiflazz">
                    <div class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text shadow-sm">
                        <p class="lg:text-2xl text-xl font-medium">Tambah Kategori</p>
                        <div class="mt-8">
                            <form action="{{ route('kategori.post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="flex flex-col gap-y-4">
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
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="sub_nama" class="col-span-2">Sub Nama</label>
                                        <div class="col-span-8">
                                            <input type="text" name="sub_nama" id="sub_nama"
                                                value="{{ old('sub_nama') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('sub_nama') border-red-500 @enderror">
                                            @error('sub_nama')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="brand" class="col-span-2">Brand</label>
                                        <div class="col-span-8">
                                            <input type="text" name="brand" id="brand" value="{{ old('brand') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('brand') border-red-500 @enderror">
                                            @error('brand')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="kode" class="col-span-2">Kode</label>
                                        <div class="col-span-8">
                                            <input type="text" name="kode" id="kode" value="{{ old('kode') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('kode') border-red-500 @enderror">
                                            @error('kode')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <label for="ket_layanan" class="col-span-2 mt-3">Deskripsi Layanan</label>
                                        <div class="col-span-8">
                                            <textarea name="ket_layanan" id="ket_layanan"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin @error('ket_layanan') border-red-500 @enderror">{{ old('ket_layanan') }}</textarea>
                                            @error('ket_layanan')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <label for="ket_id" class="col-span-2 mt-3">Deskripsi ID</label>
                                        <div class="col-span-8">
                                            <textarea name="ket_id" id="ket_id"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full textarea-form-admin @error('ket_id') border-red-500 @enderror">{{ old('ket_id') }}</textarea>
                                            @error('ket_id')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="placeholder_1" class="col-span-2">Placeholder 1</label>
                                        <div class="col-span-8">
                                            <input type="text" name="placeholder_1" id="placeholder_1"
                                                value="{{ old('placeholder_1') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('placeholder_1') border-red-500 @enderror">
                                            @error('placeholder_1')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="placeholder_2" class="col-span-2">Placeholder 2</label>
                                        <div class="col-span-8">
                                            <input type="text" name="placeholder_2" id="placeholder_2"
                                                value="{{ old('placeholder_2') }}"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('placeholder_2') border-red-500 @enderror">
                                            @error('placeholder_2')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label for="brand" class="col-span-2">Butuh Server ID?</label>
                                        <div class="col-span-8">
                                            <div class="flex gap-x-1 items-center light-dark-text">
                                                <input type="radio" name="serverOption" id="server-ya" class="radio" />
                                                <label class="" for="server-ya">Ya</label>
                                                <input type="radio" name="serverOption" id="server-tidak"
                                                    class="radio" />
                                                <label class="" for="server-tidak">Tidak</label>
                                                @error('serverOption')
                                                    <div class="text-error-input text-red-500 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                        <label class="col-span-2">Tipe</label>
                                        <div class="col-span-8">
                                            <select name="tipe_id" id="tipe_id"
                                                class="bg-input-form-admin select select-bordered w-full @error('tipe') select-error @enderror">
                                                <option value="" selected>Pilih Tipe</option>
                                                @foreach ($tipes as $tipe)
                                                    <option value="{{ $tipe->id }}">{{ $tipe->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tipe')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <div class="col-span-2">
                                            <label for="populer" class="mt-3">Kategori Best <br>Seller?</label>
                                        </div>
                                        <div class="col-span-8">
                                            <div class="flex gap-x-1 items-center light-dark-text">
                                                <input type="radio" name="populer" id="populer-ya" class="radio"
                                                    value="1">
                                                <label class="" for="populer-ya">Ya</label>
                                                <input type="radio" name="populer" id="populer-tidak" class="radio"
                                                    value="0">
                                                <label class="" for="populer-tidak">Tidak</label>
                                                @error('populer')
                                                    <div class="text-error-input text-red-500 text-sm">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <div class="col-span-2">
                                            <label class="mt-3" for="thumbnail">Thumbnail</label>
                                        </div>
                                        <div class="col-span-8">
                                            <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                                                class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text @error('thumbnail') file-input-error @enderror">
                                            <p class="text-error mt-2">Gunakan Ukuran 512 x 652 pixel (Lebar x Tinggi)
                                                untuk
                                                thumbnail</p>
                                            @error('thumbnail')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <div class="col-span-2">
                                            <label class="mt-3" for="bannerlayanan">Banner Layanan</label>
                                        </div>
                                        <div class="col-span-8">
                                            <input type="file" name="bannerlayanan" id="bannerlayanan"
                                                accept="image/*"
                                                class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text @error('bannerlayanan') file-input-error @enderror">
                                            <p class="text-error mt-2">Disarankan Banner Layanan menggunakan ukuran 1180 x
                                                275
                                                pixel (Lebar x Tinggi)</p>
                                            @error('bannerlayanan')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                        <div class="col-span-2">
                                            <label class="mt-3" for="petunjuk">Petunjuk</label>
                                        </div>
                                        <div class="col-span-8">
                                            <input type="file" name="petunjuk" id="petunjuk" accept="image/*"
                                                class="bg-input-form-admin file-input file-input-bordered w-full light-dark-text @error('petunjuk') file-input-error @enderror">
                                            @error('petunjuk')
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
                                        Buat Kategori
                                    </button>
                                    <button id="btn-reset-kategori" type="reset"
                                        class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                        Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="tabel-semuakategori"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Kategori</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari kategori..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semuakategori">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        ID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Thumbnail</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Banner Layanan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Nama</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Kode</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Brand</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Keterangan Layanan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Sistem Target</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tipe</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Populer</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Status</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($data->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data kategori!</td>
                                    </tr>
                                @else
                                    @foreach ($data as $data_kategori)
                                        <tr id="tr-tbl-skate" data-status="{{ $data_kategori->status }}"
                                            class="border-tbl-riwayat-deposit">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                {{ $data_kategori->id }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <img width="100" src="{{ asset($data_kategori->thumbnail) }}"
                                                    alt="{{ $data_kategori->judul }}">
                                            </td>
                                            <td class="p-4 align-middle">
                                                <img width="100" src="{{ asset($data_kategori->bannerlayanan) }}"
                                                    alt="{{ $data_kategori->judul }}">
                                            </td>
                                            <td class="p-4 align-middle nama">
                                                {{ $data_kategori->nama }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->kode }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->brand }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {!! htmlspecialchars_decode($data_kategori->ket_layanan) !!}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->server_id }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->tipe->name }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->populer }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data_kategori->created_at }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="dropdown dropdown-right">
                                                    @if ($data_kategori->status === 'active')
                                                        <div tabindex="0" role="button"
                                                            class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-green-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-green-500 duration-300">
                                                            <p>{{ $data_kategori->status }}</p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" fill="currentColor"
                                                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                            </svg>
                                                        </div>
                                                    @elseif($data_kategori->status === 'unactive')
                                                        <div tabindex="0" role="button"
                                                            class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-red-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-red-500">
                                                            <p>{{ $data_kategori->status }}</p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" fill="currentColor"
                                                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                            </svg>
                                                        </div>
                                                    @endif
                                                    <ul tabindex="0"
                                                        class="dropdown-content ms-2 z-[1] p-2 shadow bg-sidebar rounded-lg w-52 ">
                                                        <li>
                                                            <div tabindex="0" role="button"
                                                                onclick="window.location.href='/kategori-status/{{ $data_kategori->id }}/active'"
                                                                class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                                active
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div tabindex="0" role="button"
                                                                onclick="window.location.href='/kategori-status/{{ $data_kategori->id }}/unactive'"
                                                                class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                                unactive
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex gap-x-2">
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='/kategori/hapus/{{ $data_kategori->id }}'">
                                                        Hapus</div>
                                                    <button class="btn btn-warning btn-sm" type="button"
                                                        onclick="showEditModal('{{ $data_kategori->nama }}', '{{ route('kategori.detail', [$data_kategori->id]) }}')">
                                                        Edit</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <dialog id="my_modal_1" class="modal">
                        <div class="modal-box w-8/12 max-w-5xl overflow-y-auto modal-form-admin">
                            <div class="flex gap-x-2">
                                <h3 class="lg:text-xl text-lg font-semibold">Edit Kategori</h3>
                                <h3 id="nama-kategori" class="lg:text-xl text-lg font-semibold"></h3>
                            </div>
                            <div id="modal-content">

                            </div>
                        </div>
                    </dialog>

                    <div class="my-4 me-4 flex justify-end">
                        {{ $data->links('vendor.pagination.customriwayat') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showEditModal(name, link) {
            var modal = document.getElementById('my_modal_1');

            $.ajax({
                type: "GET",
                url: link,
                beforeSend: function() {
                    $('#nama-kategori').html(name);
                    $('#modal-content').html('Loading...');
                },
                success: function(result) {
                    $('#nama-kategori').html(name);
                    $('#modal-content').html(result);
                },
                error: function() {
                    $('#nama-kategori').html(name);
                    $('#modal-content').html('There is an error...');
                }
            });
            modal.showModal();
        }

        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuakategori tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.nama');
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
