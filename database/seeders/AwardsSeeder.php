<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AwardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $faker = \Faker\Factory::create();
            DB::table('awards')->insert([
                'name' => $faker->name(),
                'description' => $faker->text(),
                'image' => $faker->imageUrl(),
                'cost' => random_int(20, 500),
            ]);
        }
    }
}
