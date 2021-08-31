<?php

namespace Database\Seeders;
use App\Models\OwnerClient;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OwnerClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

        $type = new OwnerClient();
        $type->identification = $faker->randomNumber(8, true);
        $type->name = $faker->name();
        $type->phone = $faker->e164PhoneNumber(15);
        $type->email = $faker->email();
        $type->description = $faker->text(100);
        $type->save();

    }
}
