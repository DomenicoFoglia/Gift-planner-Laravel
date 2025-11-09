<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            abort(403);
        }
        // dd($user, $user->gifts);
        $gifts = $user->gifts;
        return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'recipient' => 'required|string|max:255',
            'occasion' => 'required|string|max:255',
            'idea' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'status' => 'required|string|in:da_comprare,acquistato,incartato,consegnato',
            'notes' => 'nullable|string',
        ]);


        $gift = Auth::user()->gifts()->create($validated);

        return redirect()->route('gifts.index')->with('success', 'Regalo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gift $gift)
    {
        $this->authorize('view', $gift);

        return view('gifts.show', compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gift $gift)
    {
        $this->authorize('update', $gift);

        return view('gifts.update', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gift $gift)
    {
        $this->authorize('update', $gift);

        $validated = $request->validate([
            'recipient' => 'required|string|max:255',
            'occasion' => 'required|string|max:255',
            'idea' => 'required|string|max:255',
            'budget' => 'required|numeric|min:0',
            'status' => 'required|string|in:da_comprare,acquistato,incartato,consegnato',
            'notes' => 'nullable|string',
        ]);

        $gift->update($validated);

        return redirect()->route('gifts.index')->with('success', 'Regalo aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gift $gift)
    {
        $this->authorize('delete', $gift);

        $gift->delete();

        return redirect()->route('gifts.index')->with('success', 'Regalo eliminato con successo');
    }
}
