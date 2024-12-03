<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kantin Afwah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
        
        <!-- Tambahkan CDN Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center" style="background-image: url('https://d2vuyvo9qdtgo9.cloudfront.net/company-news/January2024/yMz4kTVAKGTFW4hOv4Nf.webp'); background-size: cover; background-position: center; color: white; padding: 100px 0;">
        <!-- Gambar Logo -->
        <div class="hero-image">
            <img src="https://cdn.pixabay.com/photo/2021/09/22/17/17/mcdonalds-6647433_1280.png" alt="Restaurant Banner" class="img-fluid">
        </div>
        <!-- Teks -->
        <h1>Welcome to Kantin Afwah</h1>
        <p>Enjoy the most delicious meals with us!</p>
        <a href="#menu" class="btn btn-primary">Explore Our Menu</a>
    </header>

    <!-- About Us Section -->
    <section id="about" class="container mt-5">
        <h2>About Us</h2>
        <p>We are a family-friendly restaurant that serves high-quality food with fresh ingredients. Our vision is to provide a warm atmosphere and delicious meals for everyone.</p>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="container mt-5">
        <h2>Our Menu</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/uQSETIkvtYba9RVGHiGe.webp" alt="Dish 1" class="img-fluid">
                <h3>Menu 1</h3>
                <p>4 Sehat 5 Sempurna</p>
                <a href="#menu" class="btn btn-primary">Menu 1</a>
            </div>
            <div class="col-md-4">
                <img src="https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/9hn3Gu6SwCg8TNBMaXFr.webp" alt="Dish 2" class="img-fluid">
                <h3>Menu 2</h3>
                <p>Harganya Terjangkau Dan Ukurannya Lebih Besar!</p>
                <a href="#menu" class="btn btn-primary">Menu 2</a>
            </div>
            <div class="col-md-4">
                <img src="https://d2vuyvo9qdtgo9.cloudfront.net/foods/October2023/Mdfc31HLjuorHac10yKX.webp" alt="Dish 3" class="img-fluid">
                <h3>Menu 3</h3>
                <p>Lezat Dan Bergizi</p>
                <a href="#menu" class="btn btn-primary">Menu 3</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mt-5">
        <h2>Contact Us</h2>
        <p>Alamat         : Umban Sari</p>
        <p>Nomor Telepon  : 08226453290</p>
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
    </section>
    
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Kantin Afwah. All Rights Reserved.</p>
        
        
    </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
