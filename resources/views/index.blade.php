<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        @vite('resources/css/app.css')
    </head>
    <body">
            @include('layouts.navigation')

            <div>
                @include('layouts.footer')
            </div>
    </body>
</html>

