<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveRequest;

class LeaveRequestSeeder extends Seeder
{
    public function run()
    {
        // Crée 20 demandes de congés aléatoires
        LeaveRequest::factory(20)->create();
    }
}
