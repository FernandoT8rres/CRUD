<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Gender;
use App\Models\Universe;
use Illuminate\Http\Request;
use Carbon\Carbon;


class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $superheroes = Superhero::all();
    return view('superheroes.index', compact('superheroes'));
    return response()->json(Superhero::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::select('id', 'name')->get(); // Obtén todos los géneros
        $universes = Universe::all(); // Obtén todos los universos
        return view('superheroes.create', compact('genders', 'universes')); // Pasa los géneros y universos a la vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gender_id' => 'required|exists:genders,id',
            'real_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'universe_id' => 'required|exists:universes,id',
            'picture' => 'nullable|string|max:255',
        ]);
    
        Superhero::create([
            'gender_id' => $request->gender_id,
            'real_name' => $request->real_name,
            'universe_id' => $request->universe_id,
            'name' => $request->name,
            'picture' => $request->picture,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
        return to_route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = Superhero::findorfail($id);
        return view('superheroes.show',compact('superhero'));
            $superhero = Superhero::find($id);
            if (!$superhero) {
                return response()->json(['message' => 'Record not found'], 404);
            }
            return response()->json($superhero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id); // Obtén el superhéroe por ID
        $universes = Universe::all(); // Obtén todos los universos
    
        return view('superheroes.edit', compact('superhero', 'universes')); // Pasa las variables a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'real_name' => 'required|string|max:255', // Asegúrate de que este campo esté validado
            'gender_id' => 'required|exists:genders,id', // Asegúrate de que este campo también esté en el formulario
            'universe_id' => 'required|exists:universes,id', // Asegúrate de que este campo también esté en el formulario
            'name' => 'required|string|max:255',
            'picture' => 'nullable|url', // O cualquier otra validación que necesites
        ]);
    
        $superhero = Superhero::findOrFail($id); // Asegúrate de que el superhéroe existe
    
        $superhero->update([
            'gender_id' => $request->gender_id,
            'real_name' => $request->real_name, // Asegúrate de que este campo esté presente
            'universe_id' => $request->universe_id,
            'name' => $request->name,
            'picture' => $request->picture, // Asegúrate de que este campo también esté en el formulario
            'updated_at' => Carbon::now(),
        ]);
    
        return to_route('superheroes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superhero = Superhero::find($id);
        $superhero->delete();
        return to_route ('superheroes.index');
    }
}
