<div id="AccountPINSettingForm" class="space-y-3 mt-8 light-dark-text">
    <h3 class="text-lg md:text-xl font-semibold">PIN Security</h3>
    <div class="rounded-lg border shadow-sm p-5 bg-sidebar-menu border-none grid grid-cols-1 gap-8">
        <form>
            <div class="flex-col">
                <div class="flex gap-3 md:flex-row flex-col w-full">
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">OTP </p>
                        <div class="relative flex items-center">
                            <input name="otp" autocomplete="off" autosave="false" type="number"
                                class="border border-black text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-full bg-white"
                                placeholder="Masukan OTP">
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">PIN Baru </p>
                        <div class="relative flex items-center">
                            <input name="pinbaru" autocomplete="new-password" autosave="false" type="password"
                                class="border border-black text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] rounded-full bg-white"
                                placeholder="Masukan PIN baru">
                            <div
                                class="absolute mr-4 right-0 cursor-pointer pointer-events-auto text-black toggle-password-slash">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                    class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                    </path>
                                </svg>
                            </div>
                            <div class="absolute mr-4 right-0 cursor-pointer pointer-events-auto text-black toggle-password-eye"
                                style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">Konfirmasi PIN Baru </p>
                        <div class="relative flex items-center">
                            <input name="pinbaru_confirmation" autocomplete="new-pin" autosave="false" type="password"
                                class="border border-black text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-[48px] rounded-full bg-white"
                                placeholder="Masukan Konfirmasi PIN baru">
                            <div class="absolute mr-4 right-0 cursor-pointer pointer-events-auto text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                    class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-3 float-right items-center mt-8">
                    <button
                        class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 h-10 px-4 py-2 w-full rounded-full whitespace-nowrap"
                        type="button">Kirim OTP</button>
                    <div>
                        <button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-purple-500 text-white hover:bg-purple-500/80 h-10 px-4 py-2 rounded-full float-right"
                            type="submit">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
