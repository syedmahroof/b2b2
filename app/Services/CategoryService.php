<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getCategoriesWithChildren()
    {
        return Category::with('children.children')->whereNull('parent_id')->get();
    }
}
