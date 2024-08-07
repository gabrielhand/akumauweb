<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $judul_web }}</title>
    <link rel="icon" href="{{ $logo_header }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="bg-main-content">
    @include('layout.sidebar')
    <div class="lg:pl-72">
        @include('layout.navbar')
        <main class="flex flex-col gap-6 mb-10 min-h-[70vh]">
            @yield('content')
        </main>
        @include('layout.footer')
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const allThemeControllers = document.querySelectorAll('.theme-controller');

            const applyTheme = (theme) => {
                document.documentElement.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                allThemeControllers.forEach(controller => {
                    controller.checked = theme === 'dark';
                });
            };

            const storedTheme = localStorage.getItem('theme') || 'dark';
            applyTheme(storedTheme);

            allThemeControllers.forEach(controller => {
                controller.addEventListener('change', (event) => {
                    const theme = event.target.checked ? 'dark' : 'light';
                    applyTheme(theme);
                });
            });
        });

        function openSidebar() {
            const sidebar = document.getElementById('sidebar-index-sm');
            const sidebarContent = document.getElementById('sidebar-index-sm-content');
            sidebar.classList.remove('hidden');
            sidebarContent.classList.remove('sidebar-close');
            sidebarContent.classList.add('sidebar-open');
        }

        function closeSidebar() {
            const sidebar = document.getElementById('sidebar-index-sm');
            const sidebarContent = document.getElementById('sidebar-index-sm-content');
            sidebarContent.classList.remove('sidebar-open');
            sidebarContent.classList.add('sidebar-close');

            setTimeout(() => {
                sidebar.classList.add('hidden');
            }, 300);
        }
    </script>
</body>

</html>
