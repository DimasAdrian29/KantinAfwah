<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Afwah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('KantinAfwah.home') }}">
            <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRjLWhWpx9PfbzysffLbMA_DK_8jawJAVHbw&s') }}" alt="Kantin Afwah" style="height: 40px;">
        </a>
        <div class="collapse navbar-collapse">
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
    </nav>

<h1>ini career</h1>
