<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new Service();
        $type->owner_clients_id = 1;
        $type->name = 'internet fibra optica';
        $type->price = $faker->randomFloat();
        $type->description = 'servicio de 50 Mbs 30 Mbs 20 Mbs ';
        $type->save();

        $type = new Service();
        $type->owner_clients_id = 2;
        $type->name = 'internet linea par trenzado';
        $type->price = $faker->randomFloat();
        $type->description = 'servicio cable par trenzado conectores rj45';
        $type->save();

        $type = new Service();
        $type->owner_clients_id = 3;
        $type->name = 'Tv fibra optica';
        $type->price = $faker->randomFloat();
        $type->description = 'Mejor calidad y mayor ancho de banda en tv';
        $type->save();

        $type = new Service();
        $type->owner_clients_id = 4;
        $type->name = 'Tv normal';
        $type->price = $faker->randomFloat();
        $type->description = 'menor frecuencia disponible en toda la zona';
        $type->save();
    }
}
