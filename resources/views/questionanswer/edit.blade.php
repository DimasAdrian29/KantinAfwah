<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('question_answer.update', $questionAnswer->id) }}">
            @csrf
            @method('PUT')

            <!-- Nama -->
            {{-- <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $questionAnswer->nama) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div> --}}

            <!-- Email -->
            <div class="mt-4">
                <label for="pertanyaan" class="block text-sm font-medium text-gray-700">Pertanyaan</label>
                <input type="text" name="pertanyaan" id="pertanyaan" value="{{ old('pertanyaan', $questionAnswer->pertanyaan) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('pertanyaan')" class="mt-2" />
            </div>
            <div class="mt-4">
                <label for="jawaban" class="block text-sm font-medium text-gray-700">jawaban</label>
                <input type="text" name="jawaban" id="jawaban" value="{{ old('jawaban', $questionAnswer->jawaban) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('jawaban')" class="mt-2" />
            </div>



            <div class="mt-4">
                <x-primary-button class="mt-4">
                    Simpan Perubahan
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
