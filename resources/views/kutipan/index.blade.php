<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Kutipan</h1>
        @if (session('successs'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('successs') }}
            </div>
        @endif

        <a href="{{ route('kutipan.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Kutipan
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($kutipan as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">


                        <h2 class="text-lg font-bold">{{ $item->quotes }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($item->nama, 100) }}</p>
                        <div class="mt-4">
                            <a href="{{ route('kutipan.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('kutipan.destroy', $item->id) }}" method="POST" class="inline">
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
