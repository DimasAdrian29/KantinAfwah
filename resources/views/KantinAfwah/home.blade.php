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
            <img src="{{ asset('images/projek.png') }}" alt="Kantin Afwah" class="img-fluid img-hover-effect" style="height: 40px;">
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


    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Kantin Afwah</h1>
        <p>Experience delicious dishes made with love</p>
        <a href="#menu" class="btn btn-light">Explore Our Menu</a>
    </section>
    </header>

    <!-- About Us Section -->
    <section id="about" class="container mt-5 about-section">
        <div class="row text-center">
            <div class="col-lg-6">
                <h2>About Us</h2>
                <p class="lead">We are a passionate group dedicated to providing exceptional food and service to our customers. Our mission is to create an unforgettable dining experience.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle"></i> High-quality ingredients</li>
                    <li><i class="fas fa-check-circle"></i> Family-friendly atmosphere</li>
                    <li><i class="fas fa-check-circle"></i> Exceptional service</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/projek.png') }}" alt="About Us Image" class="img-fluid about-image">
            </div>
        </div>
    </section>


    <!-- Menu Section -->
    <section id="menu" class="container mt-5 menu-section">
        <h2 class="text-center mb-4">Our Menu</h2>
        <div class="row">
            <!-- Menu Item 1 -->
            <div class="col-md-4 menu-item">
                <img src="https://thumb.viva.id/intipseleb/1265x711/2022/06/08/62a031618332c-makanan-khas-riau.jpg" alt="Dish 1" class="img-fluid menu-img">
                <h3>Roti Jala</h3>
                <p>4 Sehat 5 Sempurna</p>
                <a href="#menu" class="btn btn-custom">Menu 1</a>
            </div>
            <!-- Menu Item 2 -->
            <div class="col-md-4 menu-item">
                <img src="https://awsimages.detik.net.id/community/media/visual/2022/06/18/10-resep-masakan-bali-populer-ayam-betutu-hingga-sate-lilit-6_169.jpeg?w=1200" alt="Dish 2" class="img-fluid menu-img">
                <h3>Sate Ayam</h3>
                <p>Harganya Terjangkau Dan Ukurannya Lebih Besar!</p>
                <a href="#menu" class="btn btn-custom">Menu 2</a>
            </div>
            <!-- Menu Item 3 -->
            <div class="col-md-4 menu-item">
                <img src="https://www.unileverfoodsolutions.co.id/dam/global-ufs/mcos/SEA/calcmenu/recipes/ID-recipes/soups/soto-betawi/main-header.jpg" alt="Dish 3" class="img-fluid menu-img">
                <h3>Soto Sapi</h3>
                <p>Lezat Dan Bergizi</p>
                <a href="#menu" class="btn btn-custom">Menu 3</a>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="container mt-5">
        <h2>Contact Us</h2>
        <p>Alamat : Umban Sari</p>
        <p>Nomor Telepon : 08226453290</p>
        <!-- Ikon Media Sosial -->
        <div>
            <a href="https://www.instagram.com/yourusername" target="_blank" class="me-3">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="https://www.facebook.com/yourusername" target="_blank" class="me-3">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="https://wa.me/yourphonenumber" target="_blank" class="me-3">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
        </div>
    </section><ul>

    </ul>

    <footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <!-- Kolom 1: Informasi Restoran -->
            <div class="col-md-4">
                <h5 class="mb-3">Kantin Afwah</h5>
                <p>Enjoy freshly prepared meals, made with love and the finest ingredients. Join us and taste the difference!</p>
            </div>
            <!-- Kolom 2: Tautan Cepat -->
            <div class="col-md-4">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-light">Home</a></li>
                    <li><a href="#menu" class="text-light">Menu</a></li>
                    <li><a href="#about" class="text-light">About Us</a></li>
                    <li><a href="#contact" class="text-light">Contact</a></li>
                </ul>
            </div>
            <!-- Kolom 3: Ikon Sosial -->
            <div class="col-md-4">
                <h5 class="mb-3">Follow Us</h5>
                <div class="social-icons">
                    <a href="#" class="text-light mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-light mx-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-light mx-2">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-4" style="border-top: 1px solid #444;">
        <p class="mb-0">&copy; 2024 Kantin Afwah. All Rights Reserved.</p>
    </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
