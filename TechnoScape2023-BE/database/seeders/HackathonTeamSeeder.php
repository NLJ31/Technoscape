<?php

namespace Database\Seeders;

use App\Models\HackathonTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HackathonTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        HackathonTeam::factory()->count(10)->create();
    }
}
