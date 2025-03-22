<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universe::all();
        return view('universes.index',compact('universes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Universe::create([
        'name' => $request ->name,
       ]);

       return to_route('universes.index');
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