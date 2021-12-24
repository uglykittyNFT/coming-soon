<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ugly Kitty</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased h-full">
        <div class="min-h-full pt-16 pb-12 flex flex-col bg-white">
        <main class="flex-grow flex flex-col justify-center max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex-shrink-0 flex justify-center">
            <a href="/" class="inline-flex">
                <span class="sr-only">Ugly Kitty</span>
                <img class="h-40 w-auto" src="/img/ugly-kitty-full-logo-01.png" alt="ugly kitty full logo">
            </a>
            </div>
            <div class="py-16">
            <div class="text-center">
                <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Coming Soon.</h1>
                <p class="mt-2 text-base text-gray-500">Some amazing things are in the works.</p>
                <div class="mt-6">
                </div>
            </div>
            </div>
        </main>
        <footer class="flex-shrink-0 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex justify-center space-x-4">
                <a href="mailto:info@uglykitty.xyz" class="text-sm font-medium text-gray-500 hover:text-gray-600">Contact Support</a>
                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-600">Discord</a>
                <span class="inline-block border-l border-gray-300" aria-hidden="true"></span>
                <a href="https://twitter.com/uglykittyNFT" class="text-sm font-medium text-gray-500 hover:text-gray-600">Twitter</a>
            </nav>
        </footer>
        </div>
    </body>
</html>
