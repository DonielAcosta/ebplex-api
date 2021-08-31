<?php

namespace Database\Factories;
use App\Models\OwnerClient;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OwnerClient::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            // 'users_id' => $this->faker->numberBetween(1, 4),
            'identification' => $this->faker->randomNumber(8, true),
            'name' => $this->faker->name(),
            'phone' => $this->faker->e164PhoneNumber(15),
            'email' => $this->faker->email(),
            'description' => $this->faker->text(5)
        ];
    }
}
