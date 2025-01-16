<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Afwah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ mix('resources/css/style.css') }}" rel="stylesheet">
    <link href="{{ mix('assets/css/style.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/responsive.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/color.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/fontawesome.min.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
   <link href="{{ mix('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Tambahkan CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    @include('KantinAfwah.home')
    @yield('content')
    {{-- <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14 aos-init aos-animate" data-aos="fade-up">
        <div>
            <img src="dist/assets/images/blog/blog-1.png" class="rounded-md mb-5">

            <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                    href="#">Announcement</a></span>
            <h1 class="text-lg my-3 transition-all hover:text-primary"><a href="#">Introducing new blazzing fast
                    user interface</a></h1>
            <p class="text-sm/relaxed tracking-wider text-gray-500">Introducing the blazzing fast user interface. The
                new UI is fast, secure and most user friendly...
                <a href="#" class="text-primary">read more</a>
            </p>
        </div>
    </div> --}}
    {{-- @include('KantinAfwah.footer') --}}

    <script src="{{ asset('dist/assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/aos/aos.js') }}"></script>
    <script src="{{ asset('dist/assets/js/theme.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
