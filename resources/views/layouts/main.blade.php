<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Craft - @yield('title')</title>
</head>

<body class="font-sans antialiased ">
    <div class="container mx-auto grid grid-rows-[auto_1fr_auto] content-between  min-h-screen">
        @include('layouts.header')
        <main class=" bg-sky-100 px-2 pt-4 ">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/alpine/alpine.js'])
</body>

</html>
