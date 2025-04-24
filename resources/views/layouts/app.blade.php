<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

    <!-- Top Navigation -->
    @include('layouts.navigation')

    <!-- Optional Page Header -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Main Layout -->
    <div class="flex h-[calc(100vh-4rem)]">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 h-full">
                <ul class="space-y-2">
                    <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-700">Dashboard</a></li>
                    <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-700">Company</a></li>
                    <li><a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-700">Users</a></li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6 bg-gray-100">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
