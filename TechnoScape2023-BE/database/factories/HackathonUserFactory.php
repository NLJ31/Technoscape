<?php

namespace Database\Factories;

use App\Models\HackathonTeam;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HackathonUser>
 */
class HackathonUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::inRandomOrder()->first();
        $team = HackathonTeam::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'hackathon_team_id' => $team->id,
            'cv' => $this->faker->url(),
            'id_card' =>  $this->faker->url(),
            'is_leader' => $this->faker->boolean(50),
        ];
    }
}
