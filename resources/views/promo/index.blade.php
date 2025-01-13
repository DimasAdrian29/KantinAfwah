<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Promo</h1>

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

        <a href="{{ route('promo.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Promo
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($promo as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if ($item->gambar)
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="{{ $item->judul }}" />
                    @else
                        <img src="https://via.placeholder.com/150" class="w-full h-48 object-cover" alt="No image available" />
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <h2 class="text-sm text-gray-500">Tanggal Promo: {{ $item->tanggal_awal_promo }} - {{ $item->tanggal_akhir_promo }}</h2>
                        <p class="text-gray-600 mt-2">{!! Str::limit($item->deskripsi, 100) !!}</p>
                        <div class="mt-4">
                            <a href="{{ route('promo.edit', $item->id_promo) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('promo.destroy', $item->id_promo) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus promo ini?');">
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
