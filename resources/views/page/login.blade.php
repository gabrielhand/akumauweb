@extends('layout.main-register-login')

@section('content')
    <div class="sm:flex hidden md:basis-5/6 w-40 flex-col bg-purple-700 px-4 py-12 sticky left-0 top-0">
        <div class="md:flex hidden flex-col gap-3 h-full justify-evenly z-20">
            <a href="/" class="flex gap-x-3 text-white text-4xl items-center ">
                <img src="{{ $logo_header }}" alt="logo" class="w-18 h-14">{{ ENV('APP_NAME') }}</a>
            <span class="text-xl xl:text-2xl text-white mt-4 font-bold">THE
                FAMOUS TOP UP GAME !</span>
            <span class="text-lg text-white ">Get the best offer now</span>
            <div class="h-full"></div>
            <div class="flex flex-row justify-between gap-6 ">
                <div
                    class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group duration-200 ease-in-out w-full rounded-xl">
                    <img src="https://mobafams.com/icons/fast-payment.png" alt="logo"
                        class="h-10 w-10 object-contain items-center"><span
                        class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Fast
                        Payment</span>
                </div>
                <div
                    class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group  duration-200 ease-in-out w-full rounded-xl">
                    <img src="https://mobafams.com/icons/fast-process.png" alt="logo"
                        class="h-10 w-10 object-contain items-center"><span
                        class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Fast
                        Process</span>
                </div>
                <div
                    class="flex flex-col items-center justify-between py-4 gap-2 bg-white transition-all group  duration-200 ease-in-out w-full rounded-xl">
                    <img src="https://mobafams.com/icons/full-support.png" alt="logo"
                        class="h-10 w-10 object-contain items-center"><span
                        class="text-[#4B4A4A] text-sm text-center w-full transition-all duration-200 ease-in-out">Full
                        Support</span>
                </div>
            </div>
        </div><img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:nextopup/p/login.jpg"
            alt="logo" class="h-full w-full absolute object-cover items-center left-0 top-0 brightness-50">
    </div>
    <div class="flex w-full flex-col p-6">
        <div class="fixed top-0 right-0 p-3">
            <button type="button" onclick="window.location.href='{{ route('home') }}'"
                class="inline-flex light-dark-text items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-10 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x">
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
                <div dir="ltr" class="w-full">
                    <div class="inline-flex items-center justify-center rounded-md text-muted-foreground w-full h-12 md:h-14 lg:h-16 p-2 bg-header"
                        tabindex="0" style="outline: none;">
                        <button type="button" role="tab" onclick="window.location.href='{{ route('login') }}'"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-white shadow-sm w-full h-full bg-[#A600FF]">
                            Masuk</button>
                        <button type="button" role="tab" onclick="window.location.href='{{ route('register') }}'"
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 text-gray-500 shadow-sm w-full h-full">
                            Daftar</button>
                    </div>
                    <div data-state="active" data-orientation="horizontal" role="tabpanel"
                        aria-labelledby="radix-:r2i:-trigger-login" id="radix-:r2i:-content-login" tabindex="0"
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2"
                        style="animation-duration: 0s;">
                        <form id="login-form" action="{{ route('post.login') }}" method="post">
                            @csrf
                            <div class="rounded-lg light-dark-text shadow-sm bg-header">
                                <div class="flex flex-col space-y-1.5 p-6">
                                    <h3 class="text-2xl font-semibold leading-none tracking-tight">Silahkan Masuk
                                    </h3>
                                    <p class="text-sm text-muted-foreground">Masuk menggunakan Akun terdaftar Kamu
                                    </p>
                                </div>
                                <div class="p-6 pt-0 space-y-6 mb-4">
                                    <div class="space-y-5">
                                        <div class="flex flex-col w-full gap-y-1">
                                            <p class="text-xs md:text-sm font-semibold mb-2">Username </p>
                                            <div class="relative flex items-center">
                                                <input name="username" autocomplete="off" value="{{ old('username') }}"
                                                    autosave="false" type="text"
                                                    class="@error('username') outline-1 outline-red-500  @enderror text-sm w-full bg-white text-black outline-none ring-0 outline-black outline-1 focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-purple-500 focus:outline-1"
                                                    placeholder="Masukan username">
                                                @error('username')
                                                    <div class="absolute top-11 w-full text-start text-xs text-red-500">{{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex flex-col w-full gap-y-1">
                                            <p class="text-xs md:text-sm font-semibold mb-2">Password </p>
                                            <div class="relative flex items-center">
                                                <input name="password" autocomplete="new-password" autosave="false"
                                                    type="password"
                                                    class="@error('password') outline-1 outline-red-500 @enderror text-sm w-full bg-white text-black outline-none ring-0 outline-black outline-1 focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] text rounded-lg focus:outline-purple-500 focus:outline-1"
                                                    placeholder="Masukan password">
                                                
                                                <div class="absolute mr-4 right-0 cursor-pointer pointer-events-auto toggle-password-slash text-black"
                                                    style="display: block;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        aria-hidden="true" data-slot="icon" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="absolute mr-4 right-0 cursor-pointer pointer-events-auto toggle-password-eye text-black"
                                                    style="display: none;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                        <path
                                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                    </svg>
                                                </div>
                                                @error('password')
                                                    <div class="absolute top-11 text-red-500 w-full text-start text-xs">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="flex items-center space-x-2">
                                            <button type="button" role="checkbox" aria-checked="false"
                                                data-state="unchecked" value="on"
                                                class="peer h-4 w-4 shrink-0 rounded-sm border border-primary ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-purple-700 data-[state=checked]:text-white"
                                                id="terms">
                                            </button>
                                            <input type="checkbox" aria-hidden="true" tabindex="-1" value="on"
                                                style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 16px; height: 16px;"><label
                                                for="terms"
                                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Ingatkan
                                                Saya</label>
                                        </div>
                                        <a href="/forgotpassword">Lupa Password</a>
                                    </div>
                                </div>
                                <div class="items-center p-6 pt-0 flex flex-col gap-8">
                                    <button type="submit" id="submit-button"
                                        class="inline-flex gap-x-2 items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-11 rounded-md px-8 w-full bg-purple-600 hover:bg-purple-700 text-white">
                                        <span class="loading loading-spinner loading-xs" style="display:none;"></span>
                                        <span>Masuk</span>
                                    </button>
                                    <div>Belum punya akun?
                                        <button type="button" onclick="window.location.href='{{ route('register') }}'">
                                            <strong class="cursor-pointer">Daftar Sekarang
                                            </strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div
                        class="mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2">
                    </div>
                </div>
                <div class="h-10 w-full"></div>
            </div>
        </div>
    </div>
    <style>
        input::-ms-reveal,
        input::-ms-clear {
            display: none;
        }

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var togglesSlash = document.querySelectorAll(".toggle-password-slash");
            var togglesEye = document.querySelectorAll(".toggle-password-eye");

            togglesSlash.forEach(function(toggle) {
                toggle.addEventListener("click", function() {
                    var input = toggle.previousElementSibling;
                    if (input.type === "password") {
                        input.type = "text";
                        toggle.style.display = "none";
                        var eyeIcon = toggle.nextElementSibling;
                        if (eyeIcon.classList.contains('toggle-password-eye')) {
                            eyeIcon.style.display = "block";
                        }
                    }
                });
            });

            togglesEye.forEach(function(toggle) {
                toggle.addEventListener("click", function() {
                    var input = toggle.previousElementSibling.previousElementSibling;
                    if (input.type === "text") {
                        input.type = "password";
                        toggle.style.display = "none";
                        var slashIcon = toggle.previousElementSibling;
                        if (slashIcon.classList.contains('toggle-password-slash')) {
                            slashIcon.style.display = "block";
                        }
                    }
                });
            });

            var submitButton = document.getElementById('submit-button');
            var form = document.getElementById('login-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                submitButton.disabled = true;
                submitButton.classList.add('disabled:brightness-75');

                document.querySelector('.loading').style.display = 'block';

                form.submit();
            });

            var inputs = form.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.addEventListener('focus', function() {
                    input.classList.remove('outline-red-500');
                    var errorText = input.parentElement.querySelector('.text-red-500');
                    if (errorText) {
                        errorText.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
