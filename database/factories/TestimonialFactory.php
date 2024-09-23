<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(), // This will generate a fake image URL
            'is_published' => $this->faker->boolean(80), // 80% chance of being published
        ];
    }
}