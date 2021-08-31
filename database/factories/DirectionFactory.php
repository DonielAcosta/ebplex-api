<?php

namespace Database\Factories;
use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clients_id' => $this->faker->unique(true)->numberBetween(1, 4),
            'localizations_id' => $this->faker->numberBetween(1, 2),
            'direction' => $this->faker->text(50),
            'house_number' => $this->faker->randomDigit(30),
            'apartment_number_tower_and_floor' => $this->faker->randomDigit(30),
            'urbanization' => $this->faker->text(30)
        ];
    }
}
