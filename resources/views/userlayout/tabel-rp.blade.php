<div id="tabel-rp" class="border light-dark-text shadow-sm p-2 rounded-xl border-none bg-invoice-card">
    <div class="relative w-full overflow-auto">
        <table class="w-full caption-bottom text-sm">
            <thead class="">
                <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-none">
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Invoice</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Kategori</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Layanan</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Harga</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Tanggal</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Status</th>
                    <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground">
                        Aksi</th>
                </tr>
            </thead>
            <tbody class="">
                @foreach ($pembelian as $riwapem)
                    <tr id="tr-tbl-rp" data-status="{{ $riwapem->status }}" class="hover-tbl-riwayat border-tbl-riwayat transition-colors">
                        <td class="p-4 align-middle font-medium">
                            {{ $riwapem->order_id }}</td>
                        <td class="p-4 align-middle">{{ $riwapem->nama_kategori }}</td>
                        <td class="p-4 align-middle">{{ $riwapem->layanan }}
                        </td>
                        <td class="p-4 align-middle">Rp {{ $riwapem->harga }},-</td>
                        <td class="p-4 align-middle">{{ $riwapem->created_at }}</td>
                        <td class="p-4 align-middle">
                            @if ($riwapem->status === 'Success')
                                <div
                                    class="inline-flex w-full items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm bg-green-500">
                                    {{ $riwapem->status }}</div>
                            @elseif($riwapem->status === 'Batal')
                                <div
                                    class="inline-flex w-full justify-center items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                    {{ $riwapem->status }}</div>
                            @elseif($riwapem->status === 'Pending')
                                <div
                                    class="inline-flex w-full justify-center items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm bg-orange-500">
                                    {{ $riwapem->status }}</div>
                            @endif
                        </td>
                        <td class="p-4 align-middle">
                            <a class="underline" target="_blank"
                                href="{{ url('/pembelian/invoice/' . $riwapem->order_id) }}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="my-4 me-4 flex justify-end">
        {{ $pembelian->links('vendor.pagination.customriwayat') }}
    </div>
</div>
