<?php

namespace Database\Factories;
use App\Models\InstallOrderUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallOrderUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InstallOrderUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => $this->faker->numberBetween(1, 4),
            'installation_orders_id' => $this->faker->numberBetween(1, 4),
            'manager' => $this->faker->boolean()
        ];
    }
}
