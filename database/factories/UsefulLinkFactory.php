<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsefulLink>
 */
class UsefulLinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(3),
            'description' => fake()->sentence(),
            'link' => 'https://www.youtube.com/playlist?list=PLftLUHfDSiZ4GfPZxaFDsA7ejUzD7SpWa',
        ];
    }
}
