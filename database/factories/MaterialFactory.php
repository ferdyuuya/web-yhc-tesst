<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;
use App\Models\Courses;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    protected $model = Material::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(10), 
            'description' => $this->faker->paragraph, 
            'link' => $this->faker->url, 
            'courses_id' => Courses::inRandomOrder()->first()->id,
        ];
    }
}
