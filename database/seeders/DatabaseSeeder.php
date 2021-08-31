<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TypeUserSeeder;
use Database\Seeders\PlansSeeder;
use Database\Seeders\SubscriptionsSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PaymentMethodSeeder;
use Database\Seeders\UserDataSeeder;
use Database\Seeders\SexUserDataSeeder;
use Database\Seeders\OwnerClientSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\TypesLocalizationSeeder;
use Database\Seeders\LocalizationSeeder;
use Database\Seeders\DirectionSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\PaymentsSeeder;
use Database\Seeders\InvoiceSeeder;
use Database\Seeders\InstallationStatusSeeder;
use Database\Seeders\InstallationOrdersSeeder;

use Database\Seeders\ContractSeeder;
use Database\Seeders\ExtraAtributesSeeder;
use Database\Seeders\PlansLevelTwoSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\HistoricalIntallationOrderSeeder;
use Database\Seeders\PackagesSeeder;
use Database\Seeders\ServiceAtributesSeeder;
use Database\Seeders\DataCompanySeeder;
use Database\Seeders\UserOwnerClientsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

        TypeUserSeeder::class,
        PlansSeeder::class,
        OwnerClientSeeder::class,
        UserSeeder::class,
        SubscriptionsSeeder::class,
        SexUserDataSeeder::class,
        UserDataSeeder::class,
        PaymentMethodSeeder::class,
        TypeSeeder::class,
        TypesLocalizationSeeder::class,
        LocalizationSeeder::class,
        ClientSeeder::class,
        DirectionSeeder::class,
        ServiceSeeder::class,
        PlansLevelTwoSeeder::class,
        ContractSeeder::class,
        PackagesSeeder::class,
        InstallationStatusSeeder::class,
        InstallationOrdersSeeder::class,
        invoiceSeeder::class,
        ExtraAtributesSeeder::class,
        PaymentsSeeder::class,
        HistoricalIntallationOrderSeeder::class,
        ServiceAtributesSeeder::class,
        DataCompanySeeder::class,
        // UserOwnerClientsSeeder::class
        ]);
    }
}