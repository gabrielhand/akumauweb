<footer aria-labelledby="footer-heading">
    <div class="mx-auto px-6 py-8 bg-footer text-white">
        <div class="xl:grid xl:grid-cols-2 xl:gap-10">
            <div class="flex flex-col">
                <div class="h-14 items-center flex max-w-72">
                    <figure class="block cursor-pointer w-full h-full relative"><img alt="logo" loading="lazy"
                            decoding="async" data-nimg="fill" class="object-contain object-left"
                            sizes="(max-width: 768px) 100vw, 100px" src="{{ $logo_header }}"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <p class="text-4xl font-medium text-start">{{ ENV('APP_NAME') }}</p>
                </div>
                <p class="text-sm leading-6 my-8">Nikmati pengalaman pembelian Voucher dan Top Up
                    Game otomatis kapan pun di manapun kamu mau.</p>
                <div class="flex space-x-6"><a target="_blank"
                        class=""
                        href="{{ $url_ig }}"><span class="sr-only light-dark-text">Instagram</span><svg
                            fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg></a></div>
            </div>
            <div class="mt-16 grid grid-cols-2 md:grid-cols-3 gap-8 xl:mt-0">
                <div>
                    <h3 class="text-sm font-semibold leading-6 text-footer-foreground ">Peta Situs</h3>
                    <ul role="list" class="mt-4 space-y-2">
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/about">Tentang</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/FAQ">FAQ</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/termandconditional">Syarat &amp; Ketentuan Layanan</a></li>
                    </ul>
                </div>
                <div class="md:mt-0">
                    <h3 class="text-sm font-semibold leading-6 text-footer-foreground ">Akses Cepat</h3>
                    <ul role="list" class="mt-4 space-y-2">
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/cari">Cek Pesanan</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/redeemsaldo">Klaim Voucher</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/point">Tukar Point</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/allreviews">Semua Review</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/blog">Blog</a></li>
                    </ul>
                </div>
                <div class="md:mt-0">
                    <h3 class="text-sm font-semibold leading-6 text-footer-foreground ">Ketentuan</h3>
                    <ul role="list" class="mt-4 space-y-2">
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/dukungan">Dukungan Pelanggan</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/termandconditional">Syarat &amp; Ketentuan Layanan</a></li>
                        <li><a target="_self"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="/privacy">Kebijakan Privasi</a></li>
                        <li><a target="__blank"
                                class="text-sm leading-6 text-footer-foreground hover:text-footer-foregroundHover"
                                href="https://docs.mobafams.com">API</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full bg-white border-b-8 border-purple-400 flex items-center justify-center divide-x-2 divide-gray-300">
        <p class="text-xs text-black flex-nowrap whitespace-nowrap px-4 font-bold">Copyright © CENTRAGAMINGSTORE</p>
        <div class="rfm-marquee-container"
            style="--pause-on-hover: paused; --pause-on-click: paused; --width: 100%; --transform: none;">
            <div class="rfm-marquee"
                style="--play: running; --direction: normal; --duration: 63.8s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                <div class="rfm-initial-child-container">
                    <div class="rfm-child" style="--transform: none;">
                        <div class="flex px-2 py-3 gap-x-4">
                            <figure style="width: 100px;">
                                <img alt="BCA" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/bca_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;">
                                <img alt="LINK AJA" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/linkaja_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;">
                                <img alt="SHOPEE PAY" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/shopay_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="OVO" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/ovo_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="GOPAY" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/gopay_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="DANA" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/dana_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="QRIS" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/qris_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="INDOMARET" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/indomaret_footer.png" style="color: transparent;">
                            </figure>

                            <figure style="width: 100px;">
                                <img alt="BCA" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/bca_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;">
                                <img alt="LINK AJA" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/linkaja_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;">
                                <img alt="SHOPEE PAY" loading="lazy" width="100" height="300" decoding="async"
                                    data-nimg="1" class="h-6 w-auto" sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/shopay_footer.png" style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="OVO" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/ovo_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="GOPAY" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/gopay_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="DANA" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/dana_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="QRIS" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px" src="/assetss/payment/qris_footer.png"
                                    style="color: transparent;">
                            </figure>
                            <figure style="width: 100px;"><img alt="INDOMARET" loading="lazy" width="100"
                                    height="300" decoding="async" data-nimg="1" class="h-6 w-auto"
                                    sizes="(max-width: 768px) 100vw, 100px"
                                    src="/assetss/payment/indomaret_footer.png" style="color: transparent;">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        :root {
            --bg-footer-light: rgb(139 92 246);
            --bg-footer-dark: #21222e;
        }

        [data-theme="light"] {
            --bg-footer: var(--bg-footer-light);
        }
        
        [data-theme="dark"] {
            --bg-footer: var(--bg-footer-dark);
        }
        .bg-footer {
            background-color: var(--bg-footer);
        }

        .rfm-marquee-container {
            overflow-x: hidden;
            position: relative; 
            display: flex
            flex-direction: row;
            width: 100%;
        }

        .rfm-marquee {
            display: flex;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
        }

        .rfm-child {
            display: flex;
        }

        .rfm-child figure {
            margin: 0 10px;
        }

        .rfm-child img {
            max-height: 50px;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-147.5%);
            }
        }

        .rfm-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</footer>
