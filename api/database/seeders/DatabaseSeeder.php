<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LeaveRequest;
use App\Models\User;
use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        User::factory()->count(10)->create(); // Crée 10 utilisateurs
        LeaveRequest::factory()->count(20)->create(); // Crée 20 demandes de congé
        Report::factory()->count(5)->create(); // Crée 5 rapports
    }
}
