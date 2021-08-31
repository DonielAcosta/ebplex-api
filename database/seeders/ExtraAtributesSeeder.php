<?php

namespace Database\Seeders;
use App\Models\ExtraAtributes;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ExtraAtributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 1;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 2;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 3;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 4;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 5;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 6;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 7;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 8;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 9;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();

        $type = new ExtraAtributes();
        $type->installation_orders_id = 10;
        $type->name = $faker->name();
        $type->value = $faker->randomFloat();
        $type->save();
    }
}
