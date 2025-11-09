<x-app-layout>
    <div class="container mx-auto px-4 py-6 bg-violet-50 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Dettaglio regalo</h1>
            <a href="{{ route('gifts.index') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">
                Torna alla lista
            </a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <p><strong>Destinatario:</strong> {{ $gift->recipient }}</p>
            <p><strong>Occasione:</strong> {{ $gift->occasion }}</p>
            <p><strong>Idea:</strong> {{ $gift->idea }}</p>
            <p><strong>Budget:</strong> {{ $gift->budget }} €</p>
            <p><strong>Stato:</strong> {{ ucfirst($gift->status) }}</p>
            @if ($gift->notes)
                <p><strong>Note:</strong> {{ $gift->notes }}</p>
            @endif

            <div class="mt-4">
                <a href="{{ route('gifts.edit', $gift) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded mr-2">
                    Modifica
                </a>
                <form action="{{ route('gifts.destroy', $gift) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">
                        Elimina
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
