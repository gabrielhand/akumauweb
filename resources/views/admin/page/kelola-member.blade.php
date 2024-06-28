@extends('admin.layout.main-admin')

@section('content')
    <div>
        <div class="flex justify-end text-sm breadcrumbs mb-4 mt-2">
            <ul>
                <li onclick="window.location.href='{{ route('dashboard') }}'" class="text-purple-400 cursor-pointer">Dashboard
                </li>
                <li onclick="window.location.href='{{ route('kmember') }}'"
                    class="{{ request()->is('member') ? 'text-purple-400 cursor-pointer' : '' }}">Member</li>
                <li>Kelola Intern</li>
            </ul>
        </div>
        <div class="flex flex-col gap-y-4">
            <div class="grid lg:grid-cols-7 lg:grid-rows-1 gap-x-6 gap-y-4 w-full">
                <div id="form-tambah-member" class="col-span-4 row-span-1 bg-sidebar-admin p-6 rounded-lg shadow-sm">
                    <form action="{{ route('member.post') }}" method="POST">
                        @csrf
                        <p class="lg:text-xl text-base light-dark-text mb-4 font-semibold">Tambah Pengguna</p>
                        <div class="grid grid-cols-4 grid-rows-4 items-center gap-x-6 gap-y-3 light-dark-text">
                            <span class="col-span-1">Nama</span>
                            <div class="col-span-3">
                                <input type="text" name="name" id="nama" placeholder="Nama Lengkap"
                                    value="{{ old('name') }}"
                                    class="px-3 py-2.5 rounded-lg border w-full @error('name') border-red-500 @enderror">
                                @error('name')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <span class="col-span-1">Username</span>
                            <div class="col-span-3">
                                <input type="text" name="username" id="username" placeholder="Username"
                                    value="{{ old('username') }}"
                                    class="px-3 py-2.5 rounded-lg border w-full @error('username') border-red-500 @enderror">
                                @error('username')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <span class="col-span-1">Password</span>
                            <div class="col-span-3">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="px-3 py-2.5 rounded-lg border w-full @error('password') border-red-500 @enderror">
                                @error('password')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <span class="col-span-1">Role</span>
                            <div class="col-span-3">
                                <select name="role" id="role"
                                    class="select select-bordered w-full @error('role') border-red-500 @enderror">
                                    <option value="Member">Member</option>
                                    <option value="Reseller">Reseler</option>
                                </select>
                                @error('role')
                                    <div class="text-red-500">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-end mt-6 gap-x-2">
                            <button type="submit"
                                class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">Buat
                                Member</button>
                            <button id="btn-reset-tmember" type="button"
                                class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">Reset</button>
                        </div>
                    </form>
                </div>
                <div id="form-kirim-saldo-member" class="col-span-3">
                    <div class="bg-sidebar-admin p-6 rounded-lg shadow-sm">
                        <form action="" method="POST">
                            @csrf
                            <p class="lg:text-xl text-base light-dark-text mb-4 font-semibold">Kirim Saldo</p>
                            <div class="grid grid-cols-6 grid-rows-2 items-center gap-x-5 gap-y-3 light-dark-text">
                                <span class="col-span-2">Username</span>
                                <div class="col-span-4">
                                    <input type="text" name="username" id="username" placeholder="Username"
                                        class="px-3 py-2.5 rounded-lg border w-full">
                                </div>
                                <span class="col-span-2">Jumlah</span>
                                <div class="col-span-4">
                                    <input type="number" name="saldo" id="saldo" placeholder="Jumlah"
                                        class="px-3 py-2.5 rounded-lg border w-full">
                                </div>
                            </div>
                            <div class="flex justify-end mt-6 gap-x-2">
                                <button type="submit"
                                    class="bg-purple-600 text-white hover:bg-purple-500 rounded-md px-3 py-2 duration-300">
                                    Kirim
                                </button>
                                <button id="btn-reset-tmember" type="button"
                                    class="bg-gray-300 text-black hover:bg-gray-400 rounded-md px-3 py-2 duration-300">
                                    Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <div id="tabel-semuamember"
                    class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                    <div>
                        <p class="lg:text-2xl text-lg light-dark-text font-semibold m-4">Daftar Semua Member</p>
                        <div class="px-4 my-2">
                            <input type="text" name="" id="searchInput" placeholder="Cari Data Member..."
                                class="light-dark-border w-full input-tbl-sp rounded-lg lg:text-base text-sm px-3 py-2">
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-hidden tbl-semuamember">
                        <table class="w-full text-sm">
                            <thead class="">
                                <tr class="border-b border-none">
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        ID</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Nama</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Username</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Saldo</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Level</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        No Whatsapp</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Tanggal dibuat</th>
                                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if ($users->isEmpty())
                                    <tr id="tr-tbl-sp" class="border-tbl-riwayat">
                                        <td colspan="7" class="p-4 text-center font-medium lg:text-lg text-base">Maaf,
                                            belum
                                            tersedia data member!</td>
                                    </tr>
                                @else
                                    @foreach ($users as $user)
                                        <tr id="tr-tbl-sp" data-member="{{ $user->status }}" class="border-tbl-riwayat">
                                            <td class="p-4 align-middle font-medium">
                                                {{ $user->id }}
                                            </td>
                                            <td class="p-4 align-middle font-medium username">
                                                {{ $user->name }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $user->username }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                Rp. {{ number_format($user->balance, 0, ',', '.') }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $user->role }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $user->whatsapp }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                {{ $user->created_at }}
                                            </td>
                                            <td class="p-4 align-middle">
                                                <div class="flex gap-x-2 items-center">
                                                    <div class="btn btn-error btn-sm"
                                                        onclick="window.location.href='{{ route('member.delete', [$user->id]) }}'">
                                                        Hapus
                                                    </div>
                                                    <div class="btn btn-warning btn-sm"
                                                        onclick="window.location.href='/dmvilog/hapus/{{ $user->id }}'">
                                                        Edit
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="my-4 me-4 flex justify-end">
                        {{ $users->links('vendor.pagination.customriwayat') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuamember tbody tr');

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
