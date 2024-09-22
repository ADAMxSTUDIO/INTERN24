<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeaveReport;

class LeaveReportSeeder extends Seeder
{
    public function run()
    {
        // Crée 10 rapports de congés aléatoires
        LeaveReport::factory(10)->create();
    }
}
