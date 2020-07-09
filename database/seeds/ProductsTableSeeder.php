<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++) {
            Product::create([
                'name' => $faker->word,
                'code' => $faker->currencyCode,
                'price' => $faker->numberBetween(1, 500),
                'status' => 'active'
            ]);
        }
    }
}
