<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BlogPost;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            // Add more fields as needed
        ];
    }
}
