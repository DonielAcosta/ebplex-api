<?php

namespace Database\Factories;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'n_control' => $this->faker->unique(true)->numberBetween(1, 5000),
            'n_reference' => $this->faker->unique(true)->numberBetween(1, 5000),
            'total_amount' => $this->faker->randomFloat(),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'status' => $this->faker->text(10),
            'subscriptions_id' => $this->faker->numberBetween(1, 4)
        ];
    }
}
