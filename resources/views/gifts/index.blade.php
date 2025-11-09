<x-app-layout>
    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mx-auto px-4 py-6 bg-violet-50 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">I tuoi regali</h1>
            <a href="{{ route('gifts.create') }}"
                class="bg-violet-500 hover:bg-violet-800 text-white font-semibold py-2 px-4 rounded">
                Nuovo regalo
            </a>
        </div>

        @if ($gifts->isEmpty())
            <p class="text-gray-500">Non hai ancora inserito regali.</p>
        @else
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="py-2 px-4 border-b">Destinatario</th>
                        <th class="py-2 px-4 border-b">Occasione</th>
                        <th class="py-2 px-4 border-b">Idea</th>
                        <th class="py-2 px-4 border-b">Budget</th>
                        <th class="py-2 px-4 border-b">Stato</th>
                        <th class="py-2 px-4 border-b">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gifts as $gift)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $gift->recipient }}</td>
                            <td class="py-2 px-4 border-b">{{ $gift->occasion }}</td>
                            <td class="py-2 px-4 border-b">{{ $gift->idea }}</td>
                            <td class="py-2 px-4 border-b">{{ $gift->budget }} €</td>
                            <td class="py-2 px-4 border-b">{{ ucfirst($gift->status) }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('gifts.show', $gift) }}"
                                    class="text-purple-500 hover:underline mr-2">Visualizza</a>
                                <a href="{{ route('gifts.edit', $gift) }}"
                                    class="text-blue-500 hover:underline mr-2">Modifica</a>
                                <form action="{{ route('gifts.destroy', $gift) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Sei sicuro di voler eliminare questo regalo?')"
                                        class="text-red-500 hover:underline">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>
