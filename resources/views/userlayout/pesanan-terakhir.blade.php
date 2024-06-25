<div class="col-span-12 flex flex-col md:col-span-4 space-y-4 light-dark-text">
    <h1 class="text-lg md:text-xl font-semibold md:-mt-5 lg:-mt-10">5 Pesanan Terakhir</h1>
    @if ($data->isEmpty())
        <div class="light-dark-text lg:text-xl text-lg">
            Maaf, anda belum memiliki pesanan!
        </div>
    @else
        @foreach ($data as $pembelian)
            <div tabindex="0" onclick="window.location.href='{{ url('/pembelian/invoice/' . $pembelian->order_id) }}'"
                class="rounded-lg border shadow-sm bg-sidebar-menu border-none space-y-3 relative flex flex-col justify-center cursor-pointer">
                <div class="relative flex min-h-[3rem]">
                    <div class="absolute left-0 top-0 w-full">
                        <div class="flex justify-between items-center">
                            <div class="p-2 bg-blue-500 rounded-r-xl text-xs 2xl:text-sm rounded-tl-lg text-white">
                                {{ $pembelian->order_id }}
                            </div>
                            <div class="p-2">
                                <div
                                    class="rounded-sm px-2 text-xs 2xl:text-sm text-white bg-{{ getStatusBadgeColorMe($pembelian->status) }}">
                                    {{ $pembelian->status }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center pb-4 px-4">
                    <span
                        class="relative shrink-0 overflow-hidden flex h-20 w-20 items-center justify-center space-y-0 border rounded-lg">
                        <img class="aspect-square h-full w-full object-cover"
                            alt="Gambar {{ $pembelian->nama_kategori }}" src="{{ $pembelian->thumbnail }}">
                    </span>
                    <div class="ml-4 space-y-1 w-full">
                        <p class="text-xs font-medium leading-none">{{ $pembelian->layanan }}</p>
                        <p class="text-xs text-muted-foreground">{{ $pembelian->nama_kategori }}</p>
                        <div class="text-xs ml-auto font-medium">Rp {{ $pembelian->harga }},-</div>
                        <div class="float-right text-xs"></div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
<script>
    @php
        function getStatusBadgeColorMe($status)
        {
            switch ($status) {
                case 'Batal':
                    return 'red-500';
                case 'Pending':
                    return 'yellow-500';
                case 'Success':
                    return 'green-500';
                default:
                    return 'blue-500';
            }
        }
    @endphp
</script>
