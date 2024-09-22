<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crée 10 utilisateurs avec des rôles aléatoires
        User::factory(10)->create();
    }
}
