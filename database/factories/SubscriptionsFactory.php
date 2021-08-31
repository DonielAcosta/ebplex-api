<?php

namespace Database\Factories;
use App\Models\Subscriptions;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscriptions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plans_id' => $this->faker->numberBetween(1, 4),
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name(),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'price' => $this->faker->randomFloat(),
            'inactive'=>$this->faker->boolean()
        ];
    }
}
