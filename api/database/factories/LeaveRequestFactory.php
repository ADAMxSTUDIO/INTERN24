<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeaveRequest>
 */
class LeaveRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Crée un utilisateur associé
            'type' => $this->faker->randomElement(['annual', 'sick', 'maternity', 'paternity', 'other']),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'comments' => $this->faker->optional()->text(),
        ];
    }
}
