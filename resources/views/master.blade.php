<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Street Code</title>
        <link rel="icon" href="{{ asset('profile-image/logo.png') }}" type="image/x-icon">
        <!-- Tailwind CSS and JS (including Flowbite JS) are handled by Vite -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @yield('content', 'This is content')
    </body>
</html>