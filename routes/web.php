<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\SuperheroController;

Route::resource('superheroes', SuperheroController::class);

use App\Http\Controllers\UniverseController;

// Route to show the form for creating a new universe
Route::get('/universes/create', [UniverseController::class, 'create'])->name('universes.create');

// Route to store the new universe
Route::post('/universes', [UniverseController::class, 'store'])->name('universes.store');

// Optionally, you might want to list all universes
Route::get('/universes', [UniverseController::class, 'index'])->name('universes.index');

Route::resource('universes', UniverseController::class);
use App\Http\Controllers\GenderController;

Route::resource('genders', GenderController::class);

use App\Http\Controllers\FileController;

Route::get('/upload', [FileController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [FileController::class, 'uploadFile'])->name('upload.file');
Route::get('/download/{filename}', [FileController::class, 'downloadFile'])->name('download.file');
