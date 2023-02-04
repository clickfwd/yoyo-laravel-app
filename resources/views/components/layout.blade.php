<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yoyo Demo for Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @yoyo_scripts

    </head>
    <body class="antialiased">

        <div class="mx-auto max-w-4xl flex justify-center mt-20">

            {{ $slot }}

        </div>
        
    </body>
</html>
