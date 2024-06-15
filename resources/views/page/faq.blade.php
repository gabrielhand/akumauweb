@extends('layout.main')

@section('content')
    <section id="faq" class="md:px-6 px-4 pt-8">
        <h1 class="text-center font-bold text-lg light-dark-text">FAQ</h1>
        <p class="text-center light-dark-text">Frequently Asked Questions</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 m-4">
            <div class="w-full flex">
                <figure style="width: 500px;"><img alt="Faq" loading="lazy" width="500" height="500" decoding="async"
                        data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                        src="https://mobafams.com/_next/image?url=%2Fgifs%2FFaq.gif&amp;w=3840&amp;q=75"
                        style="color: transparent;"></figure>
            </div>
            <div class="mt-4 flex flex-col">
                <div class="collapse -my-2">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium p-0">
                        <div class="flex gap-4 items-center bg-sidebar-menu rounded-2xl px-4 py-4">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-purple-500 p-3">
                                <img class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/faq.svg"></span>
                            <h1 class="text-start text-lg font-semibold light-dark-text flex-1">Tentang</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="collapse-content px-1 py-3 flex flex-col gap-y-1">
                        <div class="collapse">
                            <input type="checkbox" />
                            <div class="collapse-title text-xl font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center text-purple-500 rounded-full text-lg shrink-0 bg-sidebar-menu">
                                        1</div>
                                    <div class="text-sm flex-grow font-semibold text-start light-dark-text">
                                        <p>Tentang Nama Toko</p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content py-1 flex flex-col gap-y-3">
                                <p class="light-dark-text text-sm">{!! $deskripsi_web !!}</p>
                                <p class="light-dark-text text-sm"><strong>Centragamingstore</strong> Indonesia
                                    mempunyai visi {!! $visi !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse -my-2">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium p-0">
                        <div class="flex gap-4 items-center bg-sidebar-menu rounded-2xl px-4 py-4">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-purple-500 p-3">
                                <img class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/faq.svg"></span>
                            <h1 class="text-start text-lg font-semibold light-dark-text flex-1">Masalah Pembayaran</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="collapse-content px-1 py-3 flex flex-col gap-y-1">
                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        1</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Pembayaran
                                        saya tertunda. Apa yang dapat saya lakukan?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">Pertama-tama, periksa batas waktu metode
                                    pembayaran. Jika
                                    tenggat waktu ini telah kedaluwarsa, hubungi tim dukungan kami untuk
                                    membantu Anda mengatasi masalah ini.</div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        2</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Untuk apa
                                        Saldo?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">Saldo berfungsi sebagai jenis dompet digital
                                    di mana
                                    pemain dapat mengisi ulang sejumlah Saldo yang
                                    diinginkan untuk membeli produk apa pun di toko dengan cepat dan mudah.
                                    Faktanya, salah satu keunggulan Saldo (jika Anda mau)
                                    adalah kecepatan pengiriman produk, karena pembayaran langsung disetujui.
                                    Keuntungan lainnya adalah kemungkinan pengguna dapat menggunakan produk apa
                                    pun di toko.
                                    Jika Anda ingin berpartisipasi dalam promosi yang sedang berlangsung pada
                                    suatu produk di toko dan tidak ingin mengambil risiko dengan tenggat waktu
                                    pembayaran,
                                    Anda dapat menggunakan Saldo untuk segera menyetujui pembelian,
                                    menjamin partisipasi Anda dalam acara/promosi.</div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        3</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Pesanan
                                        saya sukses,
                                        tetapi
                                        saya belum menerima produk saya. Apa yang harus saya lakukan?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">Dalam kasus yang sangat jarang, sistem
                                    mungkin tidak
                                    mengirim dan jika itu terjadi, Anda harus pergi ke dukungan dan beri
                                    tahu
                                    kami sehingga kami akan menampilkan informasi pembayaran dan
                                    menganalisis
                                    riwayat untuk melihat apakah produk dikirim dengan benar atau tidak.</div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        4</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Pembayaran
                                        apa saja yang tersedia?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">
                                    <p>Pembayaran <strong>Centra Gaming Store </strong>ada 4 jenis<br>yaitu, Saldo,
                                        Ewallet, Retail dan Virtual Account.</p>
                                    <p>Saldo adalah dompet digital NamaToko, <br>Ewallet tersedia Qris, Ovo,
                                        Dana, Shopeepay, Link Aja.<br>Retail tersedia Indomaret,
                                        Alfamart.<br>Virtual Account tersedia BNI,MANDIRI,BRI,BSI dll</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="collapse -my-2">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium p-0">
                        <div class="flex gap-4 items-center bg-sidebar-menu rounded-2xl px-4 py-4">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-purple-500 p-3">
                                <img class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/faq.svg"></span>
                            <h1 class="text-start text-lg font-semibold light-dark-text flex-1">Pesanan</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="collapse-content px-1 py-3 flex flex-col gap-y-1">
                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        1</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Saya
                                        salah memasukkan ID akun saya saat membeli produk. Apa yang harus saya
                                        lakukan?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">Seperti yang kita bicarakan di topik
                                    sebelumnya, kita tidak dapat melakukan perubahan apa pun pada pembelian. Dalam
                                    hal ini, Anda perlu menghubungi pengembang untuk melihat apakah ada kemungkinan
                                    untuk melakukan pertukaran ID ini.</div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        2</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">Pesanan
                                        saya sukses, tetapi saya belum menerima produk saya. Apa yang harus saya
                                        lakukan?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">Dalam kasus yang sangat jarang, sistem
                                    mungkin tidak mengirim dan jika itu terjadi, Anda harus pergi ke dukungan dan
                                    beri tahu kami sehingga kami akan menampilkan informasi pembayaran dan
                                    menganalisis riwayat untuk melihat apakah produk dikirim dengan benar atau
                                    tidak.</div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        3</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">
                                        Bagaimana cara kerja pengiriman produk yang dibeli di Centra Gaming Store?
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">
                                    <p>Untuk memahami bagian ini, kita harus memperhatikan bagaimana alur kerja
                                        secara lengkap,<br> mulai dari pembelian hingga penerimaan produk. <br>
                                        Siklusnya dimulai seperti ini:<br> <br> 1. Pembeli membayar produk.<br> 2.
                                        Sistem otomatis akan mengecek pembayaran anda.<br> 3. Bank mengkonfirmasi
                                        kepada kami bahwa uang telah diterima.<br> 4. Centra Gaming Store memberi
                                        tahu Anda
                                        bahwa pesanan telah dibayarkan. <br> Lalu Anda akan menerima produk yang
                                        Anda beli.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse -my-2">
                    <input type="checkbox" />
                    <div class="collapse-title text-xl font-medium p-0">
                        <div class="flex gap-4 items-center bg-sidebar-menu rounded-2xl px-4 py-4">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full h-12 w-12 bg-purple-500 p-3">
                                <img class="aspect-square h-full w-full" alt="profile"
                                    src="https://mobafams.com/svgs/faq.svg"></span>
                            <h1 class="text-start text-lg font-semibold light-dark-text flex-1">Masalah Akun</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4 shrink-0 transition-transform duration-200">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="collapse-content px-1 py-3 flex flex-col gap-y-1">
                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        1</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">
                                        Bagaimana cara buat akun Centra Gaming Store?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">
                                    <p>1. Masuk ke https://centragamingstore.com/login<br>2. Pilih daftar<br>3. Isi
                                        data
                                        sesuai data diri<br>4. Cek Kode Verifikasi di WhatsApp Kamu</p>
                                </div>
                            </div>
                        </div>

                        <div class="collapse bg-transparent">
                            <input type="checkbox" />
                            <div class="collapse-title font-medium">
                                <div class="flex gap-4 items-center text-start ps-2">
                                    <div
                                        class="h-12 w-12 flex justify-center items-center bg-sidebar-menu text-purple-500 rounded-full text-lg shrink-0">
                                        2</div>
                                    <div class="text-sm font-semibold flex-grow text-start light-dark-text">
                                        Bagaimana jika saya lupa password saya?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="h-4 w-4 shrink-0 transition-transform duration-200">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="collapse-content">
                                <div class="light-dark-text text-sm px-1">
                                    <p>1. Masuk ke https://centragamingstore.com/forgotpassword<br>2. Masukkan Nomor
                                        WhatsApp
                                        yang terdaftar<br>3. Password baru dikirim lewat WhatsApp<br>4. Cek Kode
                                        Verifikasi di WhatsApp Kamu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-3 bg-purple-600 rounded-xl w-full aspect-square3 md:aspect-[4/1] py-4">
            <div class="hidden sm:flex w-full justify-end items-center "><img src="https://mobafams.com/svgs/faq-left.svg"
                    class=" aspect-square h-[50%]" alt="faq-icon.svg"></div>
            <div class="flex flex-col gap-4 w-full items-center justify-center "><span
                    class="text-sm lg:text-lg xl:text-xl 2xl:text-2xl text-[#ffffff] font-bold text-center">If you have
                    other questions </span><button
                    class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-75 whitespace-nowrap bg-contactus light-dark-text h-10 px-4 py-2"
                    onclick="window.location.href='https://wa.me/{{ $nomor_admin }}'">Contact Us</button></div>
            <div class="hidden sm:flex w-full justify-start items-center"><img
                    src="https://mobafams.com/svgs/faq-left.svg" class="aspect-square h-[50%] rotate-180"
                    alt="faq-icon.svg"></div>
        </div>
        <style>
            :root {
                --bg-contactus-light: #ffffff;
                --bg-contactus-dark: #000000;
            }

            [data-theme="light"] {
                --bg-contactus: var(--bg-contactus-light);
            }

            [data-theme="dark"] {
                --bg-contactus: var(--bg-contactus-dark);
            }

            .bg-contactus {
                background-color: var(--bg-contactus);
            }
        </style>
    </section>
@endsection
