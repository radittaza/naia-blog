<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function Laravel\Prompts\text;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $title = fake()->sentence(5);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author' => fake() -> name(),
            'body' => fake()->text(600)
        ];
    }
}
