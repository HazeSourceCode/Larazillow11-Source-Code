<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
       
    </head>
    <body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-300">
        @inertia
    </body>
</html>
