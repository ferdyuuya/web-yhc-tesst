<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\coursess>
 */
class CoursesFactory extends Factory
{
    protected $model = Courses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(10), 
            'description' => $this->faker->paragraph, 
            'duration' => $this->faker->numberBetween(1, 100), 
        ];
    }
}
