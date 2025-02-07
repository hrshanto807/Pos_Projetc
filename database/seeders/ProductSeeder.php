<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Fetch all category IDs
        $categoryIds = DB::table('categories')->pluck('id')->toArray();       

        // Iterate through each category ID
        foreach ($categoryIds as $categoryId) {
            // Create a specific number of products for each category
            for ($i = 1; $i <= 1; $i++) { // Adjust '3' for the desired number of products per category
                DB::table('products')->insert([
                    'name' => $faker->word, // Random product name
                    'price' => $faker->numberBetween(100, 1000), // Random price
                    'unit' => $faker->randomElement(['kg', 'litre', 'pcs']), // Random unit
                    'category_id' => $categoryId, // Assign each product to a specific category
                    'user_id' => 3, // Static user_id (can be dynamic if needed)
                   
                ]);
            }
        }
    }
}
