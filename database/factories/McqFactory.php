<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mcq>
 */
class McqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject_id' => $this->faker->randomNumber(),
            'question' => $this->faker->text(),
            'correct_answer' => $this->faker->text(),
            'answer_one' => $this->faker->text(),
            'answer_two' => $this->faker->text(),
            'answer_three' => $this->faker->text(),
            'answer_four' => $this->faker->text(),
            'hint' => $this->faker->text(),
            'reference' => $this->faker->text(),
            'status' => $this->faker->boolean(),
        ];
    }
}
