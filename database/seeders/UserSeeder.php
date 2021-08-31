<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $faker = Faker::create();
    
        $type = new User();
        $type->type_users_id = 2;
        $type->owner_clients_id = 1;
        $type->email = 'comun@gmail.com';
        $type->active = true;
        $type->password ='$2y$10$.92h5j9rSf8FC50upkcQjuehvcCgN.KDcnp136lM.qFtxmk6cB39a';
        $type->save();
        
        $type = new User();
        $type->type_users_id = 2;
        $type->owner_clients_id = 2;
        $type->email = $faker->unique()->safeEmail;
        $type->active = true;
        $type->password ='$2y$10$in0EnAop5EWAXDwdBaewNeWS8QK3A4quUehRI9mCCYkXy6hJu0afm';
        $type->save();
        
        $type = new User();
        $type->type_users_id = 2;
        $type->owner_clients_id = 3;
        $type->email = $faker->unique()->safeEmail;
        $type->active = true;
        $type->password ='$2y$10$in0EnAop5EWAXDwdBaewNeWS8QK3A4quUehRI9mCCYkXy6hJu0afm';
        $type->save();

        $type = new User();
        $type->type_users_id = 2;
        $type->owner_clients_id = 4;
        $type->email = $faker->unique()->safeEmail;
        $type->active = true;
        $type->password ='$2y$10$in0EnAop5EWAXDwdBaewNeWS8QK3A4quUehRI9mCCYkXy6hJu0afm';
        $type->save();
  
    }
}
