@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kategori') }}'"
                    class="{{ request()->is('layanan') ? 'text-purple-400 cursor-pointer' : '' }}">Produk</li>
                <li>Layanan</li>
            </ul>
        </div>
        <div class="flex flex-col gap-y-8">
            <div id="form-tambah-layanan" class="bg-sidebar-admin border-gray-400 rounded-xl p-6 light-dark-text">
                <p class="lg:text-2xl text-xl font-medium">Tambah Layanan</p>
                <div class="mt-12">
                    <form action="{{ route('layanan.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col gap-y-4">
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="nama" class="col-span-2">Layanan</label>
                                <div class="col-span-8">
                                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('nama') border-red-500 @enderror">
                                    @error('nama')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                <label for="kategori" class="col-span-2 mt-3">Kategori</label>
                                <div class="col-span-8">
                                    <select name="kategori" id="kategori"
                                        class="bg-input-form-admin select select-bordered w-full">
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                <label for="sub" class="col-span-2 mt-3">Sub Kategori</label>
                                <div class="col-span-8">
                                    <select name="sub" id="sub"
                                        class="bg-input-form-admin select select-bordered w-full">
                                        <option value="">Pilih Sub Kategori</option>
                                        <option value="0">Normal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                <label for="provider" class="col-span-2 mt-3">Provider</label>
                                <div class="col-span-8">
                                    <select name="provider" id="provider"
                                        class="bg-input-form-admin select select-bordered w-full">
                                        <option value="digiflazz">Digiflazz</option>
                                        <option value="vip">Vip Reseller</option>
                                        <option value="apigames">API Games</option>
                                        <option value="moogold">MooGold</option>
                                        <option value="mobapay">Mobapay</option>
                                        <option value="gamepoint">Gamepointclub</option>
                                        <option value="bxystore">Bxystore</option>
                                        <option value="evilbee">EvilBee</option>
                                        <option value="meng">Mengtopup</option>
                                        <option value="alpha">Alpharamz</option>
                                        <option value="joki">Joki</option>
                                        <option value="evilbee">EvilBee</option>
                                        <option value="gift_skin">Gift Skin</option>
                                        <option value="dm_vilog">DM Vilog</option>
                                        <option value="manual">Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="harga_member" class="col-span-2">Harga Member</label>
                                <div class="col-span-8">
                                    <input type="number" name="harga_member" id="harga_member"
                                        value="{{ old('harga_member') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('harga_member') border-red-500 @enderror">
                                    @error('harga_member')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="harga_reseller" class="col-span-2">Harga Reseller</label>
                                <div class="col-span-8">
                                    <input type="number" name="harga_reseller" id="harga_reseller"
                                        value="{{ old('harga_reseller') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('harga_reseller') border-red-500 @enderror">
                                    @error('harga_reseller')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="profit_member" class="col-span-2">Profit Member</label>
                                <div class="col-span-8">
                                    <input type="number" name="profit_member" id="profit_member"
                                        value="{{ old('profit_member') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('profit_member') border-red-500 @enderror">
                                    @error('profit_member')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="profit_reseller" class="col-span-2">Profit Reseller</label>
                                <div class="col-span-8">
                                    <input type="number" name="profit_reseller" id="profit_reseller"
                                        value="{{ old('profit_reseller') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('profit_reseller') border-red-500 @enderror">
                                    @error('profit_reseller')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="modal" class="col-span-2">Modal Awal</label>
                                <div class="col-span-8">
                                    <input type="number" name="modal" id="modal" value="{{ old('modal') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('modal') border-red-500 @enderror">
                                    @error('modal')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="provider_id" class="col-span-2">Provider ID</label>
                                <div class="col-span-8">
                                    <input type="text" name="provider_id" id="provider_id"
                                        value="{{ old('provider_id') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('provider_id') border-red-500 @enderror">
                                    @error('provider_id')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                <label for="product_logo" class="col-span-2 mt-3">Product Logo</label>
                                <div class="col-span-8">
                                    <input type="file" accept="image/*" name="product_logo" id="product_logo"
                                        value="{{ old('product_logo') }}"
                                        class="file-input file-input-bordered bg-input-form-admin w-full light-dark-text @error('product_logo') file-input-error @enderror">
                                    @error('product_logo')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <p class="text-red-500 text-sm mt-2">*AKTIFKAN JIKA KAMU SEDANG MENGADAKAN FLASHSALE
                                    </p>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1">
                                <label for="flash_sale" class="col-span-2 mt-3">Flash Sale?</label>
                                <div class="col-span-8">
                                    <select name="flash_sale" id="flash_sale"
                                        class="bg-input-form-admin select select-bordered w-full">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="judul_flash_sale" class="col-span-2">Judul Flash Sale</label>
                                <div class="col-span-8">
                                    <input type="text" name="judul_flash_sale" id="judul_flash_sale"
                                        value="{{ old('judul_flash_sale') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('judul_flash_sale') border-red-500 @enderror">
                                    @error('judul_flash_sale')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="harga_flash_sale" class="col-span-2">Harga Flash Sale</label>
                                <div class="col-span-8">
                                    <input type="text" name="harga_flash_sale" id="harga_flash_sale"
                                        value="{{ old('harga_flash_sale') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('harga_flash_sale') border-red-500 @enderror">
                                    @error('harga_flash_sale')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="expired_flash_sale" class="col-span-2">Expired Flash Sale</label>
                                <div class="col-span-8">
                                    <input type="date" name="expired_flash_sale" id="expired_flash_sale"
                                        value="{{ old('expired_flash_sale') }}"
                                        class="px-3 py-2.5 rounded-lg border w-full @error('expired_flash_sale') border-red-500 @enderror">
                                    @error('expired_flash_sale')
                                        <div class="text-error-input text-red-500 text-sm">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-10 lg:grid-rows-1 items-center">
                                <label for="banner_flash_sale" class="col-span-2">Banner Flash Sale</label>
                                <div class="col-span-8">
                                    <input type="file" name="banner_flash_sale" id="banner_flash_sale"
                                        accept="image/*" value="{{ old('banner_flash_sale') }}"
                                        class="bg-input-form-admin file-input file-input-bordered w-full @error('banner_flash_sale') file-input-error @enderror">
                                    @error('banner_flash_sale')
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
                            <button id="btn-reset-tlayanan" type="reset"
                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="semua-layanan">
                <div id="tabel-semualayanan"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Layanan</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Payment..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semualayanan">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        ID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Logo</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Banner Flash Sale</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Kategori</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Layanan</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Provider</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        PID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Harga Member</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Harga Reseller</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Profit Member</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Profit Reseller</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Modal</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Harga Flash Sale</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Flash Sale?</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Judul Flash Sale</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Expired Flash Sale</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Status</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($datas->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data layanan!</td>
                                    </tr>
                                @else
                                    <?php $no = 1; ?>
                                    @foreach ($datas as $data)
                                        <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $no }}
                                            </td>
                                            <td class="p-4 align-middle font-medium">
                                                {{ $data->id }}
                                            <td class="p-4 align-middle name">
                                                <img width="55" src="{{ asset($data->product_logo) }}"
                                                    alt="{{ $data->judul }}">
                                            </td>
                                            <td class="p-4 align-middle">
                                                <img width="55" src="{{ asset($data->banner_flash_sale) }}"
                                                    alt="{{ $data->judul_flash_sale }}">
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->nama_kategori }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->layanan }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->provider }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->provider_id }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($data->harga_member, 0, '.', ',') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($data->harga_reseller, 0, '.', ',') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ number_format($data->profit_member, 0, '.', ',') }}% (Rp.
                                                {{ $data->harga_member * ($data->profit_member / 100) }})
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ number_format($data->profit_reseller, 0, '.', ',') }}% (Rp.
                                                {{ $data->harga_reseller * ($data->profit_reseller / 100) }})
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($data->modal, 0, '.', ',') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($data->harga_flash_sale, 0, '.', ',') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->is_flash_sale == 0 ? 'No' : 'Yes' }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->judul_flash_sale }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $data->expired_flash_sale }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="dropdown">
                                                    @if ($data->status === 'available')
                                                        <div tabindex="0" role="button"
                                                            class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-green-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-green-500 duration-300">
                                                            <p>{{ $data->status }}</p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" fill="currentColor"
                                                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                            </svg>
                                                        </div>
                                                    @elseif($data->status === 'unavailable')
                                                        <div tabindex="0" role="button"
                                                            class="inline-flex gap-x-2 w-[105px] justify-between items-center border transition-colors focus:outline-none focus:ring-1 focus:ring-white border-transparent hover:bg-red-600 rounded-lg py-2 px-3 text-white text-xs md:text-sm bg-red-500">
                                                            <p>{{ $data->status }}</p>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" fill="currentColor"
                                                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                            </svg>
                                                        </div>
                                                    @endif
                                                    <ul tabindex="0"
                                                        class="dropdown-content space-y-1 mt-2 z-[1] p-2 shadow bg-sidebar rounded-lg w-52 ">
                                                        <li>
                                                            <div tabindex="0" role="button"
                                                                onclick="window.location.href='/layanan-status/{{ $data->id }}/available'"
                                                                class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                                Available
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div tabindex="0" role="button"
                                                                onclick="window.location.href='/layanan-status/{{ $data->id }}/unavailable'"
                                                                class="rounded-lg px-3 py-2 hover:bg-slate-200/60 duration-300 cursor-pointer focus:bg-purple-500 focus:text-white">
                                                                Unavailable
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex gap-x-2 items-center">
                                                    <div class="btn btn-warning btn-sm"
                                                        onclick="showEditLayananModal('{{ $data->layanan }}', '{{ route('layanan.detail', [$data->id]) }}')">
                                                        Edit
                                                    </div>
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='/layanan/hapus/{{ $data->id }}'">
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
                    <dialog id="my_modal_edit_layanan" class="modal">
                        <div class="modal-box w-8/12 max-w-5xl overflow-y-auto modal-form-admin">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <div class="flex gap-x-2">
                                <h3 class="lg:text-xl text-lg font-semibold">Edit Layanan</h3>
                                <h3 id="nama-layanan" class="lg:text-xl text-lg font-semibold"></h3>
                            </div>
                            <div id="form-edit-layanan">
                                
                            </div>
                        </div>
                    </dialog>
                </div>
                <div class="my-4 me-4 flex justify-end">
                    {{ $datas->links('vendor.pagination.customriwayat') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        function showEditLayananModal(layanan, link) {
            var modal = document.getElementById('my_modal_edit_layanan');

            $.ajax({
                type: "GET",
                url: link,
                beforeSend: function() {
                    $('#nama-layanan').html(layanan);
                    $('#form-edit-layanan').html('Loading...');
                },
                success: function(result) {
                    $('#nama-layanan').html(layanan);
                    $('#form-edit-layanan').html(result);

                    document.getElementById('input-edit-name').addEventListener('input', function() {
                        let submitButton = document.getElementById('edit-button');
                        if (this.value.trim() === '') {
                            submitButton.classList.add('disabled:opacity-50');
                            submitButton.disabled = true;
                        } else {
                            submitButton.classList.remove('disabled:opacity-50');
                            submitButton.disabled = false;
                        }
                    });
                },
                error: function() {
                    $('#nama-layanan').html(layanan);
                    $('#form-edit-layanan').html('There is an error...');
                }
            });
            modal.showModal();
        }

        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semualayanan tbody tr');

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
