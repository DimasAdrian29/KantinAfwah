<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit About Us</h1>
        <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">Kontak Kantin</label>
                <input type="text" name="kontak" value="{{ $about->kontak }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Email Kantin</label>
                <input type="text" name="email" value="{{ $about->email }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Alamat Kantin</label>
                <input type="text" name="alamat" value="{{ $about->alamat }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Kantin: </label>
                <textarea name="deskripsi_kantin" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ $about->deskripsi_kantin }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi Pemilik: </label>
                <textarea name="deskripsi_pemilik" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ $about->deskripsi_pemilik }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Kantin</label>
                <input type="file" name="gambar_kantin" value="{{ $about->gambar_kantin }}" class="mt-1 block w-full" accept="image/*" />
                @if ($about->gambar_kantin)
                    <img src="{{ Storage::url($about->gambar_kantin) }}" class="h-48 mt-2" alt="Gambar Kantin" />
                @endif
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar Pemilik</label>
                <input type="file" name="gambar_pemilik" value="{{ $about->gambar_pemilik }}" class="mt-1 block w-full" accept="image/*" />
                @if ($about->gambar_pemilik)
                    <img src="{{ Storage::url($about->gambar_pemilik) }}" class="h-48 mt-2" alt="Gambar Pemilik" />
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
