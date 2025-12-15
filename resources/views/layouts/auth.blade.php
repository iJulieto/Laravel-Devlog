<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('/src/images/LogoDV.png') }}" type="image/png">
        <title>Devlog - @yield('title')</title>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased min-h-screen" style="background-image: url('{{ asset('/src/images/LogoDVSide.png') }}'), linear-gradient(to bottom right, black, #1ebab7, #afd374); background-repeat: repeat, no-repeat; background-size: 380px, cover;">
        <!-- Back Button -->
        <div class="relative min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
            <div class="absolute top-8 left-8">
                <a href="{{ route('home') }}" class="flex items-center text-[#67bed9] hover:text-[#afd374] transition-colors duration-300 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back
                </a>
            </div>

            <!-- Main Content -->
            @yield('content')
        </div>
    </body>
</html>
