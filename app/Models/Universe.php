<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Add this line

class Universe extends Model
{
    use HasFactory; // This line uses the HasFactory trait

    protected $table = "universes";

    protected $fillable = [
        'name'
    ];

    public function superheroes()
    {
        return $this->hasMany(Superhero::class);
    }
}