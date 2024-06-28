@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kategori') }}'"
                    class="{{ request()->is('tipes') ? 'text-purple-400 cursor-pointer' : '' }}">Produk</li>
                <li>Tipe</li>
            </ul>
        </div>
        <div id="semua-tipe">
            <div id="tabel-semuatipe"
                class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card mt-8">
                <div class="flex justify-between m-4 items-center">
                    <p class="lg:text-2xl text-lg light-dark-text font-semibold">Daftar Tipe</p>
                    <button class="btn btn-sm btn-info flex gap-x-1 light-dark-text duration-300"
                        onclick="my_modal_3.showModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                        <p>Tambah Tipe</p>
                    </button>
                    <dialog id="my_modal_3" class="modal">
                        <div class="modal-box">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <h3 class="lg:text-xl text-lg font-semibold">Tambah Tipe</h3>
                            <div id="form-tambah-tipe" class="mt-6">
                                <form action="{{ route('tipes.store') }}" method="post">
                                    @csrf
                                    <div class="grid lg:grid-cols-8 lg:grid-rows-1 items-center">
                                        <label for="name" class="col-span-2">Nama Tipe</label>
                                        <div class="col-span-6">
                                            <input type="text" name="name" id="input-name" value="{{ old('name') }}"
                                                placeholder="eg. Game"
                                                class="bg-input-form-admin px-3 py-2.5 rounded-lg border w-full @error('name') border-red-500 @enderror">
                                            @error('name')
                                                <div class="text-error-input text-red-500 text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-end mt-12">
                                        <button type="submit" id="submit-button"
                                            class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300 disabled:opacity-50"
                                            disabled>
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
                <div class="px-4 my-2">
                    <input type="text" name="" id="searchInput" placeholder="Cari Data Tipe..."
                        class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                </div>
                <div class="relative overflow-x-auto overflow-y-hidden tbl-semuatipe">
                    <table class="w-full text-sm">
                        <thead class="">
                            <tr class="border-b border-none">
                                <th class="h-12 px-4 text-left align-middle font-medium w-[5%]">
                                    No</th>
                                <th class="h-12 px-4 text-left align-middle font-medium w-[75%]">
                                    Nama</th>
                                <th class="h-12 px-4 text-left align-middle font-medium w-[20%]">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @if ($tipes->isEmpty())
                                <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                    <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">
                                        Maaf,
                                        belum
                                        tersedia data tipe!</td>
                                </tr>
                            @else
                                <?php $no = 1; ?>
                                @foreach ($tipes as $data)
                                    <tr id="tr-tbl-sp" data-tipe="{{ $data->tipe }}" class="border-tbl-riwayat">
                                        <td class="p-4 align-middle font-medium">
                                            {{ $no }}
                                        </td>
                                        <td class="p-4 align-middle name">
                                            {{ $data->name }}
                                        </td>
                                        <td class="p-4 align-middle">
                                            <div class="flex gap-x-2 items-center">
                                                <form action="{{ route('tipes.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-error btn-sm">
                                                        Hapus
                                                    </button>
                                                </form>
                                                <div class="btn btn-warning btn-sm"
                                                    onclick="showEditModal('{{ $data->name }}', '{{ route('tipes.edit', [$data->id]) }}')">
                                                    Edit
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
                <dialog id="my_modal_4" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <div class="flex gap-x-2">
                            <h3 class="lg:text-xl text-lg font-semibold">Edit Tipe</h3>
                            <h3 id="nama-tipe" class="lg:text-xl text-lg font-semibold"></h3>
                        </div>
                        <div id="form-edit-tipe" class="mt-6">

                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </div>
    <script>
        function showEditModal(tipe, link) {
            var modal = document.getElementById('my_modal_4');

            $.ajax({
                type: "GET",
                url: link,
                beforeSend: function() {
                    $('#nama-tipe').html(tipe);
                    $('#form-edit-tipe').html('Loading...');
                },
                success: function(result) {
                    $('#nama-tipe').html(tipe);
                    $('#form-edit-tipe').html(result);

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
                    $('#nama-tipe').html(tipe);
                    $('#form-edit-tipe').html('There is an error...');
                }
            });
            modal.showModal();
        }
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuatipe tbody tr');

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

        document.getElementById('input-name').addEventListener('input', function() {
            let submitButton = document.getElementById('submit-button');
            if (this.value.trim() === '') {
                submitButton.classList.add('disabled:opacity-50');
                submitButton.disabled = true;
            } else {
                submitButton.classList.remove('disabled:opacity-50');
                submitButton.disabled = false;
            }
        });
    </script>
@endsection
