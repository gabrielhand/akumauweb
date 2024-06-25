<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/css/adminapp.css', 'resources/js/app.js'])
    <title>{{ request()->is('data/joki', 'data/giftskin', 'data/dmvilog') ? $settings->judul_web : $judul_web }}</title>
    <link rel="icon"
        href="{{ request()->is('data/joki', 'data/giftskin', 'data/dmvilog') ? $settings->logo_header : $logo_header }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-main-content-admin">
    @include('admin.layout.sidebar-admin')
    <div class="lg:ps-80">
        <div id="main" class="p-8 overflow-auto h-screen">
            <button id="menu-btn"
                class="lg:hidden block hover:text-purple-500 duration-300 light-dark-text cursor-pointer py-2 mb-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            @yield('content')
            @if (session('success'))
                <div id="success-alert" role="alert"
                    class="alert rounded-md bg-green-500 fixed bottom-10 right-10 z-20 shadow-lg w-auto py-4 light-dark-text">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p>{{ session('success') }}</p>
                    <button onclick="closeAlert('success-alert')" class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>
    <style>
        .alert {
            animation: slide-up 0.5s ease forwards;
            transition: visibility 0s, opacity 0.5s linear;
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slide-down {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(100%);
            }
        }
    </style>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toUpperCase();
            let rows = document.querySelectorAll('#tabel-semuamember tbody tr');

            rows.forEach(row => {
                let orderIdCell = row.querySelector('.username');
                if (orderIdCell) {
                    let orderIdText = orderIdCell.textContent || orderIdCell.innerText;
                    if (orderIdText.toUpperCase().indexOf(filter) > -1) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        });

        function closeAlert(alertId) {
            const alert = document.getElementById(alertId);
            if (alert) {
                alert.style.animation = 'slide-down 0.5s ease forwards';
                setTimeout(() => {
                    alert.style.visibility = 'hidden';
                    alert.style.opacity = '0';
                }, 500);
            }
        }

        setTimeout(() => {
            closeAlert('success-alert');
            closeAlert('error-alert');
        }, 3000);

        $(document).ready(function() {
            $('#menu-btn').on('click', function() {
                $('#sidebar-admin').removeClass('hidden');
            });

            $(document).on('click', function(event) {
                if (!$(event.target).closest('#sidebar-admin, #menu-btn').length) {
                    $('#sidebar-admin').addClass('hidden');
                }
            });
        });
    </script>
</body>

</html>
