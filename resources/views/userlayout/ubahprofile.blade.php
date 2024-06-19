<div class="col-span-12 md:col-span-8 flex flex-col">
    <div class="rounded-xl relative flex justify-between bg-gradient-to-b from-[#3186FF] to-[#A2E8EB]">
        <div class="text-sm xl:text-xl 2xl:text-2xl font-bold p-7 w-[65%] text-white">Level Kamu Saat Ini
            {{ auth()->user()->role }}
        </div>
        <div class="relative">
            <figure class="absolute -top-5 right-3 md:-top-8 lg:right-4 xl:right-8 h-28 w-24 md:h-36 md:w-32">
                <img alt="badge_member" loading="lazy" width="150" height="150" decoding="async" class=""
                    sizes="(max-width: 768px) 100vw, 100px"
                    src="https://mobafams.com/_next/image?url=%2Fimages%2F3d%2Fbadge_member.png&amp;w=3840&amp;q=75"
                    style="color: transparent;">
            </figure>
        </div>
    </div>


    <div id="AccountInfoSettingForm" class="space-y-3 mt-14 light-dark-text">
        <h3 class="text-lg md:text-xl font-semibold">Ubah Profile</h3>
        <div class="rounded-lg border shadow-sm p-5 bg-sidebar-menu border-none grid grid-cols-1 gap-8">
            <form id="upload-form" enctype="multipart/form-data">
                @csrf
                <div class="flex gap-1">
                    <input id="image" onchange="previewImage()" name="image"
                        accept="image/png, image/jpg, image/jpeg, image/gif" type="file" hidden="">
                    <label for="image">
                        <span
                            class="shrink-0 overflow-hidden flex h-28 w-28 items-center justify-center space-y-0 border rounded-lg relative cursor-pointer group">
                            <img class="img-preview aspect-square h-full w-full duration-500 group-hover:blur-sm group-hover:brightness-50 object-cover"
                                alt="Avatar" unoptimized="1"
                                @if (auth()->user()->image) src="{{ asset('storage/' . auth()->user()->image) }}"
                            @else
                                src="https://picsum.photos/400/400" @endif>
                            <div class="hidden group-hover:block">
                                <div class="absolute inset-0 p-3 z-10 flex flex-col items-end justify-between">
                                    <div class="w-full grow flex flex-col items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-upload-cloud">
                                            <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242">
                                            </path>
                                            <path d="M12 12v9"></path>
                                            <path d="m16 16-4-4-4 4"></path>
                                        </svg>
                                    </div>
                                </div>
                                <button id="closei-button"
                                    class="inline-flex items-center justify-center rounded-md font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap h-10 absolute left-2 top-0 text-sm p-0 z-40"
                                    style="display: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="m15 9-6 6"></path>
                                        <path d="m9 9 6 6"></path>
                                    </svg>
                                </button>
                            </div>
                        </span></label>
                    <div class="ml-4 space-y-4 w-full">
                        <div class="space-y-2">
                            <p class="text-sm font-medium leading-none">Profile Photo</p>
                            <p class="text-xs text-slate-400">We recommended an image of at least 800x800.
                                Gifs work too.</p>
                        </div>
                        <div class="ml-auto font-medium">
                            <button type="submit" id="upload-button"
                                class="inline-flex gap-x-2 items-center justify-center rounded-md text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap border hover:bg-[#A600FF] h-10 px-4 py-2 border-white"
                                disabled="">
                                <span id="loading-upload" class="loading loading-spinner loading-xs" style="display:none;"></span>
                                <span>UPLOAD</span>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
        <form id="edit-form" action="">
            @csrf
            <div class="flex-col">
                <div class="flex gap-3 w-full">
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">Username </p>
                        <div class="relative flex items-center">
                            <input name="username" autocomplete="off" autosave="false"
                                value="{{ auth()->user()->username }}"
                                class="border border-black text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-full bg-white">
                        </div>
                    </div>
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">Nomor Whatsapp </p>
                        <div class="relative flex items-center">
                            <input disabled="" name="nomorwa" autocomplete="off" autosave="false"
                                value="{{ auth()->user()->whatsapp }}"
                                class="border border-black text-sm w-full text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-full bg-gray-200 cursor-not-allowed">
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex flex-col w-full">
                        <p class="text-xs md:text-sm font-semibold mb-2">Nama </p>
                        <div class="relative flex items-center">
                            <input disabled="" name="nama" autocomplete="off" autosave="false"
                                value="{{ auth()->user()->name }}"
                                class="border border-black text-sm text-black focus:outline-none focus:ring-0 h-10 pl-4 pr-4 rounded-full w-full bg-gray-200 cursor-not-allowed">
                        </div>
                    </div>
                </div>
                <button type="submit" id="editp-button"
                    class="inline-flex gap-x-2 items-center justify-center text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 transition duration-300 hover:brightness-85 whitespace-nowrap bg-purple-500 text-white hover:bg-purple-500/80 h-10 px-4 py-2 rounded-full mt-10 float-right">
                    <span id="loading-editp" class="loading loading-spinner loading-xs" style="display:none;"></span>
                    <span>Simpan Perubahan</span>
                </button>
            </div>
        </form>
    </div>
</div>
