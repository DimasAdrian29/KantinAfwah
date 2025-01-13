<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Galeri</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('galery.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Galeri
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($galery as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if ($item->foto)
                        <img src="{{ Storage::url($item->foto) }}" class="w-full h-48 object-cover" alt="{{ $item->judul_galery }}" />
                    @else
                        <img src="https://via.placeholder.com/150" class="w-full h-48 object-cover" alt="No image available" />
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul_galery }}</h2>
                        <h2 class="text-sm text-gray-500">Tanggal: {{ $item->tanggal }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($item->deskripsi, 100) !!}</p>
                        <div class="mt-4">
                            <a href="{{ route('galery.edit', $item->id_galery) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('galery.destroy', $item->id_galery) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
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
