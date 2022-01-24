<?php

use Illuminate\Database\Seeder;

// inclusion Faker

use Faker\Generator as Faker;

// inclusione Model 

use App\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 30; $i++) {
            $package = new Package();

            $package->Destination = $faker->word();
            $package->State = $faker->word();
            $package->Days = $faker->randomDigit();
            $package->Treatment = $faker->word();
            $package->Price = $faker->randomDigit();

            $package->save();
        }
    }
}
