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

<div class="min-h-screen bg-gray-100">
    <section class="lg:hidden">
        <livewire:navigation-menu/>
    </section>

    <!-- Page Heading -->
    @if (isset($header))
        <div class="bg-white shadow lg:hidden">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </div>
    @endif

    <div class="flex p-6 min-w-full min-h-full max-w-full max-h-full mx-auto 2xl:max-w-8xl">
        <livewire:components.side-bar/>
        <div class="flex flex-col px-4 lg:ml-[21rem] xl:ml-[23.5rem] w-full h-full">
            @if (isset($header))
                <div class="bg-white overflow-hidden shadow-xl rounded-lg hidden lg:block">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </div>
            @endif

            <!-- Page Content -->
            <main class="py-2">
                {{ $slot }}
            </main>
        </div>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
