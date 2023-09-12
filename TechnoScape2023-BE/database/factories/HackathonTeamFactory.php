<?php

namespace Database\Factories;

use App\Models\HackathonTeam;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HackathonTeam>
 */
class HackathonTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teamToken = $this->generateTeamToken();

        while (HackathonTeam::where('team_token', $teamToken)->exists()) {
           $teamToken = $this->generateTeamToken();
        }
        return [
            'name' => $this->faker->company(),
            'team_token' => $teamToken,
            'is_binusian' => $this->faker->boolean(50),
            'payment_type' => $this->faker->randomElement(['early', 'general']),
            'payment_status' => $this->faker->randomElement(['unpaid', 'pending', 'accepted', 'rejected']),
            'payment_receipt' => $this->faker->boolean(30) ? $this->faker->imageUrl() : null,
        ];
    }
    private function generateTeamToken()
    {
        return Str::random(6);
    }
}
