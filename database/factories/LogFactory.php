<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'action' => fake()->sentence(),
            'ip' => fake()->ipv6(),
            'message' => fake()->paragraph(20),
            'user_id' => array_rand([1, 2, 3], 1) + 1,
        ];
    }
}
