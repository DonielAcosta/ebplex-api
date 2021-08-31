<?php

namespace Database\Seeders;
use App\Models\Payments;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $type = new Payments();
        $type->payment_method_id = 1;
        $type->invoices_id = 1;
        $type->n_control = '1';
        $type->n_reference ='1';
        $type->name = 'Bofa-Zelle';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 2;
        $type->invoices_id = 2;
        $type->n_control = '2';
        $type->n_reference ='2';
        $type->name = 'Paypal';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 3;
        $type->invoices_id = 3;
        $type->n_control = '3';
        $type->n_reference ='3';
        $type->name = 'Airtm';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 4;
        $type->invoices_id = 4;
        $type->n_control = '4';
        $type->n_reference ='4';
        $type->name = 'Skrill';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 5;
        $type->invoices_id = 5;
        $type->n_control = '5';
        $type->n_reference ='5';
        $type->name = 'uphol';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 6;
        $type->invoices_id = 6;
        $type->n_control = '6';
        $type->n_reference ='6';
        $type->name = 'EFECTIVO';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();

        $type = new Payments();
        $type->payment_method_id = 7;
        $type->invoices_id = 7;
        $type->n_control = '7';
        $type->n_reference ='7';
        $type->name = 'BS';
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->canceled = $faker->boolean();
        $type->save();
    }
}
