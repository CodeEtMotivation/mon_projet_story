<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>story</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js' ,'resources/js/all.js'])
        @livewireStyles
    </head>
    <body>
        <div>
            @include('layouts.navigation')

            @yield('content')
        </div>
    @livewireScripts    
    </body>
</html>
