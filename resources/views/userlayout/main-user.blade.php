@extends('layout.main')

@section('content')
    <div class="flex-col flex gap-6 mb-10 min-h-[70vh]">
    
        @include('userlayout.user-header')

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
