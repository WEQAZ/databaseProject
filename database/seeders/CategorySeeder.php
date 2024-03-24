<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Category data
        $categories = [
            ['id' => 1, 'name' => 'IT gadgets', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Fashion and Lifestyle', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Spiritual Anchor', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Living Things', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Food and Drink', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Plant and Garden', 'created_at' => now(), 'updated_at' => now()],
            
        ];

        // Insert roles into the roles table
        DB::table('categories')->insert($categories);
    }
}
