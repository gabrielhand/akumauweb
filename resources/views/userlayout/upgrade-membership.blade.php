<form autocomplete="off" autosave="off">
    <div
        class="rounded-lg border shadow-sm bg-invoice-card border-none space-y-6 relative flex flex-col justify-center p-6 mt-14">
        <div id="chooseMembershipLevel" class="space-y-3 light-dark-text">
            <h3 class="text-sm md:text-lg font-medium">Upgrade Membership</h3>
            <div role="radiogroup" class="flex justify-around gap-3 p-2" tabindex="0" style="outline: none;">
                <div>
                    <button type="button" role="radio" aria-checked="false" value="[object Object]"
                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                        id="Gold" tabindex="-1">
                    </button>
                    <label for="Gold">
                        <div class="flex flex-col items-center gap-3">
                            <figure class="h-28 w-24 md:h-36 md:w-32">
                                <img alt="badge_Gold" loading="lazy" width="150" height="150" decoding="async"
                                    data-nimg="1" class="" sizes="(max-width: 768px) 100vw, 100px"
                                    src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fbadge_gold.png&amp;w=3840&amp;q=75"
                                    style="color: transparent;">
                            </figure>
                            <p>(Reseller)</p>
                            <input type="radio" name="radio-1" class="radio bg-gray-400 checked:bg-purple-500">
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div id="choosePaymentMethod" class="space-y-3 light-dark-text">
            <h3 class="text-sm md:text-lg font-medium">Pilih Pembayaran</h3>
            <div class="mt-4 space-y-2">
                <div id="payment-method">
                    <div class="border-b bg-white rounded-xl">
                        <h3 class="flex">
                            <button type="button" id="toggleButton" onclick="toggleContent()"
                                class="flex flex-1 items-center justify-between font-medium transition-all hover:underline p-2 text-white">
                                <p class="text-black font-bold text-sm">QRIS</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" id="toggleIcon"
                                    class="h-4 w-4 shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                        <div id="paymentContent" class="overflow-hidden text-sm transition-all max-h-0">
                            <div class="pb-4 pt-0">
                                <div role="radiogroup" class="grid grid-cols-1 gap-3 p-2" tabindex="0"
                                    style="outline: none;">
                                    @foreach ($pay_method as $p)
                                        @if ($p->tipe == 'e-walet')
                                            <div
                                                class="border text-card-foreground shadow-sm bg-productDetail-accord-item relative rounded-lg hover:cursor-pointer border-none hover:bg-blue-500 hover:bg-opacity-20">
                                                <button type="button" role="radio" aria-checked="false"
                                                    data-state="unchecked"
                                                    class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                                                    id="40" tabindex="-1">
                                                </button>
                                                <input type="radio" name="pembayaran" class="pay-radio"
                                                    id="method-{{ $p->id }}" value="{{ $p->code }}"
                                                    onchange="select_method('{{ $p->id }}', '{{ $p->name }}');" />
                                                <label for="40">
                                                    <div class="p-2 space-y-2 rounded-lg grayscale-0 cursor-pointer">
                                                        <div class="flex justify-between items-center">
                                                            <div class="space-y-2">
                                                                <p class="text-black text-sm font-medium">QRIS S3</p>
                                                                <p class="text-lg text-blue-600 font-medium">Rp 50.500,-
                                                                </p>
                                                            </div>
                                                            <figure style="width: 64px;">
                                                                <img alt="QRIS S3" loading="lazy" width="64"
                                                                    height="64" decoding="async" data-nimg="1"
                                                                    class="object-contain w-[64px] h-[20px]"
                                                                    sizes="(max-width: 768px) 100vw, 100px"
                                                                    src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                                                    style="color: transparent;">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <h3 class="flex">
                            <button id="toggleButton" type="button" onclick="toggleContent()"
                                class="flex-1 items-center font-medium transition-all hover:underline bg-gray-300 rounded-b-xl flex p-3 justify-end overflow-hidden gap-4 text-black">
                                <div class="relative lg:w-14 md:w-12 w-8 h-full">
                                    <figure>
                                        <img alt="QRIS S3" loading="lazy" decoding="async" data-nimg="fill"
                                            class="object-contain" sizes="(max-width: 768px) 100vw, 100px"
                                            src="https://mobafams.com/_next/image?url=https%3A%2F%2Fis3.cloudhost.id%2Fcarenindonesia%2Fbisacash%2Fqr.png&amp;w=3840&amp;q=75"
                                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                                    </figure>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="h-4 w-4 shrink-0 transition-transform duration-200">
                                    <path d="m6 9 6 6 6-6"></path>
                                </svg>
                            </button>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border shadow-sm bg-invoice-card text-productDetail-card-fg rounded-xl p-4 border-none mt-8 flex flex-col gap-4 md:flex-row justify-between items-center"
        id="confirmPayment">
        <div class="space-y-2 flex flex-col items-start">
            <p class="text-base md:text-lg text-blue-500 font-bold">Rp 0,-</p>
            <p class="text-xs text-productDetail-card-fg/50 tracking-wide leading-5">Dengan menekan "Bayar
                Sekarang" saya menyetujui <a class="underline" href="/termandconditional">Ketentuan Layanan</a>
            </p>
        </div>
        <div class="flex flex-col gap-3"><button
                class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-productDetail-btn text-white hover:bg-blue-500/80 h-10 px-4 py-2 gap-x-4"
                fdprocessedid="1v25ga">Bayar Sekarang<svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-banknote">
                    <rect width="20" height="12" x="2" y="6" rx="2"></rect>
                    <circle cx="12" cy="12" r="2"></circle>
                    <path d="M6 12h.01M18 12h.01"></path>
                </svg></button>
            <div class="flex items-center gap-1.5 text-right justify-end"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-blue-500">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
                <p class="text-xs text-left">Pembayaran anda terjamin aman</p>
            </div>
        </div>
    </div>
</form>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButton');
        const content = document.getElementById('paymentContent');
        const icon = document.getElementById('toggleIcon');

        toggleButton.addEventListener('click', function() {
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
</script>
