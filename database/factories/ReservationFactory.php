<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'reservation_time' => fake()->dateTimeBetween('+1 days', '+1 month'),
            'number_of_guests' => fake()->numberBetween(1, 20),
            'occasion' => fake()->randomElement(['Birthday', 'Anniversary', 'Business Meeting', null]),
            'note' => fake()->optional()->paragraph(),
        ];
    }
}
