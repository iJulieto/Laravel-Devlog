<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/src/images/LogoDVSide.png') }}" type="image/png">
     <title>Devlog - @yield('title')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-black via-[#1ebab7] to-[#afd374] font-sans antialiased text-gray-800 flex flex-col min-h-screen">

    <!-- Navigation -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
