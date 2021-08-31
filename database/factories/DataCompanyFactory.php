<?php

namespace Database\Factories;
use App\Models\DataCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataCompany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'bussiness_name' => $this->faker->text(30),
            'legal_representative' => $this->faker->name()
        ];
    }
}
