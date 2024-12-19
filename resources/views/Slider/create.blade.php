<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Slider</h1>

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

        <!-- Formulir untuk menambah slider -->
        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="gambar_slider" class="block text-sm font-medium">Gambar Slider</label>
                <input type="file" name="gambar_slider" id="gambar_slider" class="mt-1 block w-full" accept="image/*" required />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
