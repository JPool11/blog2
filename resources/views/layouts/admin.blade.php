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

        <!-- Iconos -->
        <script src="https://kit.fontawesome.com/af102fec4b.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased sm:overflow-auto" x-data="{open: false}" :class="{'overflow-hidden': open}">

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    
            @include('layouts.includes.admin.nav')

            @include('layouts.includes.admin.aside')

            <div class="p-4 sm:ml-64">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                    {{$slot}}
                </div>
            </div>
  
        </div>

        <div x-show="open" x-on:click="open = false" style="display: none" class="bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30 sm:hidden"></div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
