<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        @vite('resources/js/app.js')
    </head>

    <body>

        @include('header')

        <main>
            @yield('content')
        </main>

        @include('footer')

    </body>
</html>
