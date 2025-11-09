<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Modifica regalo</h1>

        <form action="{{ route('gifts.update', $gift) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <input type="text" name="recipient" value="{{ old('recipient', $gift->recipient) }}"
                placeholder="Destinatario">
            <input type="text" name="occasion" value="{{ old('occasion', $gift->occasion) }}" placeholder="Occasione">
            <input type="text" name="idea" value="{{ old('idea', $gift->idea) }}" placeholder="Idea">
            <input type="number" step="0.01" name="budget" value="{{ old('budget', $gift->budget) }}"
                placeholder="Budget">

            <select name="status">
                <option value="da_comprare" {{ $gift->status === 'da_comprare' ? 'selected' : '' }}>Da comprare</option>
                <option value="acquistato" {{ $gift->status === 'acquistato' ? 'selected' : '' }}>Acquistato</option>
                <option value="incartato" {{ $gift->status === 'incartato' ? 'selected' : '' }}>Incartato</option>
                <option value="consegnato" {{ $gift->status === 'consegnato' ? 'selected' : '' }}>Consegnato</option>
            </select>

            <textarea name="notes" placeholder="Note">{{ old('notes', $gift->notes) }}</textarea>

            <button type="submit" class="bg-violet-500 text-white px-4 py-2 rounded">Salva modifiche</button>
        </form>
    </div>
</x-app-layout>
