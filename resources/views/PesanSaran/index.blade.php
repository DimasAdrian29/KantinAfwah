<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Pesan dan Saran</h1>

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

        <a href="{{ route('pesanSaran.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Pesan/Saran
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($pesanSaran as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->nama }}</h2>
                        <h2 class="text-sm text-gray-500">Email: {{ $item->email }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($item->pesan, 100) }}</p>
                        @if ($item->jawaban)
                            <p class="text-green-500 mt-2">Jawaban: {{ Str::limit($item->jawaban, 100) }}</p>
                        @else
                            <p class="text-red-500 mt-2">Belum ada jawaban</p>
                        @endif
                        <div class="mt-4">
                            <a href="{{ route('pesanSaran.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('pesanSaran.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan/saran ini?');">
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
