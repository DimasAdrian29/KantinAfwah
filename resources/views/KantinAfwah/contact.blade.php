<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Rumah Makan') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('KantinAfwah.home') }}">Kantin Afwah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('KantinAfwah.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('career') ? 'active' : '' }}" href="{{ route('KantinAfwah.career') }}">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('news') ? 'active' : '' }}" href="{{ route('KantinAfwah.news') }}">News & Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('ourbrands') ? 'active' : '' }}" href="{{ route('KantinAfwah.ourbrands') }}">Our Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about_us') ? 'active' : '' }}" href="{{ route('KantinAfwah.about_us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="{{ route('KantinAfwah.contact_us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<h1>ini contact us</h1>
