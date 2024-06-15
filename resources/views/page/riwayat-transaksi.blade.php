@extends('userlayout.main-user')

@section('user-content')
    <section id="order" class="lg:px-10 px-6 mt-6 mb-24 space-y-10">
        <div class="space-y-3">
            <h3 class="text-lg md:text-xl font-semibold">Status</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#3F6EE3]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_processing.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Processing</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#FA8097]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_cancel.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">1</p>
                            <p class="font-normal">Cancel</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#EF8B10]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_pending.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Pending</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#00BDB8]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"></figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_success.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Success</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#344054]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_not_paid.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Not Paid</p>
                        </div>
                    </div>
                </div>
                <div
                    class="border shadow-sm w-full h-[100px] border-none rounded-xl flex flex-col justify-center relative text-white bg-[#21222e]">
                    <figure class="top-0"><img alt="pattern-1" loading="lazy" decoding="async" data-nimg="fill"
                            class="object-cover object-left rounded-xl" sizes="(max-width: 768px) 100vw, 100px"
                            src="https://mobafams.com/_next/image?url=%2Fimages%2Fpattern-1.png&amp;w=3840&amp;q=75"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </figure>
                    <div class="flex p-2 gap-1.5 items-center z-10">
                        <figure style="width: 60px;"><img alt="1" loading="lazy" width="60" height="60"
                                decoding="async" data-nimg="1"
                                class="flex h-full aspect-square object-cover rounded-xl transition-all"
                                sizes="(max-width: 768px) 100vw, 100px"
                                src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fstatus_error.png&amp;w=3840&amp;q=75"
                                style="color: transparent;"></figure>
                        <div>
                            <p class="font-bold">0</p>
                            <p class="font-normal">Error</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-3">
            <h3 class="text-lg md:text-xl font-semibold">Histori Pesanan</h3>
            <div class="flex flex-col md:flex-row justify-between gap-6">
                <div>
                    <div class="flex flex-col w-full">
                        <div class="relative flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-7 h-7 absolute ml-3 left-0 pointer-events-none  text-gray-600 rounded-full p-1">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg><input autocomplete="off" autosave="false" type="text"
                                class="text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-12 rounded-lg bg-white pr-28"
                                placeholder="Cari invoice" fdprocessedid="othgq8"></div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <p class="text-xs md:text-sm font-semibold mb-2"> </p>
                    <div class="relative w-full "><button
                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-indigo-600 rounded-xl bg-transparent text-foreground border border-blue-500 focus:outline-blue-500 focus:outline-1 md:w-36"
                            id="headlessui-listbox-button-:r8c:" type="button" aria-haspopup="listbox"
                            aria-expanded="false" data-headlessui-state="" fdprocessedid="2il2jl"><span
                                class="block truncate"></span><span
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                    <path fill-rule="evenodd"
                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd"></path>
                                </svg></span></button></div>
                    <p class="text-xs md:text-sm font-semibold mb-2"> </p>
                    <div class="relative w-full "><button
                            class="mb-4 relative w-full cursor-default py-1.5 pl-4 pr-10 text-left sm:text-sm h-10 focus:ring-2 focus:outline-none focus:ring-indigo-600 rounded-xl bg-transparent text-foreground border border-blue-500 focus:outline-blue-500 focus:outline-1 md:w-36"
                            id="headlessui-listbox-button-:r8d:" type="button" aria-haspopup="listbox"
                            aria-expanded="false" data-headlessui-state="" fdprocessedid="c4126e"><span
                                class="block truncate"></span><span
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="h-5 w-5 text-gray-400">
                                    <path fill-rule="evenodd"
                                        d="M11.47 4.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1-1.06 1.06L12 6.31 8.78 9.53a.75.75 0 0 1-1.06-1.06l3.75-3.75Zm-3.75 9.75a.75.75 0 0 1 1.06 0L12 17.69l3.22-3.22a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd"></path>
                                </svg></span></button></div>
                </div>
            </div>
            <div class="border text-card-foreground shadow-sm p-2 rounded-xl border-none bg-invoice-card">
                <div class="relative w-full overflow-auto">
                    <table class="w-full caption-bottom text-sm">
                        <thead class="[&amp;_tr]:border-b">
                            <tr
                                class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted border-none">
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Invoice</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Kategori</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Layanan</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Harga</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Tanggal</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Status</th>
                                <th
                                    class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="[&amp;_tr:last-child]:border-0">
                            <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium">
                                    ORDER1717225883EQB</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Mobile Legends</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">5 Diamonds ( 5 + 0 Bonus )
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Rp 1.445,-</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">2024-06-01 14:11:23</td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                    <div
                                        class="inline-flex items-center border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 rounded-full py-1 px-4 text-white text-xs md:text-sm bg-red-500">
                                        Cancel</div>
                                </td>
                                <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0"><a class="underline"
                                        target="_blank" href="/invoice/ORDER1717225883EQB">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-end w-full py-4 px-4">
                    <div class="space-x-2"><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
                            disabled="">Sebelum</button><button
                            class="inline-flex items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3"
                            disabled="">Selanjutnya</button></div>
                </div>
            </div>
        </div>
    </section>
@endsection
