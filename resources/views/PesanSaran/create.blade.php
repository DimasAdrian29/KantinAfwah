<x-app-layout>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-3 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Pesan/Saran</h1>
        <form action="{{ route('pesanSaran.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama: </label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Email: </label>
                <input type="email" name="email" value="{{ old('email') }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Pesan: </label>
                <textarea name="pesan" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('pesan') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
