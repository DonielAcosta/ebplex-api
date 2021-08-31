<?php

namespace Database\Factories;
use App\Models\ServiceAtributes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceAtributesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceAtributes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'services_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'value' => $this->faker->randomFloat()
        ];
    }
}
