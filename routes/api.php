<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PowerController;
use App\Http\Controllers\WeaknessController;

Route::get('/universes', [UniverseController::class, 'index']);
Route::get('/universes/{id}', [UniverseController::class, 'show']);

Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);

Route::get('/genders', [GenderController::class, 'index']);
Route::get('/genders/{id}', [GenderController::class, 'show']);

Route::get('/groups', [GroupController::class, 'index']);
Route::get('/groups/{id}', [GroupController::class, 'show']);

Route::get('/powers', [PowerController::class, 'index']);
Route::get('/powers/{id}', [PowerController::class, 'show']);

Route::get('/weaknesses', [WeaknessController::class, 'index']);
Route::get('/weaknesses/{id}', [WeaknessController::class, 'show']);
