<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universe::create([
            'name' => 'Marvel',

        ]);
        Universe::create([
            'name' => 'DC',

        ]);
    
    }
}
