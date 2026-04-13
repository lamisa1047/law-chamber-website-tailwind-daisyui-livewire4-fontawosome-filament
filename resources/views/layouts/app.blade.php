<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&family=Lato:wght@300;400;600;700&display=swap"
        rel="stylesheet" />

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-white text-gray-800 font-body overflow-x-hidden scroll-smooth">
    <!-- ══════════ NAVBAR ══════════ -->
    <livewire:home.sections.navbar />

    {{ $slot }}

    @livewireScripts

    <!-- ══════════ FOOTER ══════════ -->
    <livewire:home.sections.footer />
</body>

</html>