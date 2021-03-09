<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-700">
<div class="container mx-auto px-4 max-w-screen-lg">
    <x-jambatron-header/>
    <div class="grid grid-cols-3 gap-4 text-center">
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">1</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">2</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">3</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">4</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">5</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">6</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">7</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">8</div>
        <div class="transition duration-500 ease-in-out bg-blue-100 hover:bg-blue-400 rounded-md p-8">9</div>
    </div>
    <div class="flex justify-center py-8">
        <svg class="animate-bounce w-6 h-6 text-amber-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
    <div class="bg-blue-100 rounded-md p-8 mb-8">
        <h2 class="text-lg mb-4">Subscribe My</h2>
        <form action="" class="flex text-lg -m-2 w-full">
            <input class="border-2 border-blue-400 rounded-md placeholder-blue-400 px-8 py-4 m-2 w-2/5" type="text" placeholder="Your name">
            <input class="border-2 border-blue-400 rounded-md placeholder-blue-400 px-8 py-4 m-2 w-2/5" type="email" placeholder="Your email">
            <button class="bg-blue-400 border-2 border-blue-400 rounded-md px-8 py-4 text-white m-2 w-1/5" type="submit">Subscribe</button>
        </form>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
