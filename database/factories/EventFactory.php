<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $minPeople = floor(fake()->numberBetween(2, 10));

        return [
            'user_id' => User::factory()->create(),
            'color' => fake()->hexColor(),
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'location' => fake()->city(),
            'cost' => fake()->numberBetween(100, 5000),
            'has_food' => false,
            'image' => "",
            "start_time" => fake()->dateTime(),
            "end_time" => fake()->dateTime(),
            "min_people" => $minPeople,
            "max_people" => $minPeople + 5,
        ];
    }


}
