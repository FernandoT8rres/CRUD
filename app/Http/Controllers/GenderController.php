<?php

namespace App\Http\Controllers;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index(){

    $gender = Gender::all();

    return view('gender.index', compact('gender'));
    }

    public function create()
    {
    return view('gender.create');
    }

/**
 * Store a newly created resource in storage.
 */
    public function store(Request $request)
    {
        Gender::create([
        'name' => $request ->name,
        ]);

        return to_route('gender.index');
    }

/**
 * Display the specified resource.
 */
    public function show(string $id)
    {

    $gender = Gender::findOrFail($id);

    return view('gender.show', compact('gender'));

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