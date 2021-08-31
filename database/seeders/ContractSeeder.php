<?php

namespace Database\Seeders;
use App\Models\Contract;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = Faker::create();
    
        $type = new Contract();
        $type->clients_id = 1;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 2;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 3;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 4;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 5;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 6;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 7;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 8;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 9;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();

        $type = new Contract();
        $type->clients_id = 10;
        $type->n_contract = $faker->unique()->randomDigit(30);
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->save();
    }
}
