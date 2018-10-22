<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:300,400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <header class="l-body-header">
            <div class="l-body-titles">
                <h1 class="l-body-title">Bastien Bouquin</h1>
                <h2 class="l-body-subtitle">Art Blog</h2>
                <a class="l-body-titles-link" href="{{ route('home') }}"></a>
            </div>
            <nav class="l-nav is-closed">
                <div class="l-nav-left-bar"></div>
                <div class="btn-menu">
                    <p class="l-nav-item">FERMER</p>
                </div>
                <div class="l-nav-items">
                    <a class="l-nav-item" href="{{ route('home') }}">Blog</a>
                    <a class="l-nav-item" href="{{ route('galery.home') }}">Galerie</a>
                    <a class="l-nav-item" href="{{ route('about') }}">A propos</a>
                    <a class="l-nav-item" href="{{ route('contact') }}">Contact</a>
                </div>
            <nav>
        </header>
        @yield('content')
        <footer></footer>
    </body>
</html>
