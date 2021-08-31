<?php

namespace Database\Factories;
use App\Models\UserData;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => $this->faker->unique(true)->numberBetween(1, 4),
            'sex_user_data_id' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastName(),
            'identification' => $this->faker->unique()->randomNumber(8, true),
            'date_of_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'phone' =>$this->faker->randomNumber(8, true)
        ];
    }
}
