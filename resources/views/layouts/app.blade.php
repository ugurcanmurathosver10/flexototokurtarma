<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('flex.general.brand') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-brand-dark text-gray-100 font-sans antialiased selection:bg-brand-yellow selection:text-brand-dark">
    
    @include('partials.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>