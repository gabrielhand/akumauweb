<header
    class="flex h-16 sticky top-0 md:h-[4.5rem] items-center z-40 shrink-0 lg:px-8 md:px-4 sm:px-2 header-shadow bg-navbar-bg">
    <div class="flex lg:hidden gap-4">
        <button type="button" class="p-2.5 text-foreground lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true" data-slot="icon" class="light-dark-text h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
            </svg>
        </button>
        <a class="p-0 relative" href="/">
            <figure class="cursor-pointer p-0 flex items-center justify-center h-full gap-2">
                <img alt="logo" class="h-6 w-12" src="{{ $logo_header }}">
                <p class="text-lg font-semibold light-dark-text">{{ ENV('APP_NAME') }}</p>
            </figure>
        </a>
    </div>
    <div class="flex gap-4 items-center justify-end md:justify-between w-full">
        <div class="gap-5 md:gap-10 flex justify-end w-full">
            <label class="swap swap-theme swap-rotate light-dark-text px-2.5 py-2.5 rounded-md">
                <input type="checkbox" class="theme-controller" id="theme-toggle" value="dark" />
                <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z">
                    </path>
                </svg>
                <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z">
                    </path>
                </svg>
            </label>
            <div>
                @auth
                    <div class="flex gap-3 items-center">
                        <button type="button" id="btn-menu">
                            <span
                                class="relative flex shrink-0 overflow-hidden rounded-full h-8 w-8 md:h-10 md:w-10 bg-gradient-to-r from-blue-400 via-purple-500 to-orange-500 animate-background-animate">
                                <img id="navbarImage" class="aspect-square h-full w-full" alt="profile"
                                    src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://picsum.photos/400/400' }}"
                                    style="color: transparent;">
                            </span>
                        </button>
                    </div>
                    <div dir="ltr" class="menu-content hidden absolute end-8 top-16">
                        <div class="z-50 min-w-[8rem] overflow-hidden rounded-md border-menu bg-navbar-bg p-1 light-dark-text shadow-md"
                            style="outline: none;">
                            <div id="usernameNavbar" class="px-2 py-1.5 text-sm font-semibold">{{ auth()->user()->username }}</div>
                            <div class="-mx-1 my-1 h-px border-menu-bottom"></div>
                            <div
                                class="relative bg-item-menu flex cursor-pointer select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground">
                                Akun
                            </div>
                            <div
                                class="relative bg-item-menu flex cursor-pointer select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground">
                                <div class="flex gap-8">Mode Gelap
                                    <input type="checkbox" value="dark"
                                        class="theme-controller toggle border-none hover:bg-white hover:checked:bg-black bg-white [--tglbg:theme(colors.gray.200)] checked:bg-black checked:[--tglbg:theme(colors.purple.600)] row-start-1 col-start-1 col-span-2" />
                                </div>
                            </div>
                            <div
                                class="relative bg-item-menu flex cursor-pointer select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors">
                                <form action="/logout" method="POST" class="flex-grow">
                                    @csrf
                                    <button type="submit" class="w-full text-start">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="flex gap-x-3">
                        <a id="header-login-link"
                            class="bg-gradient-to-r from-[#a600ff] to-[#8217bc] text-white gap-x-3 rounded-xl h-11 px-8 py-2 inline-flex items-center justify-center ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85"
                            href="/login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-log-in2">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                <polyline points="10 17 15 12 10 7"></polyline>
                                <line x1="15" x2="3" y1="12" y2="12"></line>
                            </svg> Masuk
                        </a>
                        <a id="header-daftar-link"
                            class="bg-gradient-to-r from-[#a600ff] to-[#8217bc] text-white gap-x-3 rounded-xl h-11 px-8 py-2 inline-flex items-center justify-center ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85"
                            href="/register">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user2">
                                <circle cx="12" cy="8" r="5"></circle>
                                <path d="M20 21a8 8 0 1 0-16 0"></path>
                            </svg> Daftar
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>

<style>
    :root {
        --bg-m-light: #ffffff;
        --bg-im-light: rgb(229 231 235 / 0.7);
        --border-m-light: rgb(229 231 235 / 0.7);

        --bg-m-dark: #000000;
        --bg-im-dark: rgb(147 51 234 / 0.15);
        --border-m-dark: rgb(147 51 234 / 0.15);
    }

    [data-theme="light"] {
        --bg-im: var(--bg-im-light);
        --border-m: var(--border-m-light);
    }

    [data-theme="dark"] {
        --bg-im: var(--bg-im-dark);
        --border-m: var(--border-m-dark);
    }

    .bg-item-menu:hover {
        background-color: var(--bg-im);
    }

    .border-menu {
        border: 1.5px solid var(--border-m);
    }

    .border-menu-bottom {
        border-bottom: 1.5px solid var(--border-m);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnMenu = document.getElementById('btn-menu');
        const menuContent = document.querySelector('.menu-content');
        const themeToggleCheckbox = document.getElementById('theme-toggle');
        const allThemeControllers = document.querySelectorAll('.theme-controller');

        const toggleMenu = () => menuContent.classList.toggle('hidden');
        const hideMenu = (event) => {
            if (!menuContent.contains(event.target) && !btnMenu.contains(event.target)) {
                menuContent.classList.add('hidden');
            }
        };

        const applyTheme = (theme) => {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            allThemeControllers.forEach(controller => {
                controller.checked = theme === 'dark';
            });
        };

        const storedTheme = localStorage.getItem('theme') || 'dark';
        applyTheme(storedTheme);

        btnMenu.addEventListener('click', toggleMenu);
        document.addEventListener('click', hideMenu);

        allThemeControllers.forEach(controller => {
            controller.addEventListener('change', (event) => {
                const theme = event.target.checked ? 'dark' : 'light';
                applyTheme(theme);
            });
        });
    });
</script>
