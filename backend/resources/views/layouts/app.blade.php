<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Humfurie') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
{{--        <x-banner />--}}

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <div class="flex py-4">

        <aside class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-1/5">
            <!-- Sidebar content goes here -->
            <ul>
                <li><a href="">Menu Item 1</a></li>
                <li><a href="#">Menu Item 2</a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </aside>

        <!-- Page Content -->
        <main class="w-4/5">
            {{ $slot }}
        </main>

    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
