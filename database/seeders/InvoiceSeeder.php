<?php

namespace Database\Seeders;
use App\Models\Invoice;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $type = new Invoice();
        $type->subscriptions_id = 1;
        $type->n_control = '1';
        $type->n_reference ='1';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 2;
        $type->n_control ='2';
        $type->n_reference = '2';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 3;
        $type->n_control ='3';
        $type->n_reference = '3';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 4;
        $type->n_control ='4';
        $type->n_reference = '4';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 5;
        $type->n_control = '5';
        $type->n_reference = '5';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 6;
        $type->n_control = '6';
        $type->n_reference ='6';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();


        $type = new Invoice();
        $type->subscriptions_id = 7;
        $type->n_control = '7';
        $type->n_reference = '7';
        $type->total_amount =  $faker->randomFloat();
        $type->date = $faker->date($format = 'Y-m-d', $max = 'now');
        $type->status = $faker->text(10);
        $type->save();
    }
}
