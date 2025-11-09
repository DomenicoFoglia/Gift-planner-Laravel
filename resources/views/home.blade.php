<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-4">Benvenuto in Gift Planner!</h1>
        <p class="mb-6 text-gray-700">
            Gestisci facilmente tutti i tuoi regali, tieni traccia dello stato e aggiungi note importanti.
        </p>

        <div class="flex space-x-4">
            <a href="{{ route('gifts.index') }}" class="bg-violet-500 hover:bg-violet-700 text-white py-2 px-4 rounded">
                Vai alla lista regali
            </a>

            <a href="{{ route('gifts.create') }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded">
                Aggiungi un nuovo regalo
            </a>
        </div>
    </div>
</x-app-layout>
