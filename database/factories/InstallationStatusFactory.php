<?php

namespace Database\Factories;
use App\Models\InstallationStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallationStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InstallationStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'status' => $this->faker->text(10),
            'colour' => $this->faker->hexcolor(),
            'dark'=>$this->faker->boolean()
        ];
    }
}
