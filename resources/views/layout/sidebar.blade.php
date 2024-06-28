<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-sidebar pb-4">
        <div class="flex h-16 md:h-[4.5rem] shrink-0 items-center px-10 bg-navbar-bg sidebar-shadow">
            <figure class="hidden lg:block cursor-pointer w-full h-[60%] relative justify-end">
                <img alt="logo" loading="lazy" decoding="async" data-nimg="fill"
                    class="object-contain object-center logo"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    sizes="(max-width: 768px) 100vw, 100px" src="{{ $logo_header }}"
                    onclick="window.location.href='{{ route('home') }}'">
            </figure>
        </div>
        <div dir="ltr" class="relative overflow-hidden h-[90%] rounded-lg drop-shadow-lg"
            style="position:relative;">
            <div class="theme-scrollbar h-full w-full rounded-[inherit]" style="overflow: hidden scroll;">
                <div style="min-width:100%;display:table">
                    <nav class="flex flex-1 flex-col px-4">
                        @auth
                            <div class="mb-5">
                                <button
                                    class="inline-flex items-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-primary hover:bg-primary/90 bg-gradient-to-r from-purple-700 via-purple-800 to-gray-900 text-white h-12 justify-start p-2 gap-x-4 w-full">
                                    <figure style="width: 50px;">
                                        <img alt="gift" loading="lazy" width="50"
                                            height="50" decoding="async" data-nimg="1" class=""
                                            sizes="(max-width: 768px) 100vw, 100px"
                                            src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fgift.png&amp;w=3840&amp;q=75"
                                            style="color: transparent;">
                                        </figure>Klaim Kode Voucher
                                </button>
                            </div>
                        @endauth
                        <ul class="flex flex-1 flex-col gap-y-7">
                            <li class="rounded-lg bg-sidebar-menu px-2.5 py-5 space-y-4 mb-5">
                                <ul>
                                    <h2 class="mb-2 text-xs ml-2 light-dark-text font-medium">MENU</h2>
                                    <li><a class="{{ request()->is('/') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 text-sidebar-menu-active group flex gap-x-3 p-1.5 text-sm leading-6 items-center"
                                            href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-sidebar-menu-active h-5 w-5 shrink-0" aria-hidden="true">
                                                <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                                                <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                                                <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                                                <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                                            </svg>Beranda</a></li>
                                    <li><a class="{{ request()->is('allgames') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 hover:text-sidebar-menu-active group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                            href="/allgames"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                aria-hidden="true">
                                                <line x1="6" x2="10" y1="11" y2="11">
                                                </line>
                                                <line x1="8" x2="8" y1="9" y2="13">
                                                </line>
                                                <line x1="15" x2="15.01" y1="12" y2="12">
                                                </line>
                                                <line x1="18" x2="18.01" y1="10" y2="10">
                                                </line>
                                                <path
                                                    d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z">
                                                </path>
                                            </svg>Semua Game</a></li>
                                    <li><a class="{{ request()->is('cari') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 text-sidebar-menu-fg hover:text-sidebar-menu-active group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                            href="/cari"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                aria-hidden="true">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </svg>Cek Transaksi</a></li>
                                </ul>
                                <ul>
                                    <h2 class="mb-2 text-xs ml-2 light-dark-text font-medium">NAVIGASI</h2>
                                    <li><a class="{{ request()->is('services') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 text-sidebar-menu-fg hover:text-sidebar-menu-active group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                            href="/services"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                aria-hidden="true">
                                                <line x1="8" x2="21" y1="6" y2="6">
                                                </line>
                                                <line x1="8" x2="21" y1="12" y2="12">
                                                </line>
                                                <line x1="8" x2="21" y1="18" y2="18">
                                                </line>
                                                <line x1="3" x2="3.01" y1="6" y2="6">
                                                </line>
                                                <line x1="3" x2="3.01" y1="12" y2="12">
                                                </line>
                                                <line x1="3" x2="3.01" y1="18" y2="18">
                                                </line>
                                            </svg>Daftar Layanan</a></li>
                                    <li><a class="{{ request()->is('FAQ') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 text-sidebar-menu-fg hover:text-sidebar-menu-active group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                            href="/FAQ"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                aria-hidden="true">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                <path d="M12 17h.01"></path>
                                            </svg>FAQ</a></li>
                                    <li><a class="{{ request()->is('dukungan') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 text-sidebar-menu-fg hover:text-sidebar-menu-active group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                            href="/dukungan"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                aria-hidden="true">
                                                <path
                                                    d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                                </path>
                                            </svg>Dukungan Pelanggan</a></li>
                                    <li><a target="_blank"
                                            class="group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center light-dark-text"
                                            href="https://docs.mobafams.com"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="h-5 w-5 shrink-0" aria-hidden="true">
                                                <path d="m18 16 4-4-4-4"></path>
                                                <path d="m6 8-4 4 4 4"></path>
                                                <path d="m14.5 4-5 16"></path>
                                            </svg>API</a></li>
                                </ul>
                                <ul>
                                    <h2 class="mb-2 text-xs ml-2 light-dark-text font-medium">PENGGUNA</h2>
                                    @auth
                                        <li>
                                            <a class="{{ request()->is('me') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                                href="/me">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="text-sidebar-menu-active h-5 w-5 shrink-0" aria-hidden="true">
                                                    <rect width="7" height="9" x="3" y="3" rx="1">
                                                    </rect>
                                                    <rect width="7" height="5" x="14" y="3" rx="1">
                                                    </rect>
                                                    <rect width="7" height="9" x="14" y="12" rx="1">
                                                    </rect>
                                                    <rect width="7" height="5" x="3" y="16" rx="1">
                                                    </rect>
                                                </svg>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('riwayat') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                                href="/riwayat">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M16 22h2c.5 0 1-.2 1.4-.6.4-.4.6-.9.6-1.4V7.5L14.5 2H6c-.5 0-1 .2-1.4.6C4.2 3 4 3.5 4 4v3">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <circle cx="8" cy="16" r="6"></circle>
                                                    <path d="M9.5 17.5 8 16.25V14"></path>
                                                </svg>Riwayat Pesanan
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ request()->is('membership') ? 'text-purple-600' : 'light-dark-text' }} hover:text-purple-600 group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                                href="{{ route('membership') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="text-sidebar-menu-active h-5 w-5 shrink-0" aria-hidden="true">
                                                    <rect width="7" height="9" x="3" y="3" rx="1">
                                                    </rect>
                                                    <rect width="7" height="5" x="14" y="3" rx="1">
                                                    </rect>
                                                    <rect width="7" height="9" x="14" y="12" rx="1">
                                                    </rect>
                                                    <rect width="7" height="5" x="3" y="16" rx="1">
                                                    </rect>
                                                </svg>Membership
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="light-dark-text light-dark-text group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                                href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="h-5 w-5 shrink-0" aria-hidden="true">
                                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                                    <polyline points="10 17 15 12 10 7"></polyline>
                                                    <line x1="15" x2="3" y1="12" y2="12">
                                                    </line>
                                                </svg>Masuk
                                            </a>
                                        </li>
                                        <li>
                                            <a class="light-dark-text group flex gap-x-3 p-1.5 rounded-md text-sm leading-6 items-center"
                                                href="/daftar"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="text-sidebar-menu-fg group-hover:text-sidebar-menu-active h-5 w-5 shrink-0"
                                                    aria-hidden="true">
                                                    <circle cx="12" cy="8" r="5"></circle>
                                                    <path d="M20 21a8 8 0 1 0-16 0"></path>
                                                </svg>Daftar
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="px-4 drop-shadow-lg">
            <div class="shadow-sm h-28 relative p-0 rounded-none bg-sidebar-card">
                <div class="absolute -top-14">
                    <figure style="width:100px">
                        <img alt="object-1" width="100" height="100" decoding="async" data-nimg="1"
                            class="h-44 w-auto object-cover" style="" src="{{ $logo_sidebar_bawah }}"
                            loading="lazy" sizes="(max-width: 768px) 100vw, 100px">
                    </figure>
                </div>
                <div class="pl-28 pr-3 flex flex-col justify-around h-full z-30 py-2">
                    <p class="font-semibold text-sm light-dark-text">Join Grup</p>
                    <p class="font-semibold line-clamp-2 text-sm light-dark-text">{{ ENV('APP_NAME') }}</p>
                    <a
                        target="_blank"
                        class="h-5 py-4 rounded-full bg-purple-500 hover:bg-purple-700 text-white text-sm flex items-center justify-center font-medium"
                        href="https://wa.me/{{ $nomor_admin }}">Join Group</a>
                </div>
            </div>
        </div>
    </div>
</div>
