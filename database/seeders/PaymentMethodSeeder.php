<?php

namespace Database\Seeders;
use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PaymentMethodSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create();

    $type = new PaymentMethod();
    $type->name = 'Bofa-Zelle';
    $type->save();

    $type = new PaymentMethod();
    $type->name = 'Paypal';
    $type->save();

    $type = new PaymentMethod();
    $type->name =  'Airtm';
    $type->save();

    $type = new PaymentMethod();
    $type->name =  'Skrill';
    $type->save();

    $type = new PaymentMethod();
    $type->name =  'uphol';
    $type->save();

    $type = new PaymentMethod();
    $type->name =  'EFECTIVO';
    $type->save();

    $type = new PaymentMethod();
    $type->name =  'BS';
    $type->save();
  }
}
