<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost; // Assuming your BlogPost model is in the App\Models namespace

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        // Use the factory to create 10 blog posts
        BlogPost::factory(10)->create();
    }
}

