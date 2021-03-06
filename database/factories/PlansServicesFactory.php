<?php

namespace Database\Factories;
// use App\Models\PlansServices;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlansServicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlansServices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'plans_level_twos_id' => $this->faker->numberBetween(1, 4),
             'services_id' => $this->faker->numberBetween(1, 4)
        ];
    }
}
