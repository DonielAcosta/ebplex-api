<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Packages;
use Faker\Factory as Faker;

    class PackagesSeeder extends Seeder
    {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $type = new Packages();
        $type->plans_level_twos_id = 1;
        $type->services_id = 1;
        $type->contracts_id = 1;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();

        $type = new Packages();
        $type->plans_level_twos_id = 2;
        $type->services_id = 2;
        $type->contracts_id = 2;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();

        $type = new Packages();
        $type->plans_level_twos_id = 3;
        $type->services_id = 3;
        $type->contracts_id = 3;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();

        $type = new Packages();
        $type->plans_level_twos_id = 4;
        $type->services_id = 4;
        $type->contracts_id = 4;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();

        $type = new Packages();
        $type->plans_level_twos_id = 4;
        $type->services_id = 3;
        $type->contracts_id = 4;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();

        $type = new Packages();
        $type->plans_level_twos_id = 4;
        $type->services_id = 1;
        $type->contracts_id = 4;
        $type->price = $faker->randomDigit();
        $type->qty = $faker->randomDigit();
        $type->save();
    }
}
