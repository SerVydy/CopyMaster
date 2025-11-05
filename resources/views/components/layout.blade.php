<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="{{ asset('public/tailwindcss.js') }}"></script>
</head>
<body class="flex flex-col h-screen">
    <header class="flex justify-between px-8 py-2 border-b border-b-gray-200">
        <div>
            <x-link href="{{ route('home') }}" class="flex items-center gap-x-2">
                <img src="{{ asset('public/logo.png') }}" alt="" class="h-6 w-6">
                copy master
            </x-link>
        </div>
        <nav class="flex gap-x-4">
            <x-link href="">о нас</x-link>
            <x-link href="{{ route('catalog') }}">каталог</x-link>
            <x-link href="{{ route('where') }}">где нас найти?</x-link>
        </nav>
        <ul class="flex gap-x-4">
            @guest
                <li><x-link href="{{ route('register') }}">Регистрация</x-link></li>
                <li><x-link href="{{ route('login') }}">Авторизация</x-link></li>
            @endguest
            @auth
                <li><x-link href="{{ route('cart') }}">корзина</x-link></li>
                <li><x-link href="">выход</x-link></li>
            @endauth
        </ul>
    </header>
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <footer>
        footer
    </footer>
</body>
</html>