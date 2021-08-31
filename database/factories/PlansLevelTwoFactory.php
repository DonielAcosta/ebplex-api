<?php

namespace Database\Factories;
use App\Models\PlansLevelTwo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlansLevelTwoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlansLevelTwo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat()
        ];
    }
}
