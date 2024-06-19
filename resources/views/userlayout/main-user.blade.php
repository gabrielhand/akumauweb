@extends('layout.main')

@section('content')
    <div class="flex-col flex gap-6 mb-10 min-h-[70vh]">
        <section id="header">
            <div class="w-full h-48 md:h-[18rem] relative">
                <figure>
                    <img alt="profile_cover" loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                        sizes="(max-width: 768px) 100vw, 100px"
                        src="https://mobafams.com/_next/image?url=https%3A%2F%2Fsin1.contabostorage.com%2Fb1d79b8bbee7475eab6c15cd3d13cd4d%3Anextopup%2Fp%2Fheader.webp&amp;w=3840&amp;q=75"
                        style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                </figure>
                <div class="absolute inset-0 bg-gradient-to-b from-[#16172100] to-[#2F3038] mix-blend-multiply"></div>
            </div>
            <div class="flex flex-col xl:flex-row w-full items-start xl:justify-between md:mt-2 mt-0 gap-4 lg:px-10 px-6">
                <div
                    class="-mt-[3rem] md:-mt-[4.5rem] lg:-mt-[1rem] xl:-mt-[3.2rem] 2xl:-mt-[3.6rem] flex flex-row items-end z-20 relative gap-3 md:gap-4 md:w-[50%]">
                    <div
                        class="w-32 h-32 xl:w-36 xl:h-36 2xl:w-40 2xl:h-40 relative p-1 rounded-full backdrop-blur-lg bg-gradient-to-r from-blue-400 via-purple-500 to-orange-500 animate-background-animate">
                        <figure class="h-full w-full">
                            <img id="profileImage" alt="{{ auth()->user()->username }}" loading="lazy" width="400"
                                height="400" decoding="async" data-nimg="1"
                                class="object-cover rounded-full h-full w-full"
                                src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://picsum.photos/400/400' }}"
                                style="color: transparent;" style="color: transparent;">
                        </figure>
                    </div>
                    <div class="text-left">
                        <div class="space-y-2 flex flex-col items-start light-dark-text">
                            <h1 id="usernameProfile" class="text-lg md:text-xl lg:text-2xl font-semibold w-full">
                                {{ auth()->user()->username }}
                            </h1>
                            <h2 class="text-sm md:text-lg">{{ auth()->user()->role }}</h2>
                        </div>
                        <div class="h-4 md:h-8"></div>
                    </div>
                </div>
                <ul
                    class="flex gap-6 md:mt-2 text-sm 2xl:text-base font-semibold text-[#8E8F8F] overflow-x-auto w-full justify-start xl:justify-end whitespace-nowrap pb-3 lg:me-12">
                    <li class="{{ request()->is('me') ? 'text-[#FB1CA3]' : 'cursor-pointer hover:text-[#FB1CA3]' }}"><a
                            href="{{ route('profile') }}">MY ACCOUNT</a></li>
                    <li class="{{ request()->is('riwayat') ? 'text-[#FB1CA3]' : 'cursor-pointer hover:text-[#FB1CA3]' }}"><a
                            href="{{ route('riwayat') }}">ORDER</a></li>
                    <li class="cursor-pointer hover:text-[#FB1CA3]">MEMBERSHIP</li>
                </ul>
            </div>
        </section>

        <!-- Content -->
        @yield('user-content')

    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            var uploadBtn = document.getElementById('upload-button');
            var closeBtn = document.getElementById('closei-button');

            uploadBtn.removeAttribute('disabled');

            imgPreview.style.marginBottom = '0';

            if (image.files[0]) {
                imgPreview.style.display = 'block';
                closeBtn.style.display = 'block';

                const oFReader = new FileReader();

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };

                oFReader.readAsDataURL(image.files[0]);
            }
        };

        document.getElementById('closei-button').addEventListener('click', function(e) {
            e.preventDefault();
            const imgPreview = document.querySelector('.img-preview');
            const imageInput = document.querySelector('#image');
            const uploadBtn = document.getElementById('upload-button');

            imgPreview.src = '';
            imgPreview.style.display = 'none';
            this.style.display = 'none';
            uploadBtn.setAttribute('disabled', 'disabled');
            imageInput.value = '';
        });


        $(document).ready(function() {

            $('#upload-button').click(function(e) {
                e.preventDefault();
                var formImage = new FormData();
                var fileInput = document.getElementById('image');
                formImage.append('image', fileInput.files[0]);

                $('#loading-upload').css('display', 'block');

                $.ajax({
                    url: '{{ route('editProfileImage') }}',
                    method: 'POST',
                    data: formImage,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(response) {
                        $('#success-alert').removeClass('hidden');
                        $('#success-alert p').html(response.success);

                        $('#loading-upload').css('display', 'none');

                        $('#success-alert').css('visibility', 'visible');
                        $('#success-alert').css('opacity', '1');
                        $('#success-alert').css('animation', 'slide-up 0.5s ease forwards');

                        setTimeout(() => {
                            closeAlert('success-alert');
                        }, 3000);

                        $('#upload-button').prop('disabled', true);
                        $('#upload-button').removeClass('disabled:brightness-75');
                        $('#navbarImage').attr('src', response.image_path);
                        $('#profileImage').attr('src', response.image_path);
                    },
                    error: function(error) {
                        $('#error-alert').removeClass('hidden');
                        $('#error-alert p').html(response.error);

                        $('#loading-upload').css('display', 'none');

                        $('#error-alert').css('visibility', 'visible');
                        $('#error-alert').css('opacity', '1');
                        $('#error-alert').css('animation', 'slide-up 0.5s ease forwards');

                    }
                });
            });


            $('#editp-button').click(function(e) {
                e.preventDefault();
                var formData = $('#edit-form').serialize();

                $('#editp-button').prop('disabled', true);
                $('#editp-button').addClass('disabled:brightness-75');

                $('#loading-editp').css('display', 'block');

                $.ajax({
                    url: '{{ route('editProfile') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#success-alert').removeClass('hidden');
                        $('#success-alert p').html(response.success);

                        $('#loading-editp').css('display', 'none');

                        $('#success-alert').css('visibility', 'visible');
                        $('#success-alert').css('opacity', '1');
                        $('#success-alert').css('animation', 'slide-up 0.5s ease forwards');

                        setTimeout(() => {
                            closeAlert('success-alert');
                        }, 3000);

                        $('#editp-button').prop('disabled', false);
                        $('#editp-button').removeClass('disabled:brightness-75');

                        $('#usernameNavbar').text(response.username);
                        $('#usernameProfile').text(response.username);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        $('#error-alert').removeClass('hidden');
                        $('#error-alert p').html(error.responseJSON.message);

                        $('#loading-editp').css('display', 'none');

                        $('#error-alert').css('visibility', 'visible');
                        $('#error-alert').css('opacity', '1');
                        $('#error-alert').css('animation', 'slide-up 0.5s ease forwards');

                        setTimeout(() => {
                            closeAlert('error-alert');
                        }, 3000);

                        $('#editp-button').prop('disabled', false);
                        $('#editp-button').removeClass('disabled:brightness-75');
                    }
                });
            });

            $('#pw-button').click(function(e) {
                e.preventDefault();
                var formData = $('#pw-form').serialize();

                $('#pw-button').prop('disabled', true);
                $('#pw-button').addClass('disabled:brightness-75');

                $('#loading-pw').css('display', 'block');

                $.ajax({
                    url: '{{ route('editPassword') }}',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#success-alert').removeClass('hidden');
                        $('#success-alert p').html(response.success);

                        $('#loading-pw').css('display', 'none');

                        $('#success-alert').css('visibility', 'visible');
                        $('#success-alert').css('opacity', '1');
                        $('#success-alert').css('animation', 'slide-up 0.5s ease forwards');

                        setTimeout(() => {
                            closeAlert('success-alert');
                        }, 3000);

                        $('#pw-lama').val('');
                        $('#pw-baru').val('');
                        $('#pw-baru-confirmation').val('');

                        $('#pw-button').prop('disabled', false);
                        $('#pw-button').removeClass('disabled:brightness-75');
                    },
                    error: function(error) {
                        if (error.responseJSON.errors) {
                            var errorMessages = Object.values(error.responseJSON.errors).flat();

                            if (errorMessages.length > 0) {
                                var errorMessage = errorMessages.join('<br>');

                                $('#error-alert').removeClass('hidden');
                                $('#error-alert p').html(errorMessage);

                                $('#loading-pw').css('display', 'none');

                                $('#error-alert').css('visibility', 'visible');
                                $('#error-alert').css('opacity', '1');
                                $('#error-alert').css('animation',
                                    'slide-up 0.5s ease forwards');

                                setTimeout(() => {
                                    closeAlert('error-alert');
                                }, 3000);
                            }
                        }

                        $('#pw-lama').val('');
                        $('#pw-baru').val('');
                        $('#pw-baru-confirmation').val('');

                        $('#pw-button').prop('disabled', false);
                        $('#pw-button').removeClass('disabled:brightness-75');
                    }
                });
            });
        });
    </script>
@endsection
