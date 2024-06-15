@extends('layout.main')

@section('content')
    <section id="faq" class="md:px-6 px-4 pt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 m-4 gap-8">
            <div class="w-full flex justify-center">
                <figure style="width: 500px;"><img alt="support" loading="lazy" width="500" height="500" decoding="async"
                        data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                        src="https://mobafams.com/_next/image?url=%2Fgifs%2Fsupport.gif&amp;w=3840&amp;q=75"
                        style="color: transparent;"></figure>
            </div>
            <div>
                <h1 class="text-[30px] font-medium light-dark-text">Dukungan Pelanggan</h1>
                <h1 class="text-[40px] font-bold light-dark-text">Centra Gaming Store</h1>
                <h1 class="text-[20px] mt-4 light-dark-text">Kami Siap Untuk Membantu Kamu</h1>
                <div class="space-y-4">
                    <div class="rounded-lg light-dark-text shadow-sm bg-sidebar-menu p-4 mt-6 cursor-pointer" onclick="window.location.href='{{ route('faq') }}'">
                        <div class="flex gap-5"><span
                                class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-orange-500 p-3"><img
                                    class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/faq.svg"></span>
                            <div>
                                <h2 class="font-bold text-lg">FAQ</h2>
                                <h3 class="text-sm">FAQ dapat memberikan Jabawan secara Instan yang terkait pertanyaan umum
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg light-dark-text shadow-sm bg-sidebar-menu p-4 mt-6">
                        <div class="flex gap-5"><span
                                class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-blue-500 p-3"><img
                                    class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/sms.svg"></span>
                            <div>
                                <h2 class="font-bold text-lg">Email</h2>
                                <h3 class="text-sm">Kami akan menghubungi Kamu 1x24 Jam</h3>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg light-dark-text shadow-sm bg-sidebar-menu p-4 mt-6">
                        <div class="flex gap-5"><span
                                class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-green-500 p-3"><img
                                    class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/wa.svg"></span>
                            <div>
                                <h2 class="font-bold text-lg">Whatsapp</h2>
                                <h3 class="text-sm">Rekomendasi untuk Kamu jika mengalami kendala yang sangat penting</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="md:px-6 px-4 mt-4">
        <div class="grid grid-cols-1 md:grid-cols-2 bg-sidebar-menu p-4 rounded-lg">
            <div class="w-full flex flex-col light-dark-text p-3 md:p-4 gap-8">
                <div class="space-y-4">
                    <p class="text-xl lg:text-2xl font-bold">Mengalami masalah dengan transaksi anda atau yang lainnya?</p>
                    <p class="text-lg font-medium mt-4">Silahkan masukkan laporan atau permintaan anda pada form yang
                        tersedia</p>
                </div>
                <figure class="md:block hidden" style="width: 500px;"><img alt="support" loading="lazy" width="500"
                        height="500" decoding="async" data-nimg="1" class=""
                        sizes="(max-width: 768px) 100vw, 100px"
                        src="https://mobafams.com/_next/image?url=%2Fimages%2Fsupport.png&amp;w=3840&amp;q=75"
                        style="color: transparent;"></figure>
            </div>
            <form>
                <div class="rounded-lg shadow-sm bg-navbar-bg">
                    <div class="flex flex-col space-y-1.5 p-6">
                        <h3 class="text-2xl font-semibold leading-none tracking-tight light-dark-text">Formulir Laporan / Permintaan</h3>
                        <p class="text-sm">Silahkan masukkan laporan / permintaan anda</p>
                    </div>
                    <div class="p-6 pt-0 space-y-6 mb-4 light-dark-text">
                        <div class="space-y-4">
                            <p class="text-xs md:text-sm font-semibold mb-2">Pelapor </p>
                            <div class="relative w-full "><button
                                    class="mb-4 relative cursor-default rounded-lg py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 w-full bg-white border"
                                    id="headlessui-listbox-button-:r37:" type="button" aria-haspopup="listbox"
                                    aria-expanded="false" data-headlessui-state="" fdprocessedid="wfxairh"><span
                                        class="block truncate">Pilih Tipe Pelapor</span><span
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                            <path fill-rule="evenodd"
                                                d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd"></path>
                                        </svg></span></button></div>
                            <p class="text-xs text-red-600 p-0"></p>
                            <p class="text-xs md:text-sm font-semibold mb-2">Tipe Laporan </p>
                            <div class="relative w-full "><button
                                    class="mb-4 relative cursor-default rounded-lg py-1.5 pl-4 pr-10 text-left text-gray-900 sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-violet-600 w-full bg-white border"
                                    id="headlessui-listbox-button-:r38:" type="button" aria-haspopup="listbox"
                                    aria-expanded="false" data-headlessui-state="" fdprocessedid="g5zw76"><span
                                        class="block truncate">Pilih Tipe Laporan</span><span
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                            <path fill-rule="evenodd"
                                                d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd"></path>
                                        </svg></span></button></div>
                            <p class="text-xs text-red-600 p-0"></p>
                            <div class="flex flex-col w-full">
                                <p class="text-xs md:text-sm font-semibold mb-2">Nama </p>
                                <div class="relative flex items-center"><input name="nama" autocomplete="off"
                                        autosave="false" type="text"
                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-purple-500 focus:outline-1 border-gray-300 border bg-white"
                                        placeholder="Masukan Nama"></div>
                            </div>
                            <div class="flex flex-col w-full">
                                <p class="text-xs md:text-sm font-semibold mb-2">Nomor Handphone </p>
                                <div class="relative flex items-center"><input name="nomor" autocomplete="off"
                                        autosave="false" type="text"
                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 text rounded-lg focus:outline-purple-500 focus:outline-1 border-gray-300 border bg-white"
                                        placeholder="Masukan nomor handphone"></div>
                            </div>
                            <div class="flex flex-col w-full">
                                <p class="text-xs md:text-sm font-semibold mb-2">Deskripsi </p>
                                <div class="relative flex items-center">
                                    <textarea rows="4" name="deskripsi" autocomplete="off" autosave="false" type="text"
                                        class="text-sm w-full text-black focus:outline-none focus:ring-0 ps-4 pe-4 pt-2 text rounded-lg focus:outline-purple-500 focus:outline-1 h-24 border-gray-300 border bg-white"
                                        placeholder="Masukan nomor handphone"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-center p-6 pt-0 flex flex-col gap-8"><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-11 rounded-md px-8 w-full bg-purple-700 hover:bg-purple-800 text-white">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
