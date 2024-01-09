<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => User::factory()->create(),
            'institution_name' => $this->faker->company,
            'degree' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'field_of_study' => $this->faker->word,
            'graduation_year' => $this->faker->year,
        ];
    }
}
