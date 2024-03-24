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
                 'description' => 'I hate this jacket' ,
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
                 'name' => 'Rose', 
                 'description' => 'Romantic and Sexy' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '6' ,
                 'pic' => 'product_data/images/rose.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],


            ['id' => 5,
                 'name' => 'Bear', 
                 'description' => 'Just gummy bear' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '2' ,
                 'pic' => 'product_data/images/bear.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
              
            ['id' => 6,
                 'name' => 'Launch', 
                 'description' => 'Happiness meal ever' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/bingsu.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
             ],

             ['id' => 7,
                 'name' => 'Black_card', 
                 'description' => 'card limit 100,000,000$' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '1' ,
                 'pic' => 'product_data/images/black_card.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 8,
                 'name' => 'Brownie', 
                 'description' => 'Smart and protect your house' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '4' ,
                 'pic' => 'product_data/images/brownie.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 9,
                 'name' => 'Daddy', 
                 'description' => 'Use more sunscreen' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/daddy.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 10,
                 'name' => 'Diamond', 
                 'description' => 'Unnesserry thing , useless' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '2' ,
                 'pic' => 'product_data/images/dimond.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 11,
                 'name' => 'Dogs', 
                 'description' => 'Friend play fix alone' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '4' ,
                 'pic' => 'product_data/images/dogs.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 12,
                 'name' => 'Dragon_fruit', 
                 'description' => 'Eat when hungry' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/dragon_fruit.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 13,
                 'name' => 'Dubai', 
                 'description' => 'Just regular leaves' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '6' ,
                 'pic' => 'product_data/images/Dubai.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 14,
                 'name' => 'Matcha', 
                 'description' => 'Original matcha, 0% Alcohol' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/matcha.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 15,
                 'name' => 'Mooyor', 
                 'description' => 'Cute and very tasty' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '4' ,
                 'pic' => 'product_data/images/mooyor.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 16,
                 'name' => 'Poker', 
                 'description' => 'He is gonna take all of your money' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '4' ,
                 'pic' => 'product_data/images/poker.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 17,
                 'name' => 'Sashimi', 
                 'description' => 'Fresh but chew like a gum' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/sashimi.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 18,
                 'name' => 'Sheet 1', 
                 'description' => 'Designed for replacing your pillow' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/sheet1.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 19,
                 'name' => 'Sheet 2', 
                 'description' => 'Designed for replacing your pillow' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/sheet2.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 20,
                 'name' => 'Speaker', 
                 'description' => 'Loud asf' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '1' ,
                 'pic' => 'product_data/images/speaker.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 21,
                 'name' => 'Tea', 
                 'description' => 'Sweetier than matcha, for people who hate coffee' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/tea.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 22,
                 'name' => 'Trash', 
                 'description' => 'Throw yourself into it' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '2' ,
                 'pic' => 'product_data/images/trash.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 23,
                 'name' => 'Water', 
                 'description' => 'What is your expectaion about water?' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> number_format($faker->randomFloat(2, 100, 1000), 2),
                 'category_id'=> '5' ,
                 'pic' => 'product_data/images/water.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],

            ['id' => 24,
                 'name' => 'Tonpo', 
                 'description' => 'Italian boi' ,
                 'quantity' => random_int(1, 100) ,
                 'price'=> 0.11,
                 'category_id'=> '3' ,
                 'pic' => 'product_data/images/tonpo.jpg',
                 'created_at' => now(), 
                 'updated_at' => now()
            ],
            ['id' => 25,
                 'name' => 'Win', 
                 'description' => 'Handsome guy' ,
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
