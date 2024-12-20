<section class="py-24">
    <div class="container">
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-6 lg:py-16 py-14 aos-init aos-animate" data-aos="fade-up">

            @foreach ($slider as $item)
                <div>
                    <img src="{{ Storage::url($item->gambar_slider) }}" class="rounded-md mb-5">

                    <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                            href="#">{{ Str::limit($item->judul, 30) }}</a></span>
                    <h1 class="text-lg my-3 transition-all hover:text-primary"><a
                            href="#">{{ Str::limit($item->judul, 30) }}</a></h1>
                    <p class="text-sm/relaxed tracking-wider text-gray-500">{!! Str::limit($item->isi_berita, 75) !!}
                        <a href="#" class="text-primary">read more</a>
                    </p>
                </div>
            @endforeach

        </div>
</section>
