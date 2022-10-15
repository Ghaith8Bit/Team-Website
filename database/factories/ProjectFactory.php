<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => json_encode(['en' => fake()->sentence(), 'ar' => fake('ar_SA')->governorate()]),
            'description' => json_encode(['en' => fake()->paragraph(20), 'ar' => fake('ar_SA')->governorate()]),
            'link' => fake()->word(),
        ];
    }
}
