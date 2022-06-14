<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taiwind Components inicio</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        
        
    </head>
    <body class="">
        <h1>This the brach of dev to pack the components...</h1>

        <x-buttons.float-button/>

        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        @livewireScripts
    </body>
</html>

{{-- check if a user is log or not...
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
--}}