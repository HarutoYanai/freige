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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-yellow-100 flex flex-col">
            @include('layouts.navigation')

            <!-- Page Heading 
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif  -->

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <footer class="bg-yellow-50 border-t border-gray-100">
                <!-- Rakuten Web Services Attribution Snippet FROM HERE -->
                <div class="text-zinc-500 text-right py-5 pr-8 ">
                    <a href="https://developers.rakuten.com/" target="_blank">Supported by Rakuten Developers</a>
                </div>
                <!-- Rakuten Web Services Attribution Snippet TO HERE -->
            </footer>
        </div>
    </body>
</html>
