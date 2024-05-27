<section id="product" class="pt-8">
    <section id="product" class="md:px-6 px-4">
        <div class="mb-7 flex flex-col-reverse justify-between md:flex-row">
            <div dir="ltr" class="relative overflow-hidden w-full whitespace-nowrap" orientation="horizontal"
                style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">
                <style>
                    [data-radix-scroll-area-viewport] {
                        scrollbar-width: none;
                        -ms-overflow-style: none;
                        -webkit-overflow-scrolling: touch;
                    }

                    [data-radix-scroll-area-viewport]::-webkit-scrollbar {
                        display: none
                    }
                </style>
                <div data-radix-scroll-area-viewport="" class="h-full w-full rounded-[inherit]"
                    style="overflow: scroll;">
                    <div style="min-width: 100%; display: table;">
                        <div class="flex w-max space-x-4 pb-4">
                            @foreach ($tipes as $tipe)
                                <button onclick="showTabContent('{{ $tipe->name }}')" id="{{ $tipe->name }}-tab"
                                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus:brightness-50 focus-visible:brightness-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-black focus-visible:ring-offset-2 disabled:pointer-events-none 
                                disabled:opacity-50 brightness-75 transition duration-300 hover:brightness-50 h-10 py-2 rounded-full bg-transparent border border-foreground/50 hover:text-foreground hover:bg-transparent px-6 whitespace-nowrap shrink-0 text-foreground/50">{{ $tipe->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-9">
            @foreach ($kategoriByTipe as $tipe => $kategori)
                <div id="{{ $tipe }}-content" class="tab-content {{ $tipe === 'Game' ? '' : 'hidden' }}">
                    <h1 class="lg:text-xl md:text-lg sm:text-sm font-medium mb-5 text-black" id="h1">
                        {{ $tipe }}</h1>
                    <div class="grid 2xl:grid-cols-6 md:grid-cols-5 grid-cols-3 gap-3 md:gap-4 transition duration-300">
                        @foreach ($kategori as $jsgori)
                            <a href="{{ url('') . '/order/' . $jsgori->kode }}">
                                <div data-radix-aspect-ratio-wrapper=""
                                    style="position: relative; width: 100%; padding-bottom: 150%;">
                                    <div style="position: absolute; inset: 0px;">
                                        <div
                                            class="overflow-hidden hover:shadow-sm hover:cursor-pointer hover:duration-300 h-full w-full relative rounded-xl group">
                                            <div class="hidden group-hover:block ">
                                                <div
                                                    class="absolute inset-0 p-3 z-10 flex flex-col items-center justify-between">
                                                    <div class="w-full grow flex flex-col items-center justify-center ">
                                                        <figure style="width: 40px;"><img alt="icon" loading="lazy"
                                                                width="40" height="40" decoding="async"
                                                                data-nimg="1"
                                                                class="object-center object-contain h-[30px] lg:h-[40px]"
                                                                src="{{ $logo_header }}" style="color: transparent;">
                                                        </figure>
                                                    </div>
                                                    <div class="w-full flex flex-col items-center">
                                                        <p
                                                            class="font-semibold text-white text-[11px] lg:text-[16px] mb-1 line-clamp-2 text-center">
                                                            {{ $jsgori->nama }}</p>
                                                        <p
                                                            class="font-light text-[10px] lg:text-[14px] text-white line-clamp-2">
                                                            {{ $jsgori->sub_nama }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <figure class="h-full w-full"><img alt="MLBB Via Login" loading="lazy"
                                                    decoding="async" data-nimg="fill"
                                                    class="object-cover object-center duration-300 group-hover:blur-sm group-hover:brightness-50 transition-all ease-in-out rounded-xl w-24 h-24"
                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                    srcset="{{ url('') }}{{ $jsgori->thumbnail }}"
                                                    src="{{ $jsgori->thumbnail }}"
                                                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        </div>
        <script>
            function showTabContent(tipe) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show the selected tab content
                document.getElementById(`${tipe}-content`).classList.remove('hidden');
            }
        </script>
    </section>
</section>
