<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <header>
            <div id="nav_container" class="bg-white">
                @include('layouts.navigation')
            </div>

            @if (isset($hero_img))
                <div id="hero_img_container" class="object-contain">
                    {{ $hero_img }}
                </div>
            @endif
        </header>
    </head>
    <body class="font-sans bg-[#eff0f5]">
        {{ $slot }}
    </body>

    <footer class="w-full h-60 bg-black mt-8 flex items-center justify-center">
        <span class="text-white font-extrabold text-xl">© 2023 eComSite. All
            rights reserved.</span>
    </footer>
</html>
