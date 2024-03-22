<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $faker = Faker::create();
        $product = [
            ['id' => 1,
                 'name' => 'Shirt', 
                 'description' => 'black' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '2' ,
                 'pic' => 'product_data/images/shirt.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 2,
                 'name' => 'Jacket', 
                 'description' => '' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '2' ,
                 'pic' => 'product_data/images/jacket.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 3,
                 'name' => 'Air Purifier', 
                 'description' => 'pm-2.5' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '1' ,
                 'pic' => 'product_data/images/airpurifier.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 4,
                 'name' => 'Tonpo', 
                 'description' => 'human' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> 0.11,
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/tonpo.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 5,
                 'name' => 'Win', 
                 'description' => 'human' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> 999.99,
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/Win.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
        
        ];
            
            DB::table('products')->insert($product);
    }
}
