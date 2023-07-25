<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevStagram - @yield('title')</title>
        @stack('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100">
       @include("layouts.header")
       
        <main class="container mx-auto mt-10">
           <h2 class="font-black text-center text-3xl mb-10">@yield('title')</h2>
           @yield("content")
        </main>
        
        @include("layouts.footer")
    </body>
</html>
