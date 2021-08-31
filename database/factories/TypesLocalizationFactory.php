<?php

namespace Database\Factories;
use App\Models\TypesLocalization;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypesLocalizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypesLocalization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
