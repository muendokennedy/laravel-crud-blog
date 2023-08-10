<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            <!-- Page Content -->
            <div>
                @yield('content')
            </div>
            <!-- The page footer -->
            <div>
                @include('layouts.footer')
            </div>

        </div>
    </body>
</html>
