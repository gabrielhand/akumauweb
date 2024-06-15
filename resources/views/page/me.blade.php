@extends('userlayout.main-user')

@section('user-content')
    <section id="my-account" class="lg:px-10 px-6 mt-6 mb-24">
        <div class="grid grid-cols-12 gap-6">
            <!-- Ubah Profile -->
            @include('userlayout.ubahprofile')

            <!-- Ubah Password -->
            @include('userlayout.ubahpw')

            <!-- Ubah Pin -->
            @include('userlayout.ubahpin')
        </div>

        <!-- 5 Pesanan Terakhir -->
        @include('userlayout.pesanan-terakhir')

        <!-- Alert -->
        @include('userlayout.alert')

    </section>
    <style>
        input::-ms-reveal,
        input::-ms-clear {
            display: none;
        }

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var togglesSlash = document.querySelectorAll(".toggle-password-slash");
            var togglesEye = document.querySelectorAll(".toggle-password-eye");

            togglesSlash.forEach(function(toggle) {
                toggle.addEventListener("click", function() {
                    var input = toggle.previousElementSibling;
                    if (input.type === "password") {
                        input.type = "text";
                        toggle.style.display = "none";
                        var eyeIcon = toggle.nextElementSibling;
                        if (eyeIcon.classList.contains('toggle-password-eye')) {
                            eyeIcon.style.display = "block";
                        }
                    }
                });
            });

            togglesEye.forEach(function(toggle) {
                toggle.addEventListener("click", function() {
                    var input = toggle.previousElementSibling.previousElementSibling;
                    if (input.type === "text") {
                        input.type = "password";
                        toggle.style.display = "none";
                        var slashIcon = toggle.previousElementSibling;
                        if (slashIcon.classList.contains('toggle-password-slash')) {
                            slashIcon.style.display = "block";
                        }
                    }
                });
            });

            var submitButton = document.getElementById('submit-button-pw');
            var form = document.getElementById('pw-form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                submitButton.disabled = true;
                submitButton.classList.add('disabled:brightness-75');

                document.querySelector('.loading').style.display = 'block';

                form.submit();
            });

            var inputs = form.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.addEventListener('focus', function() {
                    input.classList.remove('outline-red-500');
                    var errorText = input.parentElement.querySelector('.text-red-500');
                    if (errorText) {
                        errorText.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
