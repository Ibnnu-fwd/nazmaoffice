<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'NaZMa Office') }} | @yield('title')
    </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo nazma elipse -01.ico') }}">

    <!-- Fonts -->
    {{-- <link href="https://fonts.cdnfonts.com/css/rubik" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet"> --}}
    <link href="https://fonts.cdnfonts.com/css/lexend-deca" rel="stylesheet">


    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        html {
            overflow-x: hidden;
        }

        .blur-mode {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .blur-mode.loaded>img {
            opacity: 1;
            transition: opacity 200ms ease-in-out;
        }

        .blur-mode>img {
            opacity: 0;
        }

        .blur-mode::before {
            content: "";
            position: absolute;
            inset: 0;
            animation: pulse 2.5s infinite;
        }


        @keyframes pulse {
            0% {
                background-color: rgba(255, 255, 255, 0)
            }

            50% {
                background-color: rgba(255, 255, 255, 0.1)
            }

            100% {
                background-color: rgba(255, 255, 255, 0)
            }
        }

        .blur-mode.loaded::before {
            content: none;
        }

        #social-media ion-icon {
            font-size: 1.5rem;
            color: #777777;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css-internal')
</head>

<body class="font-sans antialiased bg-gray-50 overflow-x-hidden">
    @include('user.layouts.header')

    {{ $slot }}

    <x-footer />

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    @stack('js-internal')


    <script>
        const blurModeElements = document.querySelectorAll('.blur-mode');
        blurModeElements.forEach((element) => {
            const img = element.querySelector('img');

            function loaded() {
                element.classList.add('loaded');
            }

            if (img.complete) {
                loaded();
            } else {
                img.addEventListener('load', loaded)
            }
        });
    </script>

</body>

</html>
