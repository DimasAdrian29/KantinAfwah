<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Afwah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ mix('resources/css/style.css') }}" rel="stylesheet">
    <!-- Tambahkan CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('KantinAfwah.home') }}">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRjLWhWpx9PfbzysffLbMA_DK_8jawJAVHbw&s"
                 alt="Kantin Afwah" class="img-fluid img-hover-effect" style="height: 40px;">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('contact_us') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="https://wa.me/yourphonenumber" target="_blank">
                                <i class="fab fa-whatsapp fa-lg"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://www.facebook.com/yourusername" target="_blank">
                                <i class="fab fa-facebook fa-lg"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://www.instagram.com/yourusername" target="_blank">
                                <i class="fab fa-instagram fa-lg"></i> Instagram
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Login dan Register -->
            <section id="login">
                <ul>
                    <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
                </ul>
            </section>
            <section id="register">
                <ul>
                    <li><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
                </ul>
            </section>
        </div>
    </nav>
<!-- Tambahkan Bootstrap JS dan Popper.js di bagian bawah body -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

</body>
<h1>ini about us</h1>
