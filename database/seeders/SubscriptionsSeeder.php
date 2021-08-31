<?php

namespace Database\Seeders;
use App\Models\Subscriptions;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubscriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new Subscriptions();
        $type->plans_id = 1;
        $type->owner_clients_id = 1;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 2;
        $type->owner_clients_id = 2;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 3;
        $type->owner_clients_id = 3;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 4;
        $type->owner_clients_id = 4;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 5;
        $type->owner_clients_id = 5;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 5;
        $type->owner_clients_id = 6;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 4;
        $type->owner_clients_id = 7;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 3;
        $type->owner_clients_id = 8;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 2;
        $type->owner_clients_id = 9;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();

        $type = new Subscriptions();
        $type->plans_id = 1;
        $type->owner_clients_id = 10;
        $type->name = $faker->name();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->price = $faker->randomFloat();
        $type->inactive = $faker->boolean();
        $type->save();
    }
}
