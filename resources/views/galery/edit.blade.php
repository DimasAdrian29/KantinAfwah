<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Galeri</h1>
        <form action="{{ route('galery.update', $galery->id_galery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Judul Galeri: </label>
                <input type="text" name="judul_galery" value="{{ $galery->judul_galery }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal: </label>
                <input type="date" name="tanggal" value="{{ $galery->tanggal }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi: </label>
                <textarea name="deskripsi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $galery->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Foto: </label>
                <input type="file" name="foto" class="mt-1 block w-full" accept="image/*" />
                @if ($galery->foto)
                    <img src="{{ Storage::url($galery->foto) }}" class="h-48 mt-2" alt="Foto Galeri" />
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
