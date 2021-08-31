<?php

namespace Database\Factories;
use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clients_id' => $this->faker->numberBetween(1, 4),
            'n_contract' => $this->faker->unique()->randomDigit(30),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
