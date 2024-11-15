<?php

namespace Database\Factories;

use App\Models\LessonCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LessonCategory>
 */
class LessonCategoryFactory extends Factory
{

    protected $model = LessonCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->slug(),
            'description' => fake()->text(50),
        ];
    }
}
