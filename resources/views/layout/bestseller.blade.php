<section id="best-seller" class="md:px-6 px-4">
    <h1 class="lg:text-xl md:text-lg sm:text-sm font-semibold mb-5 light-dark-text">⭐ Paling Banyak Dicari</h1>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
        @php $count = 0 @endphp
        @foreach ($kategori as $jsgori)
            @if ($jsgori->populer == '1' && $count < 8)
                <div onclick="window.location.href='{{ url('') . '/order/' . $jsgori->kode }}'">
                    <div
                        class="border shadow-sm relative w-full h-16 md:h-24 border-none rounded-xl cursor-pointer flex flex-col justify-center p-0 text-white bg-purple-700">
                        <figure class="top-0">
                            <img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                                class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                                src="{{ $pattern }}"
                                style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                        </figure>
                        <div class="flex gap-3 items-center z-10 p-2">
                            <div class="h-12 w-12 md:h-16 md:w-16 relative shrink-0">
                                <figure><img alt="{{ $jsgori->brand }}" loading="lazy" decoding="async" data-nimg="fill"
                                        class="object-cover rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                                        src="{{ $jsgori->thumbnail }}"
                                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                </figure>
                            </div>
                            <div>
                                <p class="text-xs md:text-sm font-medium line-clamp-2">{{ $jsgori->nama }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @php $count++ @endphp
            @endif
        @endforeach
    </div>
</section>
