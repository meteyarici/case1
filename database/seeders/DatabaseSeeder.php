<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('competences')->insert(['name' => 'junior',]);
        \DB::table('competences')->insert(['name' => 'middle',]);
        \DB::table('competences')->insert(['name' => 'senior',]);

        \DB::table('positions')->insert(['name' => 'front',]);
        \DB::table('positions')->insert(['name' => 'back',]);
        \DB::table('positions')->insert(['name' => 'full',]);

        $faker = Faker::create();
        foreach (range(0, 60) as $index) {
            \DB::table('users')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'age' => $faker->numberBetween(18,27),
                'position' => $faker->numberBetween(1,3),
                'competence' => $faker->numberBetween(1,3),
                'city' => $faker->city(),

            ]);


        }

    }
}
