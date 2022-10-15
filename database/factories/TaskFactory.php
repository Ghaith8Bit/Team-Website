<?php

namespace Database\Factories;

use Carbon\Carbon;
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
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(20),
            'start_at' => Carbon::now(),
            'end_at' => Carbon::now()->addDays(3),
            'postponementat_at' => Carbon::now()->addDays(2),
            'status' => fake()->boolean(),
            'user_id' => array_rand([1, 2, 3], 1) + 1,
        ];
    }
}
