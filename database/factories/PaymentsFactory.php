<?php

namespace Database\Factories;
use App\Models\Payments;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_method_id' => $this->faker->numberBetween(1, 4),
            'invoices_id' => $this->faker->numberBetween(1, 4),
            'n_control' => $this->faker->unique()->randomDigit(30),
            'n_reference' => $this->faker->unique()->randomDigit(30),
            'name' => $this->faker->name(),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'canceled' => $this->faker->boolean()
        ];
    }
}
