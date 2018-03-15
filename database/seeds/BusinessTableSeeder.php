<?php

use App\Business;
use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //create 50 business records
        for($i = 0; $i < 50; $i++) {
            Business::create([
                'title' => $faker->company,
                'description' => $faker->paragraph,
                'votes' => $faker->randomNumber(2),
                'verification' => $faker->boolean(50)
            ]);
        }
    }
}
