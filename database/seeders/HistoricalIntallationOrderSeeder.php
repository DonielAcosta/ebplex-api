<?php

namespace Database\Seeders;
use App\Models\HistoricalIntallationOrder;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HistoricalIntallationOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 1;
        $type->installation_statuses_id = 1;
        $type->users_id = 1;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 2;
        $type->installation_statuses_id = 2;
        $type->users_id = 2;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 3;
        $type->installation_statuses_id = 3;
        $type->users_id = 2;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 4;
        $type->installation_statuses_id = 4;
        $type->users_id = 1;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 5;
        $type->installation_statuses_id = 5;
        $type->users_id = 1;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 6;
        $type->installation_statuses_id = 6;
        $type->users_id = 2;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 7;
        $type->installation_statuses_id = 1;
        $type->users_id = 2;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 8;
        $type->installation_statuses_id = 2;
        $type->users_id = 1;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 9;
        $type->installation_statuses_id = 3;
        $type->users_id = 2;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

        $type = new HistoricalIntallationOrder();
        $type->installation_orders_id = 10;
        $type->installation_statuses_id = 4;
        $type->users_id = 1;
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();

    }
}
