<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Direction;
use Faker\Factory as Faker;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      $type = new Direction();
      $type->clients_id = 1;
      $type->localizations_id = 1;
      $type->direction = 'Av 2 lora entre calles 22 y 23';
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 2;
      $type->localizations_id = 2;
      $type->direction = 'sur de bogota';
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 3;
      $type->localizations_id = 3;
      $type->direction = 'av 10 frternidad';
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 4;
      $type->localizations_id = 4;
      $type->direction = 'frontera panama colombia entre calles 25 y 26';
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 5;
      $type->localizations_id = 4;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 6;
      $type->localizations_id = 1;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 7;
      $type->localizations_id = 2;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 8;
      $type->localizations_id = 2;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 9;
      $type->localizations_id = 3;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();

      $type = new Direction();
      $type->clients_id = 10;
      $type->localizations_id = 2;
      $type->direction = $faker->country();
      $type->house_number = 'null';
      $type->apartment_number_tower_and_floor = 'null';
      $type->urbanization = 'null';
      $type->save();
    }
}
