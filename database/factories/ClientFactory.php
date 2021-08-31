<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'types_id' => $this->faker->numberBetween(1, 4),
            'identification' => $this->faker->randomNumber(8, true),
            'lastname' => $this->faker->lastName(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->e164PhoneNumber(15),
            'email' => $this->faker->email(),
        ];
    }
}
