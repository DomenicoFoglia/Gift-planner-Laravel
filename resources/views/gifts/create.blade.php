<x-app-layout>
    <div class="container bg-violet-50 mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-6">Nuovo regalo</h1>

        <form action="{{ route('gifts.store') }}" method="POST" class="bg-violet-200 p-6 rounded-lg shadow space-y-4">
            @csrf

            <div>
                <label for="recipient" class="block font-semibold mb-1">Destinatario</label>
                <input type="text" name="recipient" id="recipient"
                    class="w-full border-gray-300 rouded-lg shadow-sm focus:ring focus:ring-violet-200 required">
            </div>

            <div>
                <label for="occasion" class="block font-semibold mb-1">Occasione</label>
                <input type="text" name="occasion" id="occasion"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-violet-200" required>
            </div>

            <div>
                <label for="idea" class="block font-semibold mb-1">Idea</label>
                <input type="text" name="idea" id="idea"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-violet-200" required>
            </div>

            <div>
                <label for="budget" class="block font-semibold mb-1">Budget (euro)</label>
                <input type="number" name="budget" id="budget"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-violet-200" required>
            </div>

            <div>
                <label for="status" class="block font-semibold mb-1">Stato</label>
                <select name="status" id="status"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-violet-200">
                    <option value="da_comprare">Pianificato</option>
                    <option value="acquistato">Comprato</option>
                    <option value="incartato">Confezionato</option>
                    <option value="consegnato">Consegnato</option>
                </select>
            </div>

            <div class="flex justify-end mt-4">
                <button type="submit"
                    class="bg-violet-500 hover:bg-violet-600 text-white font-semibold py-2 px-6 rounded">Salva
                    regalo</button>
            </div>
        </form>
    </div>
</x-app-layout>
