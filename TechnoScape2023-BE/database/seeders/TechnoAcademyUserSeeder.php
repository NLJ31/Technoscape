<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnoAcademyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techno_academy_users')->insert([
            [
                'user_id' => 1,
                'cv' => 'a',
                'id_card' => 'a',
                'topic' => 'a',
                'payment_status' => 'paid',
                'payment_receipt' => 'image',
            ],
            [
                'user_id' => 2,
                'cv' => 'a',
                'id_card' => 'a',
                'topic' => 'a',
                'payment_status' => 'paid',
                'payment_receipt' => 'image',
            ],
            [
                'user_id' => 3,
                'cv' => 'a',
                'id_card' => 'a',
                'topic' => 'a',
                'payment_status' => 'paid',
                'payment_receipt' => 'image',
            ],
            [
                'user_id' => 4,
                'cv' => 'a',
                'id_card' => 'a',
                'topic' => 'a',
                'payment_status' => 'paid',
                'payment_receipt' => 'image',
            ],
            [
                'user_id' => 5,
                'cv' => 'a',
                'id_card' => 'a',
                'topic' => 'a',
                'payment_status' => 'paid',
                'payment_receipt' => 'image',
            ]
        ]);
    }
}
