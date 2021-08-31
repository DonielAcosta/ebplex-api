<?php

namespace Database\Seeders;
use App\Models\Plans;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new Plans();
        $type->name = 'platino';
        $type->price = $faker->randomFloat();
        $type->save();

        $type = new Plans();
        $type->name = 'diamante';
        $type->price = $faker->randomFloat();
        $type->save();

        $type = new Plans();
        $type->name = 'oro';
        $type->price = $faker->randomFloat();
        $type->save();

        $type = new Plans();
        $type->name = 'plata';
        $type->price = $faker->randomFloat();
        $type->save();

        $type = new Plans();
        $type->name = 'bronce';
        $type->price = $faker->randomFloat();
        $type->save();
        
    }
}
