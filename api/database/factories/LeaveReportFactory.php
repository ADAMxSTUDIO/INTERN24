<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveReportFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Génère un utilisateur
            'total_days_taken' => $this->faker->numberBetween(1, 30),
            'remaining_days' => $this->faker->numberBetween(0, 15),
            'report_start_date' => $this->faker->date(),
            'report_end_date' => $this->faker->date(),
        ];
    }
}
