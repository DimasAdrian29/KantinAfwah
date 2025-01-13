<x-app-layout>
    <div class="max-w-2xl mx-auto p-4">
        <form method="POST" action="{{ route('question_answer.store') }}">
            @csrf
            <input type="text" name="pertanyaan" id="pertanyaan" placeholder="pertanyaan anda"
                class="block w-full mt-4 border-gray-300 rounded-md">{{ old('message') }}</input>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />

            <input type="text" name="jawaban" id="jawaban" placeholder="jawaban"
                class="block w-full mt-4 border-gray-300 rounded-md">{{ old('message') }}</input>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />

            <x-primary-button class="mt-4">Kirim Pesan</x-primary-button>
        </form>

        <div class="mt-6">
            @foreach ($QuestionAnswer as $pesan)
                <div class="p-4 mb-4 bg-white rounded shadow">

                    @if ($pesan->pertanyaan)
                        <p><strong>pertanyaan:</strong>{{ $pesan->pertanyaan }}</p>
                    @endif
                    @if ($pesan->jawaban)
                        <p><strong>jawaban:</strong>{{ $pesan->jawaban }}</p>
                    @endif
                </div>
                <a href="{{ route('question_answer.edit', $pesan) }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-black text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                    <!-- Ikon Heroicons (Pencil Icon) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5h2M7 7h10l-1 14H8L7 7z" />
                    </svg>
                    Edit
                </a>
                <form action="{{ route('question_answer.destroy', $pesan) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-500 text-black text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                        <!-- Ikon Trash -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                        </svg>
                        Delete
                    </button>
                </form>
            @endforeach
        </div>
    </div>
</x-app-layout>
