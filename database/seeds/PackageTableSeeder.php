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

            $package->Destination = $faker->words();
            $package->Destination = $faker->words();
            $package->Days = $faker->numberBetween(1, 21);
            $package->Treatment = $faker->word();
            $package->Price = $faker->numberBetween(100, 2000);

            $package->save();
        }
    }
}
