<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\UserData;
use App\Models\TypeUser;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_users_id' => TypeUser::factory(),
            'owner_clients_id' => $this->faker->numberBetween(1, 4),
            'email' => $this->faker->unique()->safeEmail,
            'active' => true,
            'password' => '$2y$10$in0EnAop5EWAXDwdBaewNeWS8QK3A4quUehRI9mCCYkXy6hJu0afm', // password comun123.
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [    
            ];
        });
    }
}
