<?php

namespace Database\Factories;
use App\Models\InstallationOrders;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallationOrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InstallationOrders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'installation_statuses_id' => $this->faker->numberBetween(1, 4),
            'contracts_id' => $this->faker->numberBetween(1, 4),
            'date_asig' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'date_ord' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'date_end' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'description' => $this->faker->text(100)
        ];
    }
}
