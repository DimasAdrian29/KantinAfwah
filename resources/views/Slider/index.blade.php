<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Slider</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika ada -->
        @if (session('error'))
            <div class="bg-red-500 text-white p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tombol untuk menambahkan slider -->
        <a href="{{ route('sliders.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Slider
        </a>

        <!-- Grid untuk menampilkan daftar slider -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($sliders as $slider)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- Menampilkan gambar slider -->
                    <img src="{{ Storage::url($slider->gambar_slider) }}" class="w-full h-48 object-cover"
                        alt="Slider Gambar {{ $slider->id_slider }}" />
                    <div class="p-4">


                        <!-- Tombol Edit dan Hapus -->
                        <div class="mt-4">
                            <!-- Tombol Edit -->
                            <a href="{{ route('sliders.edit', $slider->id) }}"
                               class="text-blue-500 hover:underline">Edit</a>

                            <!-- Form Hapus -->
                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus slider ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
