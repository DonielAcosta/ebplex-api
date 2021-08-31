<?php

namespace Database\Factories;
use App\Models\Localization;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Localization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'types_localizations_id' => $this->faker->numberBetween(1, 4),
            'localizations_id' => $this->faker->numberBetween(1, 4),
            'name' => $this->faker->name()
        ];
    }
}
