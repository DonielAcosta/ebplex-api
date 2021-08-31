<?php

namespace Database\Factories;
use App\Models\ExtraAtributes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtraAtributesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExtraAtributes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'installation_orders_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'value' => $this->faker->randomDigit()
        ];
    }
}
