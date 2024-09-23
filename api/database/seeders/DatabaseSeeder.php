<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LeaveRequest;
use App\Models\User;
use App\Models\Report;
use Database\Factories\LeaveRequestFactory;
use Database\Factories\ReportFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create(); // Crée 10 utilisateurs
        LeaveRequest::factory()->count(20)->create(); // Crée 20 demandes de congé
        Report::factory()->count(5)->create(); // Crée 5 rapports
    }
}
