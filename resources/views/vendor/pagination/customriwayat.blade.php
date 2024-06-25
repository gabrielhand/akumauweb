@if ($paginator->hasPages())
    <nav>
        <ul class="flex gap-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button disabled="" aria-disabled="true" aria-label="@lang('pagination.previous')"
                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3">Sebelum</button>
            @else
                <button onclick="window.location.href='{{ $paginator->previousPageUrl() }}'" rel="prev"
                    aria-label="@lang('pagination.previous')"
                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3">Sebelum</button>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button disabled="" aria-disabled="true"
                        class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3"><span>{{ $element }}</span></button>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                            <button aria-current="page"
                                class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3"><span>{{ $page }}</span></button>
                        @else
                            {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                            <button onclick="window.location.href='{{ $url }}'"
                                class="brightness-75 inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border  hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3">{{ $page }}</button>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                {{-- <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li> --}}
                <button onclick="window.location.href='{{ $paginator->nextPageUrl() }}'" aria-label="@lang('pagination.next')"
                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3">Selanjutnya</button>
            @else
                {{-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li> --}}
                <button aria-label="@lang('pagination.next')" disabled=""
                    class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-100 hover:opacity-100 whitespace-nowrap border   hover:bg-purple-600 hover:text-accent-foreground h-9 rounded-md px-3">Selanjutnya</button>
            @endif
        </ul>
    </nav>
@endif
