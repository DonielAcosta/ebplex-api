<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new Client();
        $type->owner_clients_id = 1;
        $type->types_id = 1;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 2;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();
        
        $type = new Client();
        $type->owner_clients_id = 3;
        $type->types_id = 1;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 4;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 5;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 6;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 7;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();
 
        $type = new Client();
        $type->owner_clients_id = 8;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 9;
        $type->types_id = 1;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();

        $type = new Client();
        $type->owner_clients_id = 10;
        $type->types_id = 2;
        $type->identification = $faker->randomNumber(8, true);
        $type->lastname = $faker->lastName();
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->save();
    }
}
