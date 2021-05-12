<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "name" => "Alaska Condensed",
            "image" => "/images/alaska.jpg",
            "brand" => "Alaska",
            "category" => "Canned Goods",
            "description" => "4.43L",
            "price" => 75.00,
            "countInStock" => 37,
            "rating" => 3.5,
            "numReviews" => 3.5
        ]);

        Product::create([
            "name" => "Cereal",
            "image" => "/images/cereal.jpg",
            "brand" => "No Brand",
            "category" => "Breakfast",
            "description" => "198g",
            "price" => 249.00,
            "countInStock" => 37,
            "rating" => 4.1,
            "numReviews" => 4.1
        ]);
    }
}
