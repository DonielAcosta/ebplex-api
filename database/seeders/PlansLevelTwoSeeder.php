<?php

namespace Database\Seeders;
use App\Models\PlansLevelTwo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PlansLevelTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    
        $type = new PlansLevelTwo();
        $type->owner_clients_id = 1;
        $type->name = $faker->name();
        $type->price = $faker->randomFloat();
        $type->save();
        $type->Services()->attach(1);

        $type = new PlansLevelTwo();
        $type->owner_clients_id = 2;
        $type->name = $faker->name();
        $type->price = $faker->randomFloat();
        $type->save();
        $type->Services()->attach(2);

        $type = new PlansLevelTwo();
        $type->owner_clients_id = 3;
        $type->name = $faker->name();
        $type->price = $faker->randomFloat();
        $type->save();
        $type->Services()->attach(3);

        $type = new PlansLevelTwo();
        $type->owner_clients_id = 4;
        $type->name = $faker->name();
        $type->price = $faker->randomFloat();
        $type->save();
        $type->Services()->attach(2);
    }
}
