<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Form;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'guardian_name' => $this->faker->name,
            'guardian_phone' => $this->faker->phoneNumber,
            'enrollment_date' => $this->faker->date(),
            'class_grade' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'section' => $this->faker->randomElement(['A', 'B', 'C']),
            'roll_number' => $this->faker->unique()->randomNumber(),
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
