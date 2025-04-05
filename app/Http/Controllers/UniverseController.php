<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function create()
    {
        return view('universes.create');
    }
    // Store a newly created universe in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Universe::create($request->all());

        return redirect()->route('universes.index')->with('success', 'Universe created successfully.');
    }

    // Optionally, you can add an index method to list universes
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index', compact('universes'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $universe = Universe::findOrFail($id);
    return view('universes.show', compact('universe'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $universe = Universe::findOrFail($id);
        return view('universes.edit', compact('universe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $universe = Universe::find($id);
        $universe->update([
            'name' => $request ->name,
        ]);

        return to_route ('universes.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $universe = Universe::find($id);
        $universe -> delete();
        return to_route('universes.index');
    }
}