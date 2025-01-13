<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Slider</h1>

        <!-- Menampilkan pesan error jika ada -->
        @if($errors->any())
            <div class="bg-red-600 text-white p-3 mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulir untuk mengedit slider -->
        <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="gambar_slider" class="block text-sm font-medium">Gambar Slider</label>

                <!-- Menampilkan gambar yang ada jika ada -->
                @if($slider->gambar_slider)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $slider->gambar_slider) }}" alt="Slider Image" class="w-32 h-32 object-cover mb-2">
                        <p class="text-sm text-gray-500">Gambar saat ini</p>
                    </div>
                @endif

                <!-- Input untuk mengganti gambar -->
                <input type="file" name="gambar_slider" id="gambar_slider" class="mt-1 block w-full" accept="image/*" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Perbarui Slider</button>
        </form>
    </div>
</x-app-layout>
