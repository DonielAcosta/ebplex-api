<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\DataCompany;
use Faker\Factory as Faker;

class DataCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new DataCompany();
        $type->owner_clients_id = 1;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 2;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 3;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 4;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 5;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 6;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 7;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 8;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 9;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();

        $type = new DataCompany();
        $type->owner_clients_id = 10;
        $type->bussiness_name = $faker->text(40);
        $type->legal_representative = $faker->name();
        $type->save();
    }
}
