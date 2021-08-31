<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ServiceAtributes;
use Faker\Factory as Faker;

class ServiceAtributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new ServiceAtributes();
        $type->services_id = 1;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 2;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 3;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 4;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 2;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 4;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ServiceAtributes();
        $type->services_id = 1;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();
    }
}
