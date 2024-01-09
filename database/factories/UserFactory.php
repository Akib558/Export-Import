<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Education;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $user->address()->save(Address::factory()->make());
            $user->education()->save(Education::factory()->make());
        });
    }
}
