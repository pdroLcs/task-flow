<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // 'title', 'start_date', 'end_date', 'completed', 'priority', 'user_id'
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'title' => fake()->sentence(3),
            'start_date' => now(),
            'end_date' => null,
            'completed' => fake()->boolean(),
            'priority' => fake()->randomElement(['low', 'medium', 'high'])
        ];
    }
}
