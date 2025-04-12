<?php

namespace App\Http\Controllers;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all(); // Obtén todos los géneros
        return view('genders.index', compact('genders')); // Pasa la variable a la vista
            return response()->json(Superhero::all());
    }

    public function create()
    {
        return view('genders.create'); // Asegúrate de que la vista exista
    }

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255|unique:genders,name', // Asegúrate de que el nombre sea único
    ]);

    Gender::create([
        'name' => $request->name,
    ]);

    return to_route('genders.index');
}

/**
 * Display the specified resource.
 */
    public function show(string $id)
    {

    $gender = Gender::findOrFail($id);

    return view('gender.show', compact('gender'));
    $superhero = Superhero::find($id);
    if (!$superhero) {
        return response()->json(['message' => 'Record not found'], 404);
    }
    return response()->json($superhero);

    }

/**
 * Show the form for editing the specified resource.
 */
    public function edit(string $id)
    {
    $gender = Gender::findOrFail($id);
    return view('gender.edit', compact('gender'));
    }

/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, string $id)
    {
    $gender = Gender::find($id);
    $gender->update([
        'name' => $request ->name,

    ]);

    return to_route ('gender.index');
    }

/**
 * Remove the specified resource from storage.
 */
    public function destroy(string $id)
    {
    $gender = Gender::find($id);
    $gender -> delete();
    return to_route('gender.index');
    }
}