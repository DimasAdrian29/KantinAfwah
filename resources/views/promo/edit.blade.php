<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Promo</h1>
        <form action="{{ route('promo.update', $promo->id_promo) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Judul Promo: </label>
                <input type="text" name="judul" value="{{ $promo->judul }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Awal Promo: </label>
                <input type="date" name="tanggal_awal_promo" value="{{ $promo->tanggal_awal_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Akhir Promo: </label>
                <input type="date" name="tanggal_akhir_promo" value="{{ $promo->tanggal_akhir_promo }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi: </label>
                <textarea name="deskripsi" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $promo->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Syarat dan Ketentuan: </label>
                <textarea name="syarat_dan_ketentuan" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $promo->syarat_dan_ketentuan }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar: </label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($promo->gambar)
                    <img src="{{ Storage::url($promo->gambar) }}" class="h-48 mt-2" alt="Gambar Promo" />
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
