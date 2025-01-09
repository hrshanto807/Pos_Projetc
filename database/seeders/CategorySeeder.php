<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 30 fake categories
        for ($i = 0; $i < 30; $i++) {
            Category::create([
                'name' => $faker->word, // Generate a random word for the name
                'user_id' => 3, // Assuming user IDs between 1 and 10
            ]);
        }
    }

   

}
