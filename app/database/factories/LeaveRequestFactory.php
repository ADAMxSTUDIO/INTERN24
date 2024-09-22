<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveRequestFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Génère un utilisateur
            'type' => $this->faker->randomElement(['vacation', 'sick leave', 'personal leave']),
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
            'reason' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'comments' => $this->faker->optional()->sentence(),
            'manager_id' => User::factory()->state(['role_id' => 2]), // Génère un manager avec role_id = 2
        ];
    }
}


