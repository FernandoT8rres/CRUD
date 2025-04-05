<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  // Esta línea importa la clase Hash
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Verificar si el usuario con el correo ya existe antes de crear uno nuevo
        if (!User::where('email', 'test@example.com')->exists()) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'), // Ahora Hash está disponible
            ]);
        }
    }
}
