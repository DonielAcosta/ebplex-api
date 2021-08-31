<?php

namespace Database\Seeders;
use App\Models\InstallationOrders;
use App\Models\InstallOrderUser;
use App\Models\User;

use Illuminate\Database\Seeder;

class InstallOrderUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstallationOrders::factory()
            ->count(4)
            ->create();
    }
}
