<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB :: table('customers') -> insert([
                'username' => $faker->username,
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'password'=> $faker->password,
                'email'=> $faker->email,
                'gender' => $faker->randomElement(['male', 'female']),
                'age' => random_int(18,50),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
