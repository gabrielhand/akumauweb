<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $judul_web }}</title>
    <link rel="icon" href="{{ $logo_header }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="flex flex-row h-screen overflow-y-auto">
        <!-- Sidebar -->
        <div class="sm:flex md:basis-5/6 hidden w-40 flex-col bg-purple-700 px-4 py-12 sticky left-0 top-0">
            <div class="md:flex hidden flex-col gap-3 h-full justify-evenly z-20">
                <a href="/" class="flex items-center text-4xl text-white gap-x-3">
                    <img src="{{ $logo_header }}" alt="logo" style="max-width: 12rem; max-height: 3rem;">
                    {{ env('APP_NAME') }}
                </a>
                <span class="text-xl xl:text-2xl text-white mt-4 font-semibold">THE FAMOUS TOP UP GAME !</span>
                <span class="text-lg text-white">Get the best offer now</span>
                <div class="h-full"></div>
                <div class="flex flex-row justify-between gap-6">
                    <div
                        class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group duration-200 ease-in-out w-full rounded-xl">
                        <img src="https://mobafams.com/icons/fast-payment.png" alt="Fast Payment"
                            class="h-10 w-10 object-contain">
                        <span
                            class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Fast
                            Payment</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group duration-200 ease-in-out w-full rounded-xl">
                        <img src="https://mobafams.com/icons/fast-process.png" alt="Fast Process"
                            class="h-10 w-10 object-contain">
                        <span
                            class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Fast
                            Process</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group duration-200 ease-in-out w-full rounded-xl">
                        <img src="https://mobafams.com/icons/full-support.png" alt="Full Support"
                            class="h-10 w-10 object-contain">
                        <span
                            class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Full
                            Support</span>
                    </div>
                </div>
            </div>
            <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:nextopup/p/login.jpg"
                alt="Background" class="h-full w-full absolute object-cover items-center left-0 top-0 brightness-50">
        </div>

        <!-- Main Content -->
        <div class="flex w-full flex-col p-6">
            <div class="fixed top-0 right-0 p-3">
                <button
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-10 px-4 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col min-h-screen md:min-h-[90vh] py-10">
                <div class="justify-center mb-4 block md:hidden">
                    <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/logo.png"
                        alt="logo" class="w-48">
                </div>
                <div>
                    <div dir="ltr" data-orientation="horizontal" class="w-full">
                        <!-- Tabs -->
                        <div role="tablist" aria-orientation="horizontal"
                            class="inline-flex items-center justify-center rounded-md text-muted-foreground w-full h-12 md:h-14 lg:h-16 p-2 bg-header"
                            tabindex="0" data-orientation="horizontal">
                            <button type="button" role="tab" aria-selected="true" aria-controls="login-content"
                                data-state="active" id="login-tab"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:text-white data-[state=active]:shadow-sm w-full h-full data-[state=active]:bg-login-btn"
                                tabindex="-1" data-orientation="horizontal">Masuk</button>
                            <button type="button" role="tab" aria-selected="false" aria-controls="daftar-content"
                                data-state="inactive" id="daftar-tab"
                                class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:text-white data-[state=active]:shadow-sm w-full h-full data-[state=inactive]:bg-login-btn"
                                tabindex="-1" data-orientation="horizontal">Daftar</button>
                        </div>

                        <!-- Login Form -->
                        <div data-state="active" data-orientation="horizontal" role="tabpanel"
                            aria-labelledby="login-tab" id="login-content" tabindex="0"
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                            <form>
                                <div class="rounded-lg border text-card-foreground shadow-sm bg-header">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight">Silahkan Masuk
                                        </h3>
                                        <p class="text-sm text-muted-foreground">Masuk menggunakan Akun terdaftar Kamu
                                        </p>
                                    </div>
                                    <div class="p-6 pt-0 space-y-6 mb-4">
                                        <div class="space-y-4">
                                            <div class="flex flex-col w-full">
                                                <label for="login-nomor"
                                                    class="text-xs md:text-sm font-semibold mb-2">Nomor
                                                    Handphone</label>
                                                <input id="login-nomor" name="login.nomor" type="text"
                                                    autocomplete="off"
                                                    class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                    placeholder="Masukan nomor handphone">
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <label for="login-password"
                                                    class="text-xs md:text-sm font-semibold mb-2">Password</label>
                                                <div class="relative flex items-center">
                                                    <input id="login-password" name="login.password" type="password"
                                                        autocomplete="new-password"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan password">
                                                    <div class="absolute mr-4 right-0 cursor-pointer text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M21.065 15.777A10.478 10.478 0 0 0 22.066 12c-1.292-4.338-5.31-7.5-10.066-7.5-.993 0-1.953.138-2.863.395M3.98 8.223 8.9 13.144M15.1 8.223l-1.3 1.3">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col w-full mt-4 gap-3">
                                                <button type="submit"
                                                    class="w-full text-white transition-all rounded-lg focus:outline-none focus:ring-0 h-10 py-2 bg-login-btn">Masuk</button>
                                                <a href="#" class="text-blue-700 text-sm text-center">Lupa
                                                    Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Register Form -->
                        <div data-state="inactive" data-orientation="horizontal" role="tabpanel"
                            aria-labelledby="daftar-tab" id="daftar-content"
                            tabindex="0"
                            class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                            <form>
                                <div class="rounded-lg border text-card-foreground shadow-sm bg-header">
                                    <div class="flex flex-col space-y-1.5 p-6">
                                        <h3 class="text-2xl font-semibold leading-none tracking-tight">Silahkan Daftar
                                        </h3>
                                        <p class="text-sm text-muted-foreground">Masukan informasi pendaftaran dengan
                                            benar</p>
                                    </div>
                                    <div class="p-6 pt-0 space-y-6 mb-4">
                                        <div class="space-y-4">
                                            <div class="flex flex-col w-full">
                                                <p class="text-xs md:text-sm font-semibold mb-2">Nama Lengkap </p>
                                                <div class="relative flex items-center"><input name="daftar.full_name"
                                                        autocomplete="off" autosave="false" type="text"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan nama lengkap" fdprocessedid="aszf2">
                                                </div>
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <p class="text-xs md:text-sm font-semibold mb-2">Email </p>
                                                <div class="relative flex items-center"><input name="daftar.email"
                                                        autocomplete="off" autosave="false" type="text"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan E-mail" fdprocessedid="a0otqa"></div>
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <p class="text-xs md:text-sm font-semibold mb-2">Nomor Handphone </p>
                                                <div class="relative flex items-center"><input name="daftar.ponsel"
                                                        autocomplete="off" autosave="false" type="text"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan nomor handphone" fdprocessedid="73epv">
                                                </div>
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <p class="text-xs md:text-sm font-semibold mb-2">Password </p>
                                                <div class="relative flex items-center"><input name="daftar.password"
                                                        autocomplete="new-password" autosave="false" type="password"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan password" fdprocessedid="xn80en">
                                                    <div
                                                        class="absolute mr-4 right-0 cursor-pointer pointer-events-auto text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" aria-hidden="true" data-slot="icon"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col w-full">
                                                <p class="text-xs md:text-sm font-semibold mb-2">Konfirmasi Password
                                                </p>
                                                <div class="relative flex items-center"><input
                                                        name="daftar.konfirmasi_password" autocomplete="new-password"
                                                        autosave="false" type="password"
                                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] text rounded-lg focus:outline-blue-500 focus:outline-1"
                                                        placeholder="Masukan konfirmasi password"
                                                        fdprocessedid="u12xiq">
                                                    <div
                                                        class="absolute mr-4 right-0 cursor-pointer pointer-events-auto text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" aria-hidden="true" data-slot="icon"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items-center p-6 pt-0 flex flex-col gap-8"><button
                                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-11 rounded-md px-8 w-full bg-login-btn hover:bg-login-btn/95 text-white"
                                            fdprocessedid="z1eg3p">Daftar</button>
                                        <div>Sudah punya akun? <strong class="cursor-pointer">Login Sekarang</strong>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
