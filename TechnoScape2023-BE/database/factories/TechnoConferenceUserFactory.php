<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TechnoConferenceUser>
 */
class TechnoConferenceUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => $faker->unique()->numberBetween(1, App\Models\User::count()),
            // 'payment_type' => $this->faker->randomElement(['early', 'general']),
            // 'payment_status' => $this->faker->randomElement(["unpaid", "paid", "accepted", "rejected"])
        ];
    }
}
