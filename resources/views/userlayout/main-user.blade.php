@extends('layout.main')

@section('content')
    <div class="flex-col flex gap-6 mb-10 min-h-[70vh]">
        <section id="header">
            <div class="w-full h-48 md:h-[18rem] relative">
                <figure>
                    <img alt="profile_cover" loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                        sizes="(max-width: 768px) 100vw, 100px"
                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fheader.webp&amp;w=3840&amp;q=75"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                </figure>
                <div class="absolute inset-0 bg-gradient-to-b from-[#16172100] to-[#2F3038] mix-blend-multiply"></div>
            </div>
            <div class="flex flex-col xl:flex-row w-full items-start xl:justify-between md:mt-2 mt-0 gap-4 lg:px-10 px-6">
                <div
                    class="-mt-[3rem] md:-mt-[4.5rem] lg:-mt-[1rem] xl:-mt-[3.2rem] 2xl:-mt-[3.6rem] flex flex-row items-end z-20 relative gap-3 md:gap-4 md:w-[50%]">
                    <div
                        class="w-32 h-32 xl:w-36 xl:h-36 2xl:w-40 2xl:h-40 relative p-1 rounded-full backdrop-blur-lg bg-gradient-to-r from-blue-400 via-purple-500 to-orange-500 animate-background-animate">
                        <figure class="h-full w-full">
                            <img alt="{{ auth()->user()->username }}" loading="lazy" width="400" height="400"
                                decoding="async" data-nimg="1" class="object-cover rounded-full h-full w-full"
                                @if (auth()->user()->image) 
                                   src="{{ asset('storage/' . auth()->user()->image) }}"
                                @else
                                   src="https://picsum.photos/400/400"
                                @endif
                                 style="color: transparent;">
                        </figure>
                    </div>
                    <div class="text-left">
                        <div class="space-y-2 flex flex-col items-start light-dark-text">
                            <h1 class="text-lg md:text-xl lg:text-2xl font-semibold w-full">{{ auth()->user()->username }}
                            </h1>
                            <h2 class="text-sm md:text-lg">{{ auth()->user()->role }}</h2>
                        </div>
                        <div class="h-4 md:h-8"></div>
                    </div>
                </div>
                <ul
                    class="flex gap-6 md:mt-2 text-sm 2xl:text-base font-semibold text-[#8E8F8F] overflow-x-auto w-full justify-start xl:justify-end whitespace-nowrap pb-3 lg:me-12">
                    <li class="{{ request()->is('me') ? 'text-[#FB1CA3]' : 'cursor-pointer hover:text-[#FB1CA3]' }}"><a
                            href="{{ route('profile') }}">MY ACCOUNT</a></li>
                    <li class="{{ request()->is('riwayat') ? 'text-[#FB1CA3]' : 'cursor-pointer hover:text-[#FB1CA3]' }}"><a
                            href="{{ route('riwayat') }}">ORDER</a></li>
                    <li class="cursor-pointer hover:text-[#FB1CA3]">MEMBERSHIP</li>
                </ul>
            </div>
        </section>

        <!-- Content -->
        @yield('user-content')

    </div>
@endsection
