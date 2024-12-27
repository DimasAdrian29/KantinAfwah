<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Profile</title>
    <link rel="stylesheet" href="{{ asset('css/styleAboutUs.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <h1>Kantin Afwah</h1>
        </div>
    </header>

    <section id="about" class="about-us">
        <div class="container">
            <div class="text-with-image">
                <img src="{{ asset('kantinRandom.png') }}" alt="Deskripsi Gambar">
                <p>
                    Kantin ini memiliki berbagai jenis makanan dan minuman. memiliki berbagai jenis makanan dan minuman.
                    memiliki berbagai jenis makanan dan minuman.memiliki berbagai jenis makanan dan minuman.memiliki
                    berbagai jenis makanan dan minuman.memiliki berbagai jenis makanan dan minuman.memiliki
                    berbagai jenis makanan dan minuman
                </p>
            </div>
            <br><br><br>
            <h3>Kenalan sama pemilik nya, Yuk!</h3>
            <div class="text-with-image">

                <p>
                    Fulanah, seorang ibu rumah tangga yang bla bla bla bla, memiliki berbagai jenis makanan dan minuman.memiliki
                    berbagai jenis makanan dan minuman.memiliki berbagai jenis makanan dan minuman.memiliki
                    berbagai jenis makanan dan minuman. memiliki berbagai jenis makanan dan minuman.memiliki
                    berbagai jenis makanan dan minuman
                </p>
                <img src="{{ asset('pemilikKantin.png') }}" alt="Deskripsi Gambar">
            </div>

            <div class="profile-info">

                <br>

                <header>
                    <h3>Contact Information</h3>
                </header>
                <br><br>
                <div class="text-with-image">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5925.529062952577!2d101.42704892
                        437945!3d0.5707925165923752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab676f69bb01%3A0xfc04c99b0bbd2b1b!2s
                        Kantin%20Kampus%20PCR!5e0!3m2!1sen!2sid!4v1733923469948!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    @foreach ($about as $item)
                    <ul>
                        <li><strong>Location:</strong>{{ $item->alamat }}</li>
                        <li><strong>Phone:</strong>{{ $item->kontak }}</li>
                        <li><strong>Email:</strong>{{ $item->email }}</li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <a href="{{ route('about.edit', $item->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
        Edit
    </a>
    <footer>
        <div class="container">
            <p>&copy; 2024 Kantin Afwan. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>
