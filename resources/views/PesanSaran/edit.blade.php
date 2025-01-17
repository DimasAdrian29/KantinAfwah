<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Pesan/Saran</h1>
        <form action="{{ route('pesanSaran.update', $pesanSaran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Nama: </label>
                <input type="text" name="nama" value="{{ $pesanSaran->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Email: </label>
                <input type="email" name="email" value="{{ $pesanSaran->email }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Pesan: </label>
                <textarea name="pesan" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $pesanSaran->pesan }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Jawaban: </label>
                <textarea name="jawaban" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ $pesanSaran->jawaban }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
