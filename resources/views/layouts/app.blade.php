<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo['title'] ?? 'Azka Danendra Cahya | Information Systems Portfolio' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Portfolio of Azka Danendra Cahya.' }}">
    <meta property="og:title" content="{{ $seo['title'] ?? 'Azka Danendra Cahya' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/PortoWebFoto.jpeg') }}">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
</head>
<body class="bg-background font-sans text-foreground antialiased">
    <a href="#about" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-[100] focus:rounded-lg focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-navy-700">Skip to content</a>
    @include('sections.navbar')
    <main>
        @yield('content')
    </main>
    @include('sections.footer')
</body>
</html>
