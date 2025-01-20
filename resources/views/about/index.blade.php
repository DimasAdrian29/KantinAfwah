<x-app-layout>
    <div class="h-screen w-screen py-10 px-8">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-8">About Us</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika ada -->
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-md mb-6 text-center">
                {{ session('error') }}
            </div>
        @endif

        <div>
            @foreach ($about as $item)
                <div class="p-6 bg-white rounded-lg shadow-lg w-full h-full">
                    <h2 class="text-lg font-bold">Foto Pemilik</h2>
                    <img src="{{ asset('storage/' . $item->gambar_pemilik) }}" alt="Foto Pemilik" class="w-full rounded-md mb-4" style="width: 350px; height: 225px;">

                    <h1 class="text-lg font-bold">Foto Kantin</h1>
                    <img src="{{ asset('storage/' . $item->gambar_kantin) }}" alt="Foto Kantin" class="w-full rounded-md mb-4" style="width: 350px; height: 225px;">

                    <h2 class="text-lg font-bold">Deskripsi Kantin:</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $item->deskripsi_kantin }}</p>

                    <h2 class="text-lg font-bold">Deskripsi Pemilik:</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $item->deskripsi_pemilik }}</p>

                    <h2 class="text-lg font-bold">Email:</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $item->email }}</p>

                    <h2 class="text-lg font-bold">Lokasi:</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $item->alamat }}</p>

                    <h2 class="text-lg font-bold">Nomor HP:</h2>
                    <p class="text-sm text-gray-500 mb-4">{{ $item->kontak }}</p>

                    <div class="text-center">
                        <a href="{{ route('about.edit', $item->id) }}">
                            <x-primary-button class="ms-3">
                               Edit
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
