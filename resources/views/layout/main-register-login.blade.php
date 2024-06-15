<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/login.css', 'resources/js/app.js'])
    <title>{{ $judul_web }}</title>
    <link rel="icon" href="{{ $logo_header }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main flex flex-row h-screen overflow-y-auto">
        @yield('content')
        <div>
            @if (session('success'))
                <div id="success-alert" role="alert"
                    class="alert alert-success fixed bottom-10 right-10 z-20 shadow-lg w-auto py-4">
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
            @if (session('error'))
                <div id="error-alert" role="alert"
                    class="alert alert-error fixed bottom-10 right-10 z-20 shadow-lg w-auto py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p>{{ session('error') }}</p>
                    <button onclick="closeAlert('error-alert')" class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                </div>
            @endif
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
        </script>
    </div>
</body>

</html>
