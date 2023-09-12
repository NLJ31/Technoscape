<?php

namespace Database\Seeders;

use App\Models\HackathonUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HackathonUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        HackathonUser::factory()->count(10)->create();
        
    }
}
