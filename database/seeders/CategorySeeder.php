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
            ['id' => 3, 'name' => 'Food', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Sports equipment', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Baby product', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Household items', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert roles into the roles table
        DB::table('categories')->insert($categories);
    }
}
