<?php

namespace Database\Factories;

use App\Models\Dojo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Dojo>
 */
class DojoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dojo::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'description' => fake()->paragraph(10),
            'location' => fake()->city()
        ];
    }
}
