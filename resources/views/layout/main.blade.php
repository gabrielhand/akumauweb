<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $judul_web }}</title>
    <link rel="icon" href="{{ $logo_header }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"rel="stylesheet">
</head>

<body>
    @include('layout.sidebar')
    <div class="lg:ps-72">
        @include('layout.navbar')
        <div class="flex-col flex gap-6 min-h-[70vh] mb-5 bg-main-content">
            @yield('content')
        </div>
        @include('layout.footer')
    </div>
</body>

</html>
