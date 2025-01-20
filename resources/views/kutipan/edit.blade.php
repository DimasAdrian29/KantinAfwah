<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Kutipan</h1>
        <form action="{{ route('kutipan.update', $kutipan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">quotes</label>
                <input type="text" name="quotes" value="{{ $kutipan->quotes }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">nama</label>
                <input type="text" name="nama" value="{{ $kutipan->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
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
