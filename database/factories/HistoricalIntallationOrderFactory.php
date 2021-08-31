<?php

namespace Database\Factories;
use App\Models\HistoricalIntallationOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricalIntallationOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistoricalIntallationOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'installation_orders_id' => $this->faker->numberBetween(1, 4),
            'installation_statuses_id' => $this->faker->numberBetween(1, 4),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'description' => $this->faker->text()
        ];
    }
}
