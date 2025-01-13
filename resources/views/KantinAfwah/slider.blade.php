<section class="py-24">
    <div class="container">
        <!-- Carousel untuk gambar slide -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slider as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ Storage::url($item->gambar_slider) }}" class="d-block w-100 rounded-md mb-5" alt="{{ Str::limit($item->judul, 30) }}" style="position:absolute width:absolute height:absolute" >
                        <div class="carousel-caption d-none d-md-block">
                            <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2">
                                <a href="#">{{ Str::limit($item->judul, 30) }}</a>
                            </span>
                            <h1 class="text-lg my-3 transition-all hover:text-primary">
                                <a href="#">{{ Str::limit($item->judul, 30) }}</a>
                            </h1>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Tombol navigasi carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
