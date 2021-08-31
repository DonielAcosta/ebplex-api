<?php

namespace Database\Seeders;
use App\Models\InstallationOrders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InstallationOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new InstallationOrders();
        $type->installation_statuses_id = 1;
        $type->contracts_id = 1;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(1, ["manager" => $faker->boolean()]);

        $type = new InstallationOrders();
        $type->installation_statuses_id = 2;
        $type->contracts_id = 2;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(1, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 3;
        $type->contracts_id = 3;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(2, ["manager" => $faker->boolean()]);

        $type = new InstallationOrders();
        $type->installation_statuses_id = 4;
        $type->contracts_id = 4;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(2, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 5;
        $type->contracts_id = 5;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(2, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 6;
        $type->contracts_id = 6;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(3, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 6;
        $type->contracts_id = 7;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(3, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 4;
        $type->contracts_id = 8;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(3, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 5;
        $type->contracts_id = 9;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(3, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 6;
        $type->contracts_id = 10;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(1, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 6;
        $type->contracts_id = 6;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(4, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 4;
        $type->contracts_id = 8;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(4, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 5;
        $type->contracts_id = 9;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(4, ["manager" => $faker->boolean()]);


        $type = new InstallationOrders();
        $type->installation_statuses_id = 1;
        $type->contracts_id = 3;
        $type->date_asig = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_ord = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->date_end = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->description = $faker->text(100);
        $type->save();
        $type->Technical()->attach(4, ["manager" => $faker->boolean()]);


       

    }
}