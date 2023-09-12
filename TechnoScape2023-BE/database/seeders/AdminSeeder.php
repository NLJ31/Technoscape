<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'eeo@bncc.net',
            'password' => bcrypt('AkuCintaTS23!@#$'),
            'line_id' => 'BNCC.net',
            'whatsapp' => '+6281234567890',
            'place_of_birth' => 'jakarta',
            'date_of_birth' => '2000-02-24',
            'gender' => 'male',
            'company' => 'BNCC',
            'is_admin' => true,
        ]);
    }
}
