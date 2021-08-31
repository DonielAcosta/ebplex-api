<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeUser;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new TypeUser();
        $type->type = 'Admin';
        $type->level = '1';
        $type->save();
        
        $type = new TypeUser();
        $type->type = 'Owner';
        $type->level = '2';
        $type->save();

        $type = new TypeUser();
        $type->type = 'Tecnico';
        $type->level = '2';
        $type->save();

        $type = new TypeUser();
        $type->type = 'Administrador';
        $type->level = '2';
        $type->save();

    }
}
