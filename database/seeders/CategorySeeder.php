<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoriesData = [
            [
                'name' => 'Electronics',
                'status' => 'active',
                'children' => [
                    'Mobile Phones' => [
                        'Smartphones' => [
                            'Samsung', 'Apple', 'Google', 'OnePlus',
                        ],
                        'Feature Phones',
                        'Refurbished Phones',
                        'Mobile Accessories' => [
                            'Phone Cases', 'Chargers' => [
                                'Wall Chargers', 'Car Chargers',
                            ], 'Screen Protectors', 'Headphones',
                        ],
                    ],
                    'Laptops' => [
                        'Gaming Laptops',
                        'Ultrabooks',
                        'Business Laptops',
                        'Laptop Accessories' => [
                            'Laptop Bags', 'Laptop Stands', 'Docking Stations',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Fashion',
                'status' => 'active',
                'children' => [
                    'Men\'s Clothing',
                    'Women\'s Clothing',
                    'Footwear',
                    'Accessories' => [
                        'Belts', 'Hats', 'Scarves', 'Socks',
                    ],
                    'Jewelry' => [
                        'Rings', 'Necklaces', 'Earrings', 'Bracelets',
                    ],
                    'Watches',
                    'Bags' => [
                        'Handbags', 'Backpacks', 'Totes', 'Clutches',
                    ],
                ],
            ],
            [
                'name' => 'Home & Garden',
                'status' => 'active',
                'children' => [
                    'Furniture' => [
                        'Living Room', 'Bedroom', 'Dining Room', 'Office',
                    ],
                    'Home Decor' => [
                        'Wall Art', 'Candles', 'Vases', 'Clocks',
                    ],
                    'Kitchen Appliances' => [
                        'Refrigerators', 'Microwaves', 'Blenders', 'Coffee Makers',
                    ],
                    'Bedding' => [
                        'Sheets', 'Comforters', 'Pillows', 'Bed Sets',
                    ],
                    // Add more subcategories and sub-subcategories here as needed
                ],
            ],
            [
                'name' => 'Books & Literature',
                'status' => 'active',
                'children' => [
                    'Fiction', 'Non-Fiction', 'Mystery', 'Romance',
                    'Science Fiction', 'Fantasy', 'Biography', 'Self-Help',
                ],
            ],
            [
                'name' => 'Toys & Games',
                'status' => 'active',
                'children' => [
                    'Action Figures', 'Board Games', 'Dolls', 'Educational Toys',
                    'Puzzles', 'Outdoor Toys', 'Building Blocks', 'Remote Control Toys',
                ],
            ],
            [
                'name' => 'Sports & Outdoors',
                'status' => 'active',
                'children' => [
                    'Fitness Equipment', 'Camping Gear', 'Hiking Gear', 'Team Sports',
                    'Outdoor Recreation', 'Water Sports', 'Hunting & Fishing', 'Biking',
                ],
            ],
            [
                'name' => 'Beauty & Personal Care',
                'status' => 'active',
                'children' => [
                    'Skin Care', 'Hair Care', 'Cosmetics', 'Fragrances',
                    'Personal Hygiene', 'Beauty Tools', 'Dental Care', 'Bath & Body',
                    'Men\'s Grooming', 'Health & Wellness',
                ],
            ],
            // Add more main categories and subcategories as needed
        ];

        foreach ($categoriesData as $categoryData) {
            $category = Category::create([
                'name' => $categoryData['name'],
                'status' => $categoryData['status'],
            ]);

            if (isset($categoryData['children'])) {
                $this->createSubcategories($categoryData['children'], $category);
            }
        }
    }

    protected function createSubcategories($subcategoriesData, $parentCategory)
    {
        foreach ($subcategoriesData as $subcategoryName => $subcategoryChildren) {
            if (is_array($subcategoryChildren)) {
                // Create subcategory
                $subcategory = Category::create([
                    'name' => $subcategoryName,
                    'status' => 'active',
                    'parent_id' => $parentCategory->id,
                ]);
                // Recursively create sub-subcategories
                $this->createSubcategories($subcategoryChildren, $subcategory);
            } else {
                // Create regular subcategory
                Category::create([
                    'name' => $subcategoryChildren,
                    'status' => 'active',
                    'parent_id' => $parentCategory->id,
                ]);
            }
        }
    }
}
