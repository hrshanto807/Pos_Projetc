<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('customers')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'mobile' => $faker->phoneNumber,
                'user_id' => 3, // Assuming user IDs between 1 and 10                
            ]);
        }
    }
}
