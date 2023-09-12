<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnoConferenceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techno_conference_users')->insert([
        [
            'user_id' => 1,
            'payment_status' => 'paid',
            'payment_receipt' => 'image',
        ],
        [
            'user_id' => 2,
            'payment_status' => 'paid',
            'payment_receipt' => 'image',
        ],
        [
            'user_id' => 3,
            'payment_status' => 'paid',
            'payment_receipt' => 'image',
        ],
        [
            'user_id' => 4,
            'payment_status' => 'paid',
            'payment_receipt' => 'image',
        ],
        [
            'user_id' => 5,
            'payment_status' => 'paid',
            'payment_receipt' => 'image',
        ]
    ]);
    }
}
