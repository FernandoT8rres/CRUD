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
    return view('superheroes.index', compact('superheroes'));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $genders = Gender::select('id', 'name')->get();
       $universes = Universe::select('id','name')->get();
       return view('superheroes.create',compact('genders', 'universes')); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superhero::create([

            'gender_id' => $request->gender_id,
            'real_name' => $request ->real_name,
            'universe_id' => 1,
            'name' => $request ->name,
            'picture' => $request->picture,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return to_route ('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superhero = Superhero::findorfail($id);
        return view('superheroes.show',compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superhero = Superhero::findorfail($id);
        $genders = Gender::select('id', 'name')->get();
        $universes = Universe::select('id','name')->get();
        return view('superheroes.edit', compact('superhero'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);
        $superhero = Superhero::find($id);
        $superhero->update([
            'gender_id' => $request->gender_id,
            'real_name' => $request ->real_name,
            'universe_id' => 1,
            'name' => $request->name,
            'picture' => $request->picture,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return to_route ('superheroes.index');
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
