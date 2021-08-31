<?php

namespace Database\Seeders;
use App\Models\InstallationStatus;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InstallationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $faker = Faker::create();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Rechazado';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Por Asignar';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'En Espera De Aceptacion';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Asignado';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Confirmado';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Re-Asignado';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();

      $type = new InstallationStatus();
      $type->owner_clients_id = 1;
      $type->status = 'Finalizado';
      $type->colour = $faker->hexcolor();
      $type->dark = $faker->boolean();
      $type->save();
    }
}
