<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypesLocalization;

class TypesLocalizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new TypesLocalization();
        $type->name = 'Contry';
        $type->save();

        $type = new TypesLocalization();
        $type->name = 'State';
        $type->save();

        $type = new TypesLocalization();
        $type->name = 'Municipality';
        $type->save();

    }
}
