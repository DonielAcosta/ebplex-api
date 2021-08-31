<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\SexUserData;

class SexUserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = new SexUserData();
        $sex->name = 'Maculino';
        $sex->save();

        $sex = new SexUserData();
        $sex->name = 'Femenino';
        $sex->save();
    }
}
