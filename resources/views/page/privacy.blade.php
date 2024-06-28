@extends('layout.main')

@section('content')
    <section id="content-tnc" class="md:px-6 px-4 pt-8">
        <h1 class="text-center font-bold text-lg">Kebijakan Privacy</h1>
        <div class="rounded-lg border light-dark-text shadow-sm p-6 mt-3 bg-sidebar-menu">
            <article class="prose dark:prose-invert">
                <h5>Umum</h5><br>
                <ul class="ms-5 flex flex-col gap-3 leading-loose">
                    <li>1. Dengan mendaftar atau telah terdaftar otomatis anda telah menyetujui ketentuan layanan {{ ENV('APP_NAME') }}.
                    </li>
                    <li>2. Saldo pada {{ ENV('APP_NAME') }} tidak dapat di tarik, ke bank, pulsa, maupun ke e-wallet anda.</li>
                    <li>3. {{ ENV('APP_NAME') }} berhak memblokir akun bila terdapat malakukan perbuatan yang dapat merugikan kami
                        seperti hacking.</li>
                    <li>4. {{ ENV('APP_NAME') }} tidak bertanggung jawab atas kehilangan akun anda.</li>
                    <li>5. Harga layanan kami dapat berubah sewaktu-waktu tanpa pemberitahuan anda.</li>
                    <li>6. Pesanan dalam status success tidak dapat di refund.</li>
                    <li>7. {{ ENV('APP_NAME') }} tidak menjamin keamanan akun anda.</li>
                    <li>8. Kesalahan Penulisan Format bukan Tanggung Jawab Kami.</li>
                </ul><br>
                <h5>Layanan</h5><br>
                <ul class="ms-5 flex flex-col gap-3 leading-loose">
                    <li>1. Harga Layanan Kami dapat berubah sewaktu-waktu tanpa pemberitahuan anda.</li>
                    <li>2. Harga pada layanan terdapat 4 level yaitu harga, harga silver, harga gold, harga pro</li>
                    <li>3. Layanan yang sudah dibeli tidak dapat direfund.</li>
                    <li>4. {{ ENV('APP_NAME') }} tidak bertanggung jawab atas kelalaian dalam penulisan format order</li>
                </ul><br>
                <h5>Pembayaran</h5><br>
                <p class="leading-loose">{{ ENV('APP_NAME') }} bekerjasama dengan penyedia jasa sistem pembayaran resmi yang di awasi oleh<br>Otoritas Jasa
                    Keuangan (OJK)<br>adapun channel pembayaran yang kami sediakan yaitu:</p>
                <ul class="ms-5 flex flex-col gap-3 leading-loose">
                    <li>1. Transfer Bank</li>
                    <li>2. Virtual Account</li>
                    <li>3. Qris</li>
                    <li>4. E-wallet</li>
                    <li>5. Retail</li>
                </ul><br>
                <h5>Pengguna</h5><br>
                <ul class="ms-5 flex flex-col gap-3 leading-loose">
                    <li>1. Pengguna dilarang melakukan aktifitas kejahatan seperti hacking dll</li>
                    <li>2. Pengguna yang ingin mendaftar {{ ENV('APP_NAME') }} harus sesuai data diri yang valid</li>
                    <li>3. Pengguna jika di bawah 18 tahun agar meminta izin kepada orang tua terlebih dahulu</li>
                    <li>4. Pengguna dilarang scrape, spamming dll yang merugikan {{ ENV('APP_NAME') }}</li>
                    <li>5. Pengguna dilarang upload poto profile berbau porno graf dan gambar ilegal lainnya</li>
                    <li>6. Pengguna dilarang menggunakan logo / merk {{ ENV('APP_NAME') }} tanpa izin</li>
                    <li>7. Apabila terjadi pembelian tidak resmi atau kecurangan {{ ENV('APP_NAME') }} berhak membawa ke jalur hukum</li>
                    <li>Hati hati terhadap penipuan yang mengatasnamakan {{ ENV('APP_NAME') }}</li>
                </ul>
            </article>
        </div>
    </section>
@endsection
