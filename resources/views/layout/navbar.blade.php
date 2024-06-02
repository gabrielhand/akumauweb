<header
    class="flex h-16 sticky top-0 md:h-[4.5rem] items-center z-40 shrink-0 lg:px-8 header-shadow bg-navbar-bg">
    <div class="flex lg:hidden gap-4"><button type="button" class="-m-2.5 p-2.5 text-foreground lg:hidden"><span
                class="sr-only">Open sidebar</span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
            </svg></button><a class="p-0 h-10 w-[80px] relative" href="/">
            <figure style="width:undefinedpx" class="cursor-pointer block md:hidden p-0"><img alt="logo"
                    loading="lazy" decoding="async" data-nimg="fill" class="object-contain"
                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                    sizes="(max-width: 768px) 100vw, 100px"
                    srcset="/_next/image?url=%2Flogo.png&amp;w=640&amp;q=75 640w, /_next/image?url=%2Flogo.png&amp;w=750&amp;q=75 750w, /_next/image?url=%2Flogo.png&amp;w=828&amp;q=75 828w, /_next/image?url=%2Flogo.png&amp;w=1024&amp;q=75 1024w, /_next/image?url=%2Flogo.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Flogo.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Flogo.png&amp;w=1600&amp;q=75 1600w, /_next/image?url=%2Flogo.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Flogo.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Flogo.png&amp;w=3840&amp;q=75 3840w"
                    src="https://mobafams.com/_next/image?url=%2Flogo.png&amp;w=3840&amp;q=75"></figure>
        </a></div>
    <div class="flex gap-4 items-center justify-end md:justify-between w-full">
        <div class="gap-5 md:gap-10 flex justify-end w-full">
            <label class="swap swap-theme swap-rotate light-dark-text px-2.5 py-1 rounded-md">

                <!-- this hidden checkbox controls the state -->
                <input type="checkbox" class="theme-controller" value="dark" />

                <!-- sun icon -->
                <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                </svg>

                <!-- moon icon -->
                <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                </svg>

            </label>
            <div class="hidden md:flex gap-3">
                <a id="header-login-link"
                    class="bg-gradient-to-r from-[#a600ff] to-[#8217bc] text-white gap-x-3 rounded-xl h-11 px-8 py-2 inline-flex items-center justify-center ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85"
                    href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-in">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" x2="3" y1="12" y2="12"></line>
                    </svg> Masuk</a>
                <a id="header-daftar-link"
                    class="bg-gradient-to-r from-[#a600ff] to-[#8217bc] text-white gap-x-3 rounded-xl h-11 px-8 py-2 inline-flex items-center justify-center ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85"
                    href="/register"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user2">
                        <circle cx="12" cy="8" r="5"></circle>
                        <path d="M20 21a8 8 0 1 0-16 0"></path>
                    </svg> Daftar</a>
            </div>
        </div>
    </div>
</header>
