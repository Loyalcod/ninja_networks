<?php

namespace Database\Factories;

use App\Models\Ninja;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;

/**
 * @extends Factory<Ninja>
 */
class NinjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Ninja::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'skill' => fake()->numberBetween(1, 100),
            'bio' => fake()->realText(500),
            'dojo_id' => Dojo::inRandomOrder()->first()->id
        ];
    }
}
