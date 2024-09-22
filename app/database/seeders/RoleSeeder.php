<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crée les rôles par défaut
        Role::create(['name' => 'employee']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'admin']);
    }
}

