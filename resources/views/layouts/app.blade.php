<!DOCTYPE html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>

<link rel=preload href="{{ mix('css/app.css') }}" as=style>
<link rel=preload href="{{ mix('js/app.js') }}" as=script>

<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1">

<title>@yield('title', 'Online notes with Laravel 8')</title>

<link rel=stylesheet href="{{ mix('css/app.css') }}">

@include('components.navigation')

<main class="container mt-4">
    @yield('content')
</main>

<script async src="{{ mix('/js/app.js') }}"></script>
</html>
