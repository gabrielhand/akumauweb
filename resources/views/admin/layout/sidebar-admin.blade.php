<div id="sidebar-admin" class="hidden fixed lg:inset-y-0 lg:z-50 lg:flex w-80 lg:flex-col shadow-sm">
    <div class="sidebar-container bg-sidebar-admin pb-4 flex grow flex-col gap-y-3">
        <div class="flex h-16 md:h-[4.5rem] shrink-0 items-center px-10 justify-between gap-x-8 mt-6">
            <figure class="hidden lg:block cursor-pointer w-full relative justify-end">
                <img src="{{ request()->is('data/joki', 'data/giftskin', 'data/dmvilog') ? $settings->logo_header : $logo_header }}"
                    class="object-contain object-center" alt="logo-{{ ENV('APP_NAME') }}"
                    onclick="window.location.href='{{ route('home') }}'">
            </figure>
            <label class="flex cursor-pointer gap-2 light-dark-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
                <input type="checkbox" value="dark"
                    class="toggle theme-controller hover:bg-white hover:checked:bg-white bg-white [--tglbg:theme(colors.gray.200)] checked:bg-white checked:[--tglbg:theme(colors.purple.600)]" />
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </label>
        </div>
        <div id="bagian-menu" class="px-10 flex flex-col gap-y-2 lg:text-base text-sm mt-7">
            <div class="py-2 px-3">
                Menu
            </div>
            <a href="{{ route('dashboard') }}"
                class="{{ request()->is('dashboard') ? 'bg-purple-500 hover:bg-purple-500/80 flex duration-500 py-3 px-3 rounded-lg items-center gap-x-4 text-white' : 'bg-sidebar-menu-admin sidebar-text-inactive flex py-3 px-3 rounded-lg items-center gap-x-4 border border-purple-500' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                </svg>
                <p>Dashboard</p>
            </a>
            <div tabindex="0" class="collapse rounded-lg p-0">
                <div class="collapse-title p-0">
                    <div
                        class="{{ request()->is('pesanan', 'data/joki', 'data/giftskin', 'data/dmvilog') ? 'bg-purple-500 hover:bg-purple-500/80 flex gap-x-4 items-center rounded-lg text-white px-3 py-3' : 'bg-sidebar-menu-admin duration-500 sidebar-text-inactive flex gap-x-4 items-center rounded-lg border border-purple-500 px-3 py-3' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-basket-fill" viewBox="0 0 16 16">
                            <path
                                d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z" />
                        </svg>
                        <p class="flex-grow">Pesanan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </div>
                <div class="collapse-content flex flex-col ps-10 text-start gap-y-4">
                    <div class="{{ request()->is('pesanan') ? 'text-purple-500' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 mt-2 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('pesanan') }}'">Semua Pesanan</div>
                    <div class="{{ request()->is('data/joki') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('data.joki') }}'">Pesanan Joki</div>
                    <div class="{{ request()->is('data/giftskin') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('data.giftskin') }}'">Pesanan Gift Skin</div>
                    <div class="{{ request()->is('data/dmvilog') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('data.dmvilog') }}'">Pesanan Vilog</div>
                </div>
            </div>
            <div tabindex="0" class="collapse rounded-lg p-0 -mt-2.5">
                <div class="collapse-title p-0">
                    <div
                        class="{{ request()->is('user-deposit', 'member') ? 'bg-purple-500 hover:bg-purple-500/80 flex gap-x-4 items-center rounded-lg text-white px-3 py-3' : 'bg-sidebar-menu-admin duration-500 sidebar-text-inactive flex gap-x-4 items-center rounded-lg border border-purple-500 px-3 py-3' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z" />
                        </svg>
                        <p class="flex-grow text-start">Member</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </div>
                <div class="collapse-content flex flex-col ps-10 text-start gap-y-4">
                    <div class="{{ request()->is('user-deposit') ? 'text-purple-500' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 mt-2 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('user.deposit') }}'">Member Deposit</div>
                    <div class="{{ request()->is('member') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('kmember') }}'">Kelola Member</div>
                </div>
            </div>
        </div>
        <div id="bagian-settings" class="px-10 flex flex-col gap-y-2 lg:text-base text-sm">
            <div class="py-2 px-3">
                Settings
            </div>
            <div tabindex="0" class="collapse rounded-lg p-0">
                <div class="collapse-title p-0">
                    <div
                        class="{{ request()->is('berita', 'method', 'data/giftskin', 'data/dmvilog') ? 'bg-purple-500 hover:bg-purple-500/80 flex gap-x-4 items-center rounded-lg text-white px-3 py-3' : 'bg-sidebar-menu-admin duration-500 sidebar-text-inactive flex gap-x-4 items-center rounded-lg border border-purple-500 px-3 py-3' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path
                                d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001" />
                        </svg>
                        <p class="flex-grow">Konfigurasi</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </div>
                <div class="collapse-content flex flex-col ps-10 text-start gap-y-4">
                    <div class="{{ request()->is('berita') ? 'text-purple-500' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 mt-2 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('berita') }}'">Slider</div>
                    <div class="{{ request()->is('method') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('method') }}'">Payment</div>
                    <div class="{{ request()->is('setting/web') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('setting-web.index') }}'">Website</div>
                    <div class="{{ request()->is('data/dmvilog') ? 'text-purple-600' : 'sidebar-text-inactive' }} hover:text-purple-500 duration-300 hover:translate-x-3 cursor-pointer text-sm"
                        onclick="window.location.href='{{ route('data.dmvilog') }}'">Footer</div>
                </div>
            </div>
        </div>
        <div id="bagian-logout" class="px-10 flex flex-col gap-y-2 lg:text-base text-sm">
            <div class="py-2 px-3">
                Logout
            </div>
            <a href="{{ route('home') }}"
                class="bg-sidebar-menu-admin flex sidebar-text duration-500 py-3 px-3 rounded-lg text-white items-center gap-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                </svg>
                <p>Kembali ke Website</p>
            </a>
            <div>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex w-full bg-red-500 hover:bg-red-700 duration-500 py-3 px-3 rounded-lg text-white items-center gap-x-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-basket-fill" viewBox="0 0 16 16">
                            <path
                                d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z" />
                        </svg>
                        <p>Logout</p>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
