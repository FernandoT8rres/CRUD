<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Models\Superhero;

Route::get('/', function () {
    $superheroes = Superhero::all(); // Obtén los datos
    return view('Superheroes.index', compact('superheroes')); // Pasa la variable a la vista
});

Route::delete('/gender/{id}', [GenderController::class, 'destroy'])->name('gender.destroy');


Route::get('/gender', [GenderController::class, 'index'])->name('gender.index');
Route::get('/gender/create', [GenderController::class, 'create'])->name('gender.create');
Route::post('/gender', [GenderController::class, 'store'])->name('gender.store');
Route::get('/gender/{id}/edit', [GenderController::class, 'edit'])->name('gender.edit');
Route::get('/gender/{id}', [GenderController::class, 'show'])->name('gender.show');



Route::resource('/universes', UniverseController::class);
Route::resource('/superheroes', SuperheroController::class);
Route::resource('gender', GenderController::class);



//Route::get('/universes',[UniverseController::class,'index']);
