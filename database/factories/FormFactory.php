<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Student;
use App\Models\Form;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FormFactory extends Factory
{
 
    protected $model = Form::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100), // Adjust the range as needed
            'form_request_date' => $this->faker->date(),
            'form_status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'form_content' => $this->faker->paragraphs(3, true),
            'rejection_reason' => $this->faker->optional(0.3)->sentence(),
            'academic_year' => $this->faker->year,
            'course_program' => $this->faker->randomElement(['Mathematics', 'Science', 'History', 'English']), // Add more options as needed
            'form_release_date' => $this->faker->optional(0.5)->date(),
        ];
    }
}
