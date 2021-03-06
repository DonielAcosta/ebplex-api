<?php

namespace Database\Factories;
use App\Models\plans;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlansFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = plans::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat()
        ];
    }
}
