<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        // Crée 20 notifications aléatoires
        Notification::factory(20)->create();
    }
}

